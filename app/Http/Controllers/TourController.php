<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourRequest;
use App\Models\Tour;
use App\Models\Trip;
use App\Services\CommentServiceInterface;
use App\Services\TourServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    private $tour;
    private $comment;

    public function __construct
    (
        CommentServiceInterface $comment,

        TourServiceInterface    $tour
    )
    {
        $this->comment  = $comment;
        $this->tour     = $tour;
    }
    public function userOrAdmin()
    {
        if(!Auth::check() || Auth::user()->role->name == 'user')
           return 'user';
        return 'admin';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->search)
            $trips = $this->tour->search($request->search);
        else
            $trips = $this->tour->all();

        $role           = $this->userOrAdmin();

        $CityProvinces  = $this->tour->getAllCityProvince();

        $view           = $role . ".tour.index";

        return view($view)
        ->with('trips',         $trips)
        ->with('CityProvinces', $CityProvinces);
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $CityProvince   = $this->tour->getAllCityProvince();
        $transports     = $this->tour->getAllTransport();
        
        return view('admin.tour.create')
        ->with('cty_province',  $CityProvince)
        ->with('transports',    $transports);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourRequest $request)
    {
        //
        $this->tour->store($request);

        return redirect()->route('tour.index');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $trip)
    {
        //
        $role       = $this->userOrAdmin();

        $comments   = $this->comment->getAllCommentsOfProduct($trip->product_code);
        
        // convert comments json to plain old PHP array
        $array      = json_decode($comments,true);
        
        // check array have comment or not
        $have_comment = true;
        if(!$array)
            $have_comment = false;
        
        $view = $role . ".tour.detail";

        return view($view)
        ->with('trip',          $trip->subTour)
        ->with('tour',          $trip)
        ->with('comments',      $comments)      // json
        ->with('have_comment',  $have_comment); // boolean
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        
        //
        $CityProvince = $this->tour->getAllCityProvince();
        $transports     = $this->tour->getAllTransport();
        
        return view('admin.tour.edit')
        ->with('tour',          $tour)
        ->with('cty_province',  $CityProvince)
        ->with('transports',    $transports);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Tour $tour
     * @return \Illuminate\Http\Response
     */
    public function update(TourRequest $request, Tour $tour)
    {
        
        //
        $this->tour->update($request,$tour);
        
        return redirect()->route('tour.edit',$tour);
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Tour $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
        $this->tour->delete($tour);
        return redirect()->route('tour.index');
    }

    // manage

    public function indexManage()
    {
        $tours          = $this->tour->all();
        
        $CityProvinces  = $this->tour->getAllCityProvince();

        return view('admin.manage tour.index')
        ->with('tours',         $tours)
        ->with('CityProvinces', $CityProvinces);
    }

    public function deleteManageAjax($id)
    {
        $deleteTour = $this->tour->getTourByID($id);
        $this->tour->delete($deleteTour);

        $tours = $this->tour->all();
        return view('admin.manage tour.change')
        ->with('tours',$tours);

    }
    public function deleteManage(Tour $tour)
    {
        // $deleteTour = $this->tour->getTourByID($id);
        $this->tour->delete($tour);
        // return $tour;
        return redirect()->route('manage.tourIndex')
        ->with('message','Delete success!');

    }
}
