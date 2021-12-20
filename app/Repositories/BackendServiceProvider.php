<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\HotelRepositoryInterface',
            'App\Repositories\HotelRepository',
        );

        $this->app->bind(
            RoomRespositoryInterface::class,
            RoomRespository::class, //can't copy paste
        );

        $this->app->bind(
            TourRepositoryInterface::class,
            TourRepository::class,
        );

        $this->app->bind(
            'App\Repositories\UserRepositoryInterface',
            'App\Repositories\UserRepository',
        );

        $this->app->bind(
            'App\Repositories\ReceiptRepositoryInterface',
            'App\Repositories\ReceiptRepository',
        );
        
        $this->app->bind(
            'App\Repositories\ReceiptDetailRepositoryInterface',
            'App\Repositories\ReceiptDetailRepository',
        );
        
        $this->app->bind(
            'App\Repositories\ProductRepositoryInterface',
            'App\Repositories\ProductRepository',
        );

        $this->app->bind(
            'App\Repositories\RoomRepositoryInterface',
            'App\Repositories\RoomRepository',
        );

        $this->app->bind(
            'App\Repositories\CommentRepositoryInterface',
            'App\Repositories\CommentRepository',
        );

        $this->app->bind(
            'App\Repositories\ArticleRepositoryInterface',
            'App\Repositories\ArticleRepository',
        );

        $this->app->bind(
            'App\Repositories\ArticleCommentRepositoryInterface',
            'App\Repositories\ArticleCommentRepository',
        );

        $this->app->bind(
            'App\Repositories\BookingRepositoryInterface',
            'App\Repositories\BookingRepository',
        );
        
    }
}