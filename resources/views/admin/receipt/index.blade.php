@extends('layouts.admin')

<link href="{{ asset('css/receipt.css') }}" rel="stylesheet">

@section('content')

<div class="container rounded bg-white contain-wrapper">
<h3>{{__('receipt.Receipt List')}}</h3>
@foreach ($receipts as $receipt)
<div style="margin-top: 50px" class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">#{{$receipt->id}}</div>
            <div class="col-6">
                @if($receipt->status->name == 'Waiting')
                <div style="float: right" class="btn btn-warning">
                    {{__('receipt.Waiting')}}
                </div>
                @endif
                @if($receipt->status->name == 'Accepted')
                <div style="float: right" class="btn btn-primary">
                    {{__('receipt.Accepted')}}
                </div>
                @endif
                @if($receipt->status->name == 'Canceled')
                <div style="float: right" class="btn btn-secondary">
                    {{__('receipt.Canceled')}}
                </div>
                @endif
                @if($receipt->status->name == 'Payment received')
                <div style="float: right" class="btn btn-success">
                    {{__('receipt.Received')}}
                </div>
                @endif
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
</div>

@endsection