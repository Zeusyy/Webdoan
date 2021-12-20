{{-- {!! Form::open(array('route' => 'front.fb', 'class' => '')) !!}
    <div>
        <label  class="email">Your name</label>
            {!! Form::text('name', null, ['class' => 'input-text', 'placeholder'=>"Your name"]) !!}
    </div>
    <div>
        <label  class="email">Your email</label>
            {!! Form::text('email', null, ['class' => 'input-text', 'placeholder'=>"Your email"]) !!}
    </div>
    <div>
        <label class="email">Comments</label>
            {!! Form::textarea('comment', null, ['class' => 'tarea', 'rows'=>"5"]) !!}
    </div>
    <div class="send">
        {!! Form::submit('Send', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!} --}}


<form action="{{route('mail')}}" method="POST">
    @csrf
    <div>
        <label class="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name">
    </div>
    <div>
        <label class="email">email</label>
        <input type="text" name="email" id="email" placeholder="Your email">
    </div>
    <div>
        <label class="comment">Comments</label>
        <input type="text" name="comment" id="comment" placeholder="Your comment">
    </div>
        <button type="submit">Send</button>
</form>