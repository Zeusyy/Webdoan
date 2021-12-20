@guest
<div class="input-comment">
    <a href="{{route('login')}}">{{__('article.Login to comment')}}</a> 
</div>
@endguest

@if (!$have_comment)
<div class="input-comment">{{__('article.Empty comment')}}</div>
@else
    @foreach ($comments as $comment)
    <div class="comment-wrapper rounded commented-section mt-2">
        <div class="row">
            <div class="col">

            </div>
            <div class="col d-flex justify-content-end">
            {{--  1 is admin --}}
            @auth
                @if (Auth::user()->role_id== 1)
                    
                    <button onclick="deleteComment()" type="button" class="btn btn-danger"><i class="bi bi-x-lg"></i></button>
                    
                @endif
            @endauth
            
            </div>
        </div>
        <div class="row avatar-name">
            
            <div class="col">
                
                <img class="img-responsive rounded-circle" src="{{$comment->user->avatar}}" width="38">
                <span  class="user-name">{{$comment->user->name}}</span>
                
            </div>
            <div class="col d-flex align-items-center justify-content-end">
                <div class=" ">{{$comment->day()}}</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div>
                    {{$comment->content}}
                    <input type="hidden" data-articleCommentID="{{$comment->id}}" value="{{$comment->id}}" id="commentID">
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endif