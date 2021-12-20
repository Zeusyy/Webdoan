<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Models\Room;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return redirect(app()->getLocale());
// });

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
    
Route::middleware(['auth','verified', 'role:admin'])->group(function () {
    
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    // ----user---
    Route::resource('/users','UserController')
    ->except([
        'create','store','show','edit','update'
    ]);
    Route::get('/user-search','UserController@search')
    ->name('user.search');
    
    Route::get('/users/sort/{role}','UserController@roleSort')
    ->name('user.roleSort');
    
    Route::get('/dashboard', 'DashboardController@index')
    ->name('dashboard.index');

    // --- manage ---
    Route::prefix('manage')->group(function(){
        // --tour--
        Route::get('tour','TourController@indexManage')
        ->name('manage.tourIndex');

        Route::delete('deleteTourAjax/{id}','TourController@deleteManageAjax')
        ->name('manage.deleteTourAjax');

        Route::delete('deleteTour/{tour}','TourController@deleteManage')
        ->name('manage.deleteTour');

        // --hotel--
        Route::get('hotel','HotelController@indexManage')
        ->name('manage.hotelIndex');

        Route::delete('deleteHotelAjax/{id}','HotelController@deleteManageAjax')
        ->name('manage.deleteHotelAjax');

        // --article--
        Route::get('article','ArticleController@indexManage')
        ->name('manage.articleIndex');

        Route::delete('deleteArticleAjax/{id}','ArticleController@deleteManageAjax')
        ->name('manage.articleHotelAjax');

        // ---comment----
        Route::get('comment','CommentController@index')
        ->name('manage.comment');
        Route::delete('comment/{comment}','CommentController@delete')
        ->name('manage.commentDelete');

        Route::delete('articleComment/{comment}','ArticleCommentController@delete')
        ->name('manage.ArticleCommentDelete');
    });

    
});
Route::middleware(['auth','verified', 'roles:admin,employee'])->group(function () {
    
    // ----- receipt ------
    Route::get('/receiptAccepted','ReceiptController@acceptedIndex')
    ->name('receipt.indexAccepted');

    Route::get('/receipt-search','ReceiptController@search')
    ->name('receipt.search');

    Route::get('/receipt-waiting-search','ReceiptController@searchWaiting')
    ->name('receiptWaiting.search');

    Route::get('/receiptPaid','ReceiptController@paidIndex')
    ->name('receipt.indexPaid');

    Route::get('/receiptCanceled','ReceiptController@canceledIndex')
    ->name('receipt.indexCanceled');

    Route::get('/receiptWaiting','ReceiptController@waitingIndex')
    ->name('receipt.waiting');

    Route::resource('/receipt','ReceiptController')
    ->except([
        'index','show'
    ]);

    Route::resource('/receipt-detail','RecepitDetailController')
    ->except([
        'index','create', 'store',
    ]);
    Route::post('accept/{receipt}','ReceiptController@receiptAccept')
    ->name('receipt.accept');

    Route::get('pay/{receipt}','ReceiptController@receiptPay')
    ->name('receipt.pay');

    Route::get('unpay/{receipt}','ReceiptController@receiptUnPay')
    ->name('receipt.unpay');

    Route::get('cancel/{receipt}','ReceiptController@receiptCancel')
    ->name('receipt.cancel');

    Route::get('finish/{receipt}','ReceiptController@receiptFinish')
    ->name('receipt.finish');

    Route::get('un-finish/{receipt}','ReceiptController@receiptUnFinish')
    ->name('receipt.un-finish');

    Route::resource('/hotel','HotelController')
    ->except([
        'index','show'
    ]);

    Route::resource('/room','RoomController')
    ->except([
        'index','show','create'
    ]);
    Route::get('/room/create/{hotel}','RoomController@create')
    ->name('room.create');

    Route::resource('/tour','TourController')
    ->except([
        'index','show'
    ]);
    
    // ------------ income -------------
    Route::get('income','IncomeController@index')
    ->name('income.index');

    Route::get('income/{year}/{month}/{day}','IncomeController@day')
    ->middleware('day','year')
    ->name('income.day');

    Route::get('income/{year}/{month}','IncomeController@month')
    ->middleware('year','month')
    ->name('income.month');

    Route::get('income/{year}','IncomeController@year')
    ->middleware('year')
    ->name('income.year');

    Route::get('income-current-day','IncomeController@incomeCurrentDay')
    ->name('income.currentDay');

    Route::get('income-current-month','IncomeController@incomeCurrentMonth')
    ->name('income.currentMonth');

    Route::get('income-current-year','IncomeController@incomeCurrentYear')
    ->name('income.currentYear');

    // ---------------blog-------------

    Route::resource('article','ArticleController')
    ->except([
        'index','show'
    ]);

    // --------article comment---------
    Route::delete('articleComment/{articleComment}','ArticleCommentController@destroy')
    ->name('articleComment.destroy');

    Route::delete('comment/{comment}','CommentController@destroy')
    ->name('comment.destroy');

});
    
