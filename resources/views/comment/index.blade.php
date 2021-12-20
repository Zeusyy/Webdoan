{{-- <link href="{{ asset('css/comment.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/> --}}
@if ($product_code[0] == 't')
<div style="margin-top: 20px;" class="container rounded bg-white contain-wrapper">
    @else
        @if ($product_code[0] == 'h')
        <div style="max-width: 1300px;margin-top: 20px;padding: 20px;" class="container rounded bg-white">
        @endif
    @endif

    @include('comment.layout.change')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
