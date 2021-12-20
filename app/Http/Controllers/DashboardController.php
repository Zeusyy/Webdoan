<?php

namespace App\Http\Controllers;

use App\Services\ArticleServiceInterface;
use App\Services\HotelServiceInterface;
use App\Services\ReceiptServiceInterface;
use App\Services\TourServiceInterface;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    private $user;
    private $receipt;
    private $hotel;
    private $tour;
    private $article;

    public function __construct
    (
        UserServiceInterface    $user,

        ReceiptServiceInterface $receipt,

        HotelServiceInterface   $hotel,

        TourServiceInterface    $tour,

        ArticleServiceInterface $article
        
    )
    {
        $this->user     = $user;

        $this->receipt  = $receipt;

        $this->hotel    = $hotel;

        $this->tour     = $tour;

        $this->article  = $article;

    }

    public function index()
    {
        $users                  = $this->user->countUser('all');
        
        $countUser              = $this->user->countUser('user');
        
        $countEmployee          = $this->user->countUser('employee');
        
        $countAdmin             = $this->user->countUser('admin');
        
        $countNewUser           = $this->user->countNewUser();
        
        $countWaitingOrders     = $this->receipt->getNewReceiptWithoutPaginate()->count();
        
        $countPaidOrdersToday   = $this->receipt->paidToday()->count();
        
        $topshotel              = $this->hotel->getTopPurchases(4);
        
        $topstour               = $this->tour->getTopPurchases(4);
        
        $topArticle             = $this->article->getTopArticle(4);

        
        return view('admin.dashboard.content')
        ->with('countUser',             $countUser)

        ->with('countNewUser',          $countNewUser)

        ->with('countWaitingOrders',    $countWaitingOrders)

        ->with('countPaidOrdersToday',  $countPaidOrdersToday)

        ->with('countEmployee',         $countEmployee)

        ->with('countAdmin',            $countAdmin)

        ->with('countAllUser',          $users)

        ->with('topshotel',             $topshotel)

        ->with('topstour',              $topstour)

        ->with('topArticle',            $topArticle);
        
    }
}
