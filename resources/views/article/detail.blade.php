@extends('layouts.admin')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

<link href="{{ asset('css/article.css') }}" rel="stylesheet">
<link href="{{ asset('css/comment.css') }}" rel="stylesheet">

<div class="container bg-white rounded wrapper">
    <div class="header">
    @auth
        @if (Auth::user()->role->name != 'user')
            <div class="admin-button">
                <div class="row">
                    <a class="btn btn-success col admin-button" href="{{route('article.create')}}"><i class="bi bi-plus-lg"></i></a>
                    <a class="btn btn-primary col admin-button" href="{{route('article.edit',$article)}}"><i class="bi bi-pencil-square"></i></a>
                    <div style="padding: 0px"  class="col admin-button" >
                        <form action=" {{route('article.destroy',$article)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button style="width: 100%" class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    @endauth
        
        <h1 class="detail-title">{{$article->title}}</h1>
        
        <div class="row">
            <div class="col d-flex align-items-center">
            <img class="img-responsive rounded-circle" src="{{$article->user->avatar}}" width="38">
            <span class=" info">{{$article->user->name}}</span>
            <span class="dot"></span>
            <span class="info">{{$article->created_at}}</span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div style="margin-bottom: 50px" class="main-image">
                    <img style="width: 100%;" loading="lazy" alt="article image" class="img_fluid rounded"
                        src="{{$article->background}}">
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div>
            {!! $article->content !!}
        </div>
    </div>
</div>
<div id="change">
    <div style="margin-top: 20px;" class="container rounded bg-white wrapper">
        <div class="d-flex justify-content-center row">
            <div style="width: 100%" class="coment-bottom bg-white">
                @auth
                    @if (Auth::user()->hasVerifiedEmail())
                        <div class="input-comment d-flex flex-row add-comment-section mt-4 mb-4">
                            <img class="img-fluid img-responsive rounded-circle mr-2" src="{{Auth::user()->avatar}}" width="38">
                            <input id="comment" data-article="{{$article->id}}" type="text" class="form-control mr-3" placeholder="Add comment">
                            <button onclick="addComment()" class="btn btn-primary" type="button">Comment</button>
                        </div>
                    @else
                        <div class="input-comment d-flex flex-row add-comment-section mt-4 mb-4">
                            {{__('common.Email verify')}}
                        </div>
                    @endif
                
                @endauth

                @include('comment.layout.index')
                
            </div>
        </div>
    </div>
</div>
<script>
    function addComment(){
        var comment = {article: $('#comment').data('article'), comment: $('#comment').val()};
        // console.log(comment);
        $.ajax({
            // will 405 error if url:comment instead /comment !!!!
            url: "/articleComment",
            type:'POST',
            data:{
                "_token": "{{ csrf_token() }}",
                "data": comment,
            }
        }).done(function(respone){
            $("#change").empty();
            $("#change").html(respone);
            // console.log(respone);
        });
    }
    function deleteComment(){
        var comment = $('#commentID').val();
        // console.log(comment);
        $.ajax({
            // will 405 error if url:comment instead /comment !!!!
            url: "/articleComment/"+comment,
            type:'DELETE',
            data:{
                "_token": "{{ csrf_token() }}",
                "data": comment,
            }
        }).done(function(respone){
            $("#change").empty();
            $("#change").html(respone);
            // console.log(respone);
        });
    }
</script>
@endsection