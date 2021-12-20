@extends('admin.dashboard.index')

@section('dashboard')

<div class="mt-3 pt-3 container">
<h3>{{__('receipt.Receipt List')}}</h3>
@include('admin.receipt.searchBar')
@foreach ($receipts as $receipt)
<div style="margin-top: 50px" class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">#{{$receipt->id}}</div>
            <div class="col-6">
                <div style="float: right" class="row">
                    <form action="{{route('receipt.accept',$receipt)}}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">Accept</button>
                    </form>
                    <form action="{{route('receipt.destroy',$receipt)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button style="margin-left: 10px" class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{$receipt->created_at}}
            </div>
        </div>
    </div>
    <div class="">
        @foreach ($receipt->receipt_detail as $detail)
            <div class="card-body border">
                
                <div class="row">
                    <div class="col-12 col-md-2">
                        <img class="img-thumbnail"  style="max-width: 100%;" loading="lazy" alt="hotek Image" class="img_fluid"
                        src="{{$detail->product->avatar}}">
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="row">
                            <div class="col-12"> 
                                {{$detail->product->name}}
                            </div>
                            <div class="col-12"> 
                                x {{$detail->quantity}}
                            </div>
                            <div class="col-12"> 
                                {{$detail->description}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="card-footer">
        <div style="float: right;" class="row">
            <div  class="col-12">
                {{__('receipt.Total')}}: {{($receipt->money($receipt->price_sum))}}
                    
            </div>
        </div>
    </div>
    </div>
@endforeach
{{ $receipts->links() }}
</div>


@endsection