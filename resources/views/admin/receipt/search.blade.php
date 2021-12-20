@extends('admin.dashboard.index')

@section('dashboard')
<body>
    <div class="container">
    <h3>{{__('receipt.Receipt List')}}</h3>
    <form style="margin-bottom: 20px" action="{{route('receiptWaiting.search')}}" method="GET">
        <div style="margin-bottom: 0px" class="input-group searchBar">
            <input placeholder="{{__('receipt.Search')}}" type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="">
            <div class="input-group-append">
                <button style="width: 100px" class="btn btn-search btn-outline-secondary" type="submit"><i
                        class="bi bi-search"></i>
                </button>
            </div>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio1" value="id">
            <label class="form-check-label" for="inlineRadio1">ID</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="searchOptions" id="inlineRadio2" value="userid">
            <label class="form-check-label" for="inlineRadio2">{{__("receipt.User's ID")}}</label>
        </div>
    </form>
    @if ($receipts->isEmpty())
        {{__('receipt.Empty')}}
    @else
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
    @endif
    </div>
    
</body>
@endsection