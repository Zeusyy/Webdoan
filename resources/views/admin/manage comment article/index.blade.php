@extends('admin.dashboard.index')

@section('dashboard')

<link href="{{ asset('css/manage.css') }}" rel="stylesheet">

<div style="max-width: 1300px" class="mt-3 container bg-white rounded">
    <div id="change">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        
                        <th scope="col">Article</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Created_at</th>
                        {{-- <th scope="col"></th> --}}
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                        <tr>
                            <th scope="row"><a href="{{route('users.show',$comment->user)}}">{{$comment->user_id}}</a></th>
                            <td><a href="{{route('article.show',$comment->article)}}">{{$comment->article->title}}</a></td>
                            <td>{{$comment->content}}</td>
                            <td>{{$comment->created_at}}</td>
                            {{-- <td><a class="btn btn-primary" href=""><i class="bi bi-pencil-fill"></i></a></td> --}}
                            <td>
                                <form action="{{route('manage.ArticleCommentDelete',$comment)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $comments->links() }}
</div>

@endsection