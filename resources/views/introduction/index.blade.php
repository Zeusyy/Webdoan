@extends('layouts.searchBar')

@section('content1')


<div class="wrapper ">
    <div class="container container-introduction bg-white rounded">
        <p class="content">
            {!!__('intro.content')!!}
        </p>
        {{-- <div class="join">
            <strong>{{__('intro.join')}} !</strong>
        </div> --}}

        <p class="join-gif-container">
            <a href="{{route('register')}}">
                <img class="join-gif rounded-circle" src="https://res.cloudinary.com/dloeyqk30/image/upload/v1635225612/FnGO/gif/join_us_nlzqvi.gif">
            </a>
        </p>
    </div>
</div>
@endsection