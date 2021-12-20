@extends('admin.dashboard.index')

@section('dashboard')

<link href="{{ asset('css/receipt.css') }}" rel="stylesheet">

<div class=" mt-3 pt-3 container bg-white rounded wrapper">
    @include('admin.receiptAccepted.searchBar')
    @if (!$receipts)
        {{__('receipt.Empty')}}
    @else
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">{{__('receipt.User')}}</th>
                <th scope="col">{{__('receipt.Cost')}}</th>
                <th scope="col">{{__('receipt.Status')}}</th>
                <th scope="col">{{__('receipt.Payment')}}</th>
                <th scope="col">{{__('receipt.Order date')}}</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receipts as $receipt)
            <tr>
                <th scope="row"><a href="{{route('receipt.show',$receipt)}}">{{$receipt->id}}</a></th>
                <td>{{$receipt->user->name}}</td>
                <td>{{$receipt->money($receipt->price_sum)}}</td>
                
                {{-- 1-accept  2-cancel  3-wait  4-receive --}}
                <td>
                    @if ($receipt->status_id == 1)
                        {{__('receipt.Accepted')}}
                    @else
                        @if ($receipt->status_id == 2)
                            {{__('receipt.Canceled')}}
                        @else
                            @if ($receipt->status_id == 3)
                                {{__('receipt.Waiting')}}
                            @else
                                {{__('receipt.Received')}}
                            @endif
                        @endif
                    @endif
                </td>
                {{-- 1-offline   2-banking --}}
                <td>
                    @if ($receipt->payment_id == 1)
                        {{__('receipt.Offline')}}
                    @else
                        {{__('receipt.Banking')}}
                    @endif
                </td>
                <td>{{$receipt->created_at}}</td>
                <td class="row">
                    @if ($receipt->status_id == 4)
                    <a style="margin: 10px" class="btn btn-success col" href="{{route('receipt.unpay',$receipt->id)}}">Unpay</a>
                    @else
                    <a style="margin: 10px" class="btn btn-success col" href="{{route('receipt.pay',$receipt->id)}}">Paid</a>
                    @endif
                    
                    <a style="margin: 10px" class="btn btn-secondary col" href="{{route('receipt.cancel',$receipt->id)}}">Cancel</a>
                </td>
                <td>
                    <form action="{{route('receipt.destroy',$receipt)}}" method="POST">
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
    @endif
</div>

@endsection