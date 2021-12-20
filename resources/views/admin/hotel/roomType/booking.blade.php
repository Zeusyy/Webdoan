@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link href="{{ asset('css/hotel.css') }}" rel="stylesheet">

<input type="hidden" id="lang" name="lang" value="{{app()->getLocale()}}">
{{-- <h1 class="d-flex justify-content-center">{{__('hotel.create room type')}}</h1> --}}
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
<div style="max-width: 1300px;padding: 20px;"  class="container rounded bg-white">
    <div class="room-type-warpper">
        <h3>{{$roomtype->name}}</h3>
        <div class="row">
            <div class="col-md-4">
                <img style="max-width: 100%;" loading="lazy" alt="room image" class="img_fluid rounded"
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
                    <div class="col"></div>
                    <div class="col-12">
                        <div class="">
                            <div class="float-right">
                                <span id="money" style="">
                                    {{$roomtype->money($roomtype->price)}}
                                </span><br>
                                <span class="float-right">/ {{__('hotel.room')}} / {{__('hotel.night')}}
                                </span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div style="margin-top: 50px">
                    <form>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" id="day" min="1" value="1">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">{{__("hotel.night(s)")}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">{{__('hotel.Check-in date')}}</span>
                                    </div>
                                    <input type="date" id="date" class="form-control" id="basic-url">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 com-lg-3">
                                <button onclick="addCart()" type="button" class="btn btn-success btn-lg btn-block"><i
                                        style="font-size: 25px" class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="product_code" value="{{$roomtype->product_code}}">


</div>


<script>

    function addCart() {
        var product_code = document.getElementById("product_code").value;
        var day = document.getElementById("day").value;
        var date = document.getElementById("date").value;

        $.ajax({
            url: "/addCart/" + product_code + "?day=" + day + "&" + "date=" + date,
            type: 'GET',

        }).done(function (respone) {
            var icon = '<span class="bi bi-bag-check test"></span>';
            alertify.notify(icon + " " + respone, 'custom');
            // console.log(respone);
        });

        $.ajax({
            url: "/cartQuantity",
            type: 'GET',
        }).done(function (respone) {
            $('#CartCount').text(respone);
        });
    }
</script>
@endsection