Route::middleware(['auth', 'roles:user,employee'])->group(function () {
    
    

});
    
Route::middleware(['auth','verified'])->group(function () {

    //booking
    Route::get('create/{room}','HotelBookingController@create')
    ->name('hotelbooking.create');

    
    Route::resource('booking','BookingController');

    Route::get('product/{code}','ProductController@showProduct')
    ->name('product.show');
    
    Route::get('receipt','ReceiptController@index')
    ->name('receipt.index');

    Route::get('receipt/{receipt}','ReceiptController@show')
    ->name('receipt.show');

    // cart
    Route::get('/addCart/{product}','CartController@AddCart')
    ->name('TourAddCart');

    Route::get('/addCartRoom/{product}','CartController@RoomAddCart')
    ->name('RoomAddCart');
    
    Route::get('/cartQuantity','CartController@getCurrentCartQuantity')
    ->name('cartQuantity');
    
    Route::get('/deleteCart/{product}','CartController@deleteCart')
    ->name('deleteCart');

    Route::get('/clearCart','CartController@clearCart')
    ->name('clearCart');

    Route::post('/updateCart','CartController@updateCart')
    ->name('updateCart');
    
    Route::post('/checkoutCart','CartController@checkoutCart')
    ->name('checkoutCart');

    Route::get('cart','CartController@index')
    ->name('cart.index');

    Route::get('users/{user}/edit','UserController@edit')
    ->middleware('userInfo')
    ->name('users.edit');
    
    ///
    Route::get('/user', function () {
        return view('user.index');
    })->name('user');

    Route::get('/order/{room}', function ($roomID) {
        $room = Room::where('id',$roomID)->first();
        return view('user.order.create')->with('room',$room);
    })->name('orderForm');

    Route::post('/order','RoomController@order')
    ->name('room.order');

    Route::resource('/HotelBooking','HotelBookingController')
    ->except([
        'index','show','edit','update','destroy'
    ]);
    
    Route::get('users/{user}','UserController@show')
    ->middleware('userInfo')
    ->name('users.show');

    Route::put('users/{user}','UserController@update')
    ->middleware('userInfo')
    ->name('users.update');
    
    Route::get('/test', 'UserController@profile')->name('test');    
    
    //comment
    Route::post('comment','CommentController@addComment')
    ->name('comment.add');
    

    Route::resource('articleComment','ArticleCommentController')
    ->except(['destroy']);
});

// guest

Route::get('/payment',function(){
    return view('payment.index');
})
->name('payment.index');
Route::get('/introduction',function(){
    return view('introduction.index');
})
->name('introduction.index');
Route::get('/search','HomeController@search')
->name('home.search');

Route::get('/home', 'HomeController@index')
->name('home');    

Route::get('tour','TourController@index')
->name('tour.index');

Route::get('tour/{trip}','TourController@show')
->name('tour.show');

Route::get('hotel','HotelController@index')
->name('hotel.index');

Route::get('hotel/{hotel}','HotelController@show')
->name('hotel.show');


//-----------comment------------

Route::get('comment/{product_code}','CommentController@getCommentsOfProduct')
->name('comment.show');

//-----------blog------------

Route::get('article','ArticleController@index')
->name('article.index');
Route::get('article/{article}','ArticleController@show')
->name('article.show');

// -----sort-----
Route::post('sort','ProductController@sort')
->name('sort');
Route::get('place/{place_id}/{product_type}','ProductController@place')
->name('place');

// -------momo---------
Route::get('responeFromMomo','MomoController@getResponeFromMomo')
->name('momo.getRes');



Route::get('/upload',function(){
    // // $day = Auth::user()->created_at->toDateTimeString();
    // // $test =  date('d/m/Y',strtotime($day));
    // // var_dump($test);
    // $day = "20/04/2000";
    // $day2 = DateTime::createFromFormat('d/m/Y',$day);
    // // echo $day2->format('d/m/Y');
    // var_dump($day2);
    return view('upload');

});
Route::post('/upload',function(Request $request){
    $uploadedFileUrl = Cloudinary::upload($request->file('avatar')->getRealPath(),[
        'folder' => 'FnGO/UserAvatar',
    ])->getSecurePath();
    dd($uploadedFileUrl);
})->name('upload');

Route::get('language/{locale}','LanguageController@index')
    ->name('language');
    
Route::get('/email', function () {
    return view('mail/welcome');
});

Route::post('/email','MailController@test')
->name('mail');
    





