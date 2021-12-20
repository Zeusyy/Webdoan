@extends('layouts.user')
@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">

<link href="{{ asset('css/hotel.css') }}" rel="stylesheet">

{{-- <form style="max-width: 1300px" class="container" action="{{route('hotel.index')}}" method="GET">
    <div class="input-group mb-3 searchBar">
        <input placeholder="{{__('hotel.Search')}}" type="text" name="search" value="{{ request()->get('search') }}" class="form-control"
            placeholder="">
        <div class="input-group-append">
            <button style="width: 100px" class="btn btn-search btn-outline-secondary" type="submit"><i
                    class="bi bi-search"></i></button>
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
<div class="title-top-hotel">
    <div style="max-width: 1300px" class="container">
        <i class="bi bi-house-door-fill"></i>
        {{__('hotel.Hotel')}}
    </div>
</div>

<div style="max-width: 1300px;" class="container">
    <div id="change">
        <div class="row">
            @foreach ($hotels  as $hotel)
            <div class="card col-md-4">
                <div style="padding: 10px" class="card-img-top">
                    <a href="{{route('hotel.show',$hotel)}}">
                        <img loading="lazy" alt="hotek Image" class="img_fluid rounded pictrure"
                            src="{{$hotel->avatar}}">
                    </a>
                </div>
                <div class="card-body hotel-info">
                    <div class="row">
                        <a href="{{route('hotel.show',$hotel)}}">
                            <div class="col-md-12 hotel-name-index">{{$hotel->name}}</div>
                        </a>
                    </div>

                    {{-- <div class="row" >
                        <div class="col-6 col-sm-6 col-md-12 col-lg-6">
                            <i class="bi bi-geo-alt-fill"></i>
                            {{$hotel->CityProvince->name}}
                        </div>
                        <div id="money" class="float-right col-6 col-sm-6 col-md-12 col-lg-6">
                            <div class="float-right" style="width: 130px">{{$hotel->money($hotel->price)}}</div>
                        </div>
                    </div> --}}
                    
                </div>
                <div class="card-footer">
                    <span class="">
                        <i class="bi bi-geo-alt-fill"></i>
                        {{$hotel->CityProvince->name}}
                    </span>
                    <div id="money" class="d-flex justify-content-end" style="width: 100%">{{$hotel->money($hotel->price)}}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $hotels->links() }}
</div>
<script>
    function sort(type){
        
        keyword = $("input[name=search]").val();
        // product_type = $('input[name="searchOptions"]:checked').val();
        product_type = 'hotel';
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
        
        product_type = 'hotel';
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