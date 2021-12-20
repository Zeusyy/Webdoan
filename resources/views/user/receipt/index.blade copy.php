@extends('layouts.admin')

@section('content')
<body>
    <div class="container">
    <h1>receipts</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            {{-- <th>Name</th> --}}
            <th>Cost</th>
            <th>Status</th>
            <th></th>
            
        </tr>
    @foreach ($receipts as $receipt)
    <tr>
        <td><a href="{{route('receipt.show',$receipt)}}">{{$receipt->id}}</a></td>
        {{-- <td>{{$receipt->user->name}}</td> --}}
        <td>{{$receipt->price_sum}}</td>
        <td>{{$receipt->status->name}}</td>
        <td><a href="{{route('receipt.show',$receipt)}}">details</a></td>
        
    </tr>
    @endforeach
    </table>
    {{ $receipts->links() }}
</div>
</body>
@endsection