@extends('layouts.user')
@section('content')
<link href="{{ asset('css/tour.css') }}" rel="stylesheet">

{{-- <form style="max-width: 1300px;" class="container" action="{{route('tour.index')}}" method="GET">
    <div class="input-group mb-3 searchBar">
        <input placeholder="{{__('tour.Search')}}" type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="">
        <div class="input-group-append">
            <button style="width: 100px" class="btn btn-search btn-outline-secondary" type="submit"><i
                    class="bi bi-search"></i>
            </button>
        </div>
    </div>
</form> --}}

<div>
    @include('layouts.onlySearchBar')
</div>
<div style="max-width: 1300px;" class="container sort">

    <div class="row">
        <div class="col"></div>
        <div class="col d-flex justify-content-end">
            <div class="btn-group">
                <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{__('common.place')}}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button onclick="place(0)" class="dropdown-item" type="button">{{__('common.All')}}</button>
                    @foreach ($CityProvinces as $CityProvince)
                    <button onclick="place({{$CityProvince->id}})" class="dropdown-item" type="button">{{$CityProvince->name}}</button>
                    @endforeach
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{__('common.Sort')}}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button onclick="sort('asc')"   class="dropdown-item" type="button">{{__('common.price-low-high')}}</button>
                    <button onclick="sort('desc')"  class="dropdown-item" type="button">{{__('common.price-high-low')}}</button>
                    {{-- <button class="dropdown-item" type="button">Something else here</button> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="title-top-tour ">
    <div style="max-width: 1300px" class="container">
        <i class="bi bi-camera-fill"></i>
        {{__('tour.tour')}}
    </div>
</div>
<div style="max-width: 1300px;" class="container">
    <div id="change">
        <div class="row">
            @foreach ($trips as $trip)
            <div class="card col-6 col-sm-4 col-md-3">
                <div style="padding: 10px" class="card-img-top">
                    <a href="{{route('tour.show',$trip)}}">
                        <img loading="lazy" alt="tour Image" class="img-fluid rounded pictrure" src="{{$trip->avatar}}">
                    </a>

                </div>
                <div class="card-body tour-info">
                    <div class="row">
                        <a href="{{route('tour.show',$trip)}}">
                            <div class="col-md-12 tour-name"">{{$trip->name}}</div>
                        </a>
                    </div>

                    <div class="row">
                        <div class="col">
                            <i class="bi bi-geo-alt-fill"></i>{{$trip->CityProvince->name}}
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                    <div id="money" class="money-small-screen d-flex justify-content-end" style="width: 100%">
                      <span>{{$trip->money($trip->price)}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $trips->links() }}
</div>

<script>
    function addCart(id) {
        var currentLocation = window.location;
        console.log(currentLocation);
        $.ajax({
            url: "addCart/" + id,
            type: 'GET',
        }).done(function (respone) {
            var icon = '<span class="bi bi-bag-check test"></span>';
            alertify.notify(icon + " " + respone, 'custom');
        });

        $.ajax({
            url: "cartQuantity",
            type: 'GET',
        }).done(function (respone) {
            $('#CartCount').text(respone);
        });
    }

    function sort(type){
        
        keyword = $("input[name=search]").val();
        // product_type = $('input[name="searchOptions"]:checked').val();
        product_type = 'tour';
        console.log(product_type);
        
        $.ajax({
            url: "sort",
            type:'POST',
            data:{
                "_token": "{{ csrf_token() }}",
                "keyword": keyword,
                "product_type": product_type,
                "sort_type":type,
            }
        }).done(function(respone){
            // console.log(respone);
            
            $("#change").empty();
            $("#change").html(respone);
        });
    }

    function place(place_id){
        
        
        // keyword = $("input[name=search]").val();
        
        product_type = 'tour';
        // console.log(place_id);
        
        $.ajax({
            url: "place/"+place_id+"/"+product_type,
            type:'GET',
            
        }).done(function(respone){
            // console.log(respone);
            
            $("#change").empty();
            $("#change").html(respone);
        });
    }
</script>
@endsection