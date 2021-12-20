@extends('layouts.admin')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
<link href="{{ asset('css/article.css') }}" rel="stylesheet">

<div>
    @include('layouts.onlySearchBar')
</div>
<div class="container">


</div>
<div class="container rounded bg-white wrapper">
    @auth
        @if (Auth::user()->role->name != 'user')
            <a class="btn btn-success col mb-3" href="{{route('article.create')}}"><i class="bi bi-plus-lg"></i></a>
        @endif
    @endauth
    
    @foreach ($articles as $article)
    <div class="article-wrapper">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-2 d-flex align-items-center justify-content-center">

                <a class="d-block d-sm-none" style="max-height: 200px;width: 100%;" href="{{route('article.show',$article)}}">
                    <img style="max-height: 200px" class="img_fliud thumbnail rounded" src="{{$article->thumbnail}}">
                </a>

                <a class=" d-none d-sm-block" style="max-height: 200px;" href="{{route('article.show',$article)}}">
                    <img style="max-height: 150px" class="img_fliud thumbnail rounded-circle" src="{{$article->thumbnail}}">
                </a>

            </div>
            <div class="col-12 col-sm-10">
                <div class="row">
                    <div class="title col">
                        <a href="{{route('article.show',$article)}}">
                        {{$article->title}}
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col info">
                        <i class="bi bi-person-fill"></i>
                        <span style="margin-right: 10px;" class="author">{{$article->user->name}}</span>
                        <i class="bi bi-clock"></i> 
                        {{-- author --}}
                        <span class="publish-date">{{$article->created_at}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col abstract">
                        {{$article->abstract}}
                    </div>
                </div>
                <div class="row d-none d-sm-block">
                    <div class="col">
                        <div class="">
                            <a href="{{route('article.show',$article)}}" type="button" class="btn btn-readmore">
                                {{__('article.Read more')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    {{ $articles->links() }}
</div>
@endsection