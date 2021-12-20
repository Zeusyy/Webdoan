<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Services\UserServiceInterface;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $user;

    public function __construct(UserServiceInterface $user)
    {
        $this->user = $user;
    }
    public function userOrAdmin()
    {
        if(Auth::user()->role->name == 'admin')
           return 'admin';
        return 'user';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = $this->user->all();

        return view('admin.user.index')
        ->with('users',$users);
    }
    public function onlyRole($role)
    {
        //
        $users = $this->user->onlyRole($role);

        return view('admin.user.index')
        ->with('users',$users);
    }
    
    public function search(Request $request)
    {   
        $keyword    = $request->search;

        $option     = $request->searchOptions;
        
        $users      = $this->user->search($keyword,$option);

        // kiem tra co phan trang hay khong
        if($users instanceof \Illuminate\Pagination\LengthAwarePaginator)
        {
            $view = "admin.user.index";

            return view($view)
            ->with('users',$users);
        } 
        // check collection vi get() tra ra collection, find thi khong

        if($users != null && !($users instanceof \Illuminate\Database\Eloquent\Collection))
            $users = array($users);
        
        $view = "admin.user.search";
        
        return view($view)
        ->with('users',$users); 
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $role = $this->userOrAdmin();

        $view = $role . '.user.edit';

        return (view($view)
        ->with('user',$user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //

        $role = $this->userOrAdmin();

        $view = $role . '.user.edit';

        return view($view)->with('user',$user);
        
    }
    
    // ham de test dual language
    public function profile($lang){
        // $user = User::find($id);
        // $role = $user->role->name;
        // $view = $role . '.user.edit';
        // dd($lang);
        
        return(view('home')->with('user',Auth::user()));
        // return view('test')->with('user',Auth::user());

        // return (view('admin.user.edit')->with('user',Auth::user()));
        
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        //
        $this->user->update($request,$user);

        return redirect()->route('users.show',[$user])
        ->with('message',__('user.Update profile'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $this->user->delete($user->id);

        return redirect()->route('users.index');
    }

    public function roleSort($role)
    {
        if($role == 'all')
            return redirect()->route('users.index');
        return $this->onlyRole($role);
    }
}
