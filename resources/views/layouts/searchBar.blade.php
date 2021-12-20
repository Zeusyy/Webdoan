@extends('layouts.admin')

@section('content')


<link href="{{ asset('css/introduction.css') }}" rel="stylesheet">
<div class="container-search">
    <div id="search" style="padding: 20px" class="rounded container bg-white">
        <form class="search-form " action="{{route('home.search')}}" method="GET">
            <div class="input-group searchBar mb-3">
                <input placeholder="" type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="">
                <div class="input-group-append">
                    <button style="width: 100px" class="btn btn-search btn-outline-secondary" type="submit"><i
                            class="bi bi-search"></i>
                    </button>
                </div>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio1" value="tour">
                <label class="form-check-label" for="inlineRadio1">{{__('tour.tour')}}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio2" value="hotel">
                <label class="form-check-label" for="inlineRadio2">{{__('hotel.Hotel')}}</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio3" value="article">
                <label class="form-check-label" for="inlineRadio3">{{__('welcome.Articles')}}</label>
            </div>

        </form>
    </div>
</div>

<main>
    @yield('content1')
</main>
@endsection