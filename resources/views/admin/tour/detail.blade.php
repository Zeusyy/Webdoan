@extends('layouts.admin')
@section('content')


{{-- gg font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
<link href="{{ asset('css/tour.css') }}" rel="stylesheet">
<link href="{{ asset('css/comment.css') }}" rel="stylesheet">


<div style="max-width: 1300px" class="container">
    <form action="{{route('tour.index')}}" method="GET">
        <div class="input-group mb-3 searchBar">
            <input placeholder="{{__('tour.Search')}}" type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="">
            <div class="input-group-append">
                <button style="width: 100px" class="btn btn-search btn-outline-secondary" type="submit"><i
                        class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="container rounded bg-white contain-wrapper">
    <div class="admin-button">
        <div class="row">
            <a class="btn btn-success col admin-button" href="{{route('tour.create')}}"><i class="bi bi-plus-lg"></i></a>
            <a class="btn btn-primary col admin-button" href="{{route('tour.edit',$tour)}}"><i class="bi bi-pencil-square"></i></a>
            <div style="padding: 0px"  class="col admin-button" >
                <form action=" {{route('tour.destroy',$tour)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button style="width: 100%" class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                </form>
            </div>
        </div>
    </div>
    <h2>{{$tour->name}}</h2>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
            {{-- <div>{{$tour->content}}</div> --}}
            <div style="margin-bottom: 50px" class="">
                <img style="width: 100%;" loading="lazy" alt="tour Image" class="img_fluid rounded"
                    src="{{$tour->avatar}}">
            </div>
            <h3><i class="bi bi-geo-alt-fill"></i> {{__('tour.Schedule')}}</h3>

            <hr style="height:2px;border-width:0;color:gray;background-color:rgba(206, 144, 176, 0.5)">

            @foreach ($trip as $subtrip)
            <div class="subtrip">
                <div class="row">
                    {{-- <div style="background-color: cyan" class="col-1">{{__('common.Day')}} {{$subtrip->day}}</div>
                    --}}
                    <div class="col-12 sub-title-warpper">
                        <div class="d-flex justify-content-center day-number">{{__('common.Day')}} {{$subtrip->day}}
                        </div>
                        <h5 class="sub-title d-flex align-items-center">{{$subtrip->title}}</h5>
                    </div>
                </div>
            </div>

            <div class="subtrip-content">
                {!! $subtrip->content !!}
            </div>
            @endforeach

        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
            <div class="make-me-sticky">
                <div class="card">
                    <div class="card-body price-button">
                        <p class="d-flex justify-content-center money-detail"> {{$tour->money($tour->price)}}</p>
                        <div class="d-flex justify-content-center">
                            @auth
                                @if ($tour->passenger_num > $tour->purchases_number)
                                    <button onclick="addCart('{{$tour->product_code}}')" type="button"
                                        class="btn btnAddCart btn-lg">
                                        {{__('tour.Add cart')}}
                                    </button>
                                @else
                                    <button type="button" class="btn btn-secondary">{{__('tour.Full slot')}}</button>
                                @endif
                            @endauth
                            @guest
                                <a class="btn btnAddCart btn-lg" href="{{route('login')}}">
                                    {{__('tour.Login to buy')}}
                                </a>
                            @endguest
                        </div>
                    </div>
                    <div style="padding: 0px" class="card-body">
                        <div>
                            <ul class="list-group ">
                                <li class="list-group-item border-0">
                                    <i class="bi bi-calendar3"></i>&nbsp&nbsp
                                    <strong>{{__('tour.Departure date')}}:</strong>
                                    {{-- ham duoc viet trong model Tour --}}
                                    {{$tour->day()}}
                                </li>
                                <li class="list-group-item border-0">
                                    <i class="bi bi-alarm"></i>&nbsp&nbsp
                                    <strong>{{__('tour.Departure time')}}:</strong>
                                    {{$tour->departure_time}}
                                </li>
                                <li class="list-group-item border-0">
                                    <i class="fas fa-bus"></i>&nbsp&nbsp
                                    <strong>{{__('tour.Main transport')}}:</strong>
                                    {{-- {{$tour->transport->name}} --}}
                                    @switch($tour->transport->name)
                                        @case('Plane')
                                            {{__('tour.Plane')}}
                                            @break

                                        @case('Coach')
                                            {{__('tour.Coach')}}
                                            @break

                                        @case('Train')
                                            {{__('tour.Train')}}
                                            @break
                                        @default
                                            Not define ...
                                    @endswitch
                                </li>
                                <li class="list-group-item border-0">
                                    <i class="bi bi-people-fill"></i>&nbsp&nbsp
                                    <strong>{{__('tour.Number of passengers')}}:</strong>
                                    {{$tour->passenger_num}}
                                </li>
                                <li class="list-group-item border-0">
                                    <i class="bi bi-check-square-fill"></i>&nbsp&nbsp
                                    <strong>{{__('tour.Remaining slots')}}:</strong>
                                    {{$tour->passenger_num - $tour->purchases_number}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px" class="card">
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    {{__('tour.Contact')}}
                                </div>
                                <div class="col-12">
                                    <hr
                                        style="height:1px;border-width:0;color:gray;background-color:rgba(206, 144, 176, 0.5)">
                                </div>
                                <div class="col-12">
                                    <i style="font-size: 25px" class="bi bi-whatsapp"></i>
                                    <span class="phone-number">097 4621578</span>
                                    (Mr. Tuấn)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="change">
    <div style="margin-top: 20px;" class="container rounded bg-white contain-wrapper">
        <div class="d-flex justify-content-center row">
            <div style="width: 100%" class="coment-bottom bg-white">
                @auth
                <div class="input-comment d-flex flex-row add-comment-section mt-4 mb-4">
                    <img class="img-fluid img-responsive rounded-circle mr-2" src="{{Auth::user()->avatar}}" width="38">
                    <input id="comment" data-product="{{$tour->product_code}}" type="text" class="form-control mr-3" placeholder="Add comment">
                    <button onclick="addComment('{{$tour->product_code}}')" class="btn btn-primary" type="button">Comment</button>
                </div>
                @endauth

                @include('comment.layout.index') 
                
            </div>
        </div>
    </div>
</div>

<script>
    function addCart(id) {
        var currentLocation = window.location;
        console.log(currentLocation);
        $.ajax({
            url: "/addCart/" + id,
            type: 'GET',
        }).done(function (respone) {
            var icon = '<span class="bi bi-bag-check test"></span>';
            alertify.notify(icon + " " + respone, 'custom');
        });

        $.ajax({
            url: "/cartQuantity",
            type: 'GET',
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
    function deleteComment(){
        var comment = $('#commentID').val();
        // console.log(comment);
        $.ajax({
            // will 405 error if url:comment instead /comment !!!!
            url: "/comment/"+comment,
            type:'DELETE',
            data:{
                "_token": "{{ csrf_token() }}",
                // "data": comment,
            }
        }).done(function(respone){
            $("#change").empty();
            $("#change").html(respone);
            // console.log(respone);
        });
    }

</script>
@endsection