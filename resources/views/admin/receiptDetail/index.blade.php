@extends('admin.dashboard.index')

@section('dashboard')



<div class="">
    <h1>Receipt Detail</h1>
    {{-- <a href="{{route('receipt-detail.create')}}">Add room</a> --}}
    <div class="table-responsive">
    <table class="table ">
    <thead>
        <tr>
            <th scope="col">Receipt ID</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            
            
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($receiptDetails as $receiptDetail)
    <tr>
        <th scope="row">{{$receiptDetail->receipt_id}}</th scope="row">
        <td>
            <a href="{{route('product.show',$receiptDetail->product_code)}}" >{{$receiptDetail->product->name}} </a>
        </td>
        <td>{{$receiptDetail->price}}</td>
        <td>{{$receiptDetail->quantity}}</td>

        
        {{-- <td><a href="{{route('receipt-detail.edit'
        ,$receiptDetail)}}">edit</a></td>
        <td>
            <form action="{{route('receipt-detail.destroy',$receiptDetail)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </td> --}}
        <td>{{$receiptDetail->description}}</td>
    </tr>

    @endforeach
    </tbody>
    </table>
    </div>
    {{ $receiptDetails->links() }}
    
</div>

@endsection