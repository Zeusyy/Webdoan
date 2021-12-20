<div class="d-flex justify-content-center row">
    <div style="width: 100%" class="coment-bottom bg-white">
        @auth
        <div class="input-comment d-flex flex-row add-comment-section mt-4 mb-4">
            <img class="img-fluid img-responsive rounded-circle mr-2" src="{{Auth::user()->avatar}}" width="38">
            <input id="comment" data-product="{{$product_code}}" type="text" class="form-control mr-3" placeholder="Add comment">
            <button onclick="addComment('{{$product_code}}')" class="btn btn-primary" type="button">Comment</button>
        </div>
        @endauth

        @include('comment.layout.index') 
    </div>
</div>