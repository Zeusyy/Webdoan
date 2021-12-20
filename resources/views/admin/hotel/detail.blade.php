@extends('layouts.admin')
@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link href="{{ asset('css/hotel.css') }}" rel="stylesheet">
<link href="{{ asset('css/comment.css') }}" rel="stylesheet">

<div style="max-width: 1300px" class="container">
    <form action="{{route('hotel.index')}}" method="GET">
        <div class="input-group mb-3 searchBar">
            <input type="text" placeholder="{{__('hotel.Search')}}" name="search" value="{{ request()->get('search') }}"
                class="form-control" placeholder="">
            <div class="input-group-append">
                <button style="width: 100px" class="btn btn-search btn-outline-secondary" type="submit"><i
                        class="bi bi-search"></i></button>
            </div>
        </div>
    </form>
</div>
<div style="max-width: 1300px;padding: 20px;" class="container rounded bg-white">
    <div class="admin-button">
        <div class="row">
            <a class="btn btn-success col admin-button" href="{{route('hotel.create')}}"><i class="bi bi-plus-lg"></i></a>
            <a class="btn btn-primary col admin-button" href="{{route('hotel.edit',$hotel)}}"><i class="bi bi-pencil-square"></i></a>
            <div style="padding: 0px"  class="col admin-button" >
                <form action=" {{route('hotel.destroy',$hotel)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button style="width: 100%" class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                </form>
            </div>
        </div>
    </div>
    <h2 class="hotel-name-detail">{{$hotel->name}}</h2>
    <div>
        <i class="bi bi-pin-map-fill"></i> {{$hotel->address}}
    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:#e6eaed">
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <img style="width: 100%;" loading="lazy" alt="tour Image" class="img_fluid rounded"
                    src="{{$hotel->avatar}}">
            </div>
        </div>
    </div>
<div style="margin-top: 20px" class="d-flex justify-content-end">
    <a class="btn btn-success" href="{{route('room.create',$hotel)}}">{{__('hotel.Add room type')}}</a>
</div>
</div>

@foreach ($hotel->roomtype as $roomtype)
<div style="max-width: 1300px;margin-top: 20px;padding: 20px;" class="container rounded bg-white">
    <div class="room-type-warpper">
        <div class="admin-button">
            <div class="row">
                <a class="btn btn-primary col admin-button" href="{{route('room.edit',$roomtype)}}"><i class="bi bi-pencil-square"></i></a>
                <div style="padding: 0px"  class="col admin-button" >
                    <form action=" {{route('room.destroy',$roomtype)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button style="width: 100%" class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <h3>{{$roomtype->name}}</h3>
        <div class="row">
            <div style="margin-bottom: 10px" class="col-md-4 d-flex justify-content-center">
                <img style="max-width: 100%;max-height:250px" loading="lazy" alt="room image" class="img_fluid rounded"
                    src="{{$roomtype->avatar}}">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <i class="fas fa-bed"></i>
                        @if ($roomtype->bed == '1-2')
                        1 {{__('hotel.Double bed')}}
                        @else
                        @if ($roomtype->bed == '1-1')
                        1 {{__('hotel.Single bed')}}
                        @else
                        @if ($roomtype->bed == '2-1')
                        2 {{__('hotel.Single bed')}}
                        @else
                        2 {{__('hotel.Double bed')}}
                        @endif
                        @endif
                        @endif
                    </div>
                    <div class="col-6 col-md-4">
                        <i class="bi bi-people-fill"></i>&nbsp
                        {{$roomtype->max_person}} {{__('hotel.Guest')}}
                    </div>
                </div>
                <hr style="height:2px;border-width:0;color:gray;background-color:#e6eaed">
                <div class="row">
                    <div class="col-4 col-md-4">
                        @if ($roomtype->breakfast == false)
                        <i class="bi bi-backspace-reverse"></i>
                        {{__('hotel.Without breakfast')}}
                        @else
                        <i class="fas fa-utensils"></i>
                        {{__('hotel.Free breakfast')}}
                        @endif<br>
                        <i class="bi bi-wifi"></i>
                        {{__('hotel.Free wifi')}}
                    </div>
                    <div class="col-4 col-md-4">
                        @if ($roomtype->refund == false)
                        <i class="bi bi-backspace-reverse"></i>
                        {{__('hotel.Non-refundable')}}
                        @else
                        <i class="bi bi-cash-stack"></i>
                        {{__('hotel.Refundable')}}
                        @endif<br>
                    </div>
                    <div class=" col-4 col-md-4">
                        <div class="float-right">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"> </div>
                    <div class="col-12">
                        <div class="">
                            <div class="float-right">
                                <span id="money" style="">
                                    {{$roomtype->money($roomtype->price)}}
                                </span><br>
                                <span class="float-right">/ {{__('hotel.room')}} / {{__('hotel.night')}}
                                </span>
                            </div>
                            @if($roomtype->room_quantity > $roomtype->purchases_number)
                                <form action="{{route('hotelbooking.create',$roomtype)}}" method="GET">
                                    <button id="bookbtn" type="submit" class="btn btnAddCart">{{__('hotel.Book now')}}</button>
                                </form>
                            @else
                                <form>
                                    <button id="bookbtn" type="button" class="btn btnOutOfRoom">{{__('hotel.Out of rooms')}}</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<div id="change">
    <div style="max-width: 1300px;margin-top: 20px;padding: 20px;" class="container rounded bg-white">
        <div class="d-flex justify-content-center row">
            <div style="width: 100%" class="coment-bottom bg-white">
                @auth
                <div class="input-comment d-flex flex-row add-comment-section mt-4 mb-4">
                    <img class="img-fluid img-responsive rounded-circle mr-2" src="{{Auth::user()->avatar}}" width="38">
                    <input id="comment" data-product="{{$hotel->product_code}}" type="text" class="form-control mr-3" placeholder="Add comment">
                    <button onclick="addComment('{{$hotel->product_code}}')" class="btn btn-primary" type="button">Comment</button>
                </div>
                @endauth

                @include('comment.layout.index') 
                
            </div>
        </div>
    </div>
</div>
<script>
    function addCart(id) {

        $.ajax({
            url: "/addCart/" + id,
            type: 'GET',

        }).done(function (respone) {
            var icon = '<span class="bi bi-bag-check test"></span>';
            alertify.notify(icon + " " + respone, 'custom');
        });

        $.ajax({
            url: "/cartQuantity",
            type: 'GET',c
        }).done(function (respone) {
            $('#CartCount').text(respone);
        });
    }
    function addComment(product_code){
        var comment = {product: $('#comment').data('product'), comment: $('#comment').val()};
        
        $.ajax({
            // will 405 error if url:comment instead /comment !!!!
            url: "/comment",
            type:'POST',
            data:{
                "_token": "{{ csrf_token() }}",
                "data": comment,
            }
        }).done(function(respone){
            $("#change").empty();
            $("#change").html(respone);
        });
    }
</script>
@endsection