@extends('admin.dashboard.index')

@section('dashboard')

<link href="{{ asset('css/receipt.css') }}" rel="stylesheet">

<div class="mt-3 pt-3 container bg-white rounded wrapper">
    @include('admin.receiptAccepted.searchBar')
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">{{__('receipt.User')}}</th>
                <th scope="col">{{__('receipt.Cost')}}</th>
                <th scope="col">{{__('receipt.Status')}}</th>
                <th scope="col">{{__('receipt.Finish')}}</th>
                <th scope="col">{{__('receipt.Payment')}}</th>
                <th scope="col">{{__('receipt.Order date')}}</th>
                <th scope="col"></th>
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
                    @switch($receipt->payment_id )
                        @case(1)
                            {{__('receipt.Accepted')}}
                            @break
                        @case(2)
                            {{__('receipt.Canceled')}}
                            @break
                        @case(3)
                            {{__('receipt.Waiting')}}
                            @break
                        @case(4)
                            {{__('receipt.Paid')}}
                            @break
                        @case(5)
                            {{__('receipt.Momo waiting')}}
                            @break
                        @case(6)
                            {{__('receipt.Momo Canceled')}}
                            @break
                        @default
                        {{__('receipt.Else')}}
                    @endswitch
                </td>
                <td>
                    @if ($receipt->is_finish)
                    <i style="font-size: 30px;color:#1FAA59" class="bi bi-check-circle-fill"></i>
                    @else
                    <i style="font-size: 30px;color:#DE4839" class="bi bi-x-circle-fill"></i>
                    @endif
                </td>
                {{-- 1-offline   2-banking --}}
                <td>
                    @if ($receipt->payment_id == 1)
                        {{__('receipt.Offline')}}
                    @else
                        @if ($receipt->payment_id == 2)
                            {{__('receipt.Banking')}}
                        @else
                            @if ($receipt->payment_id == 3)
                                {{__('receipt.PayPal')}}
                            @else
                                @if ($receipt->payment_id == 4)
                                    {{__('receipt.Momo')}}
                                @else
                                    {{__('receipt.Else')}}
                                @endif
                            @endif
                        @endif
                    @endif
                    

                </td>
                <td>{{$receipt->created_at}}</td>
                <td class="row">
                    @if ($receipt->status_id == 4)
                    <a style="margin: 10px" class="btn btn-success col" href="{{route('receipt.unpay',$receipt->id)}}">{{__('receipt.Unpay')}}</a>
                    @else
                    <a style="margin: 10px" class="btn btn-success col" href="{{route('receipt.pay',$receipt->id)}}">{{__('receipt.Paid')}}</a>
                    @endif
                    <a style="margin: 10px" class="btn btn-secondary col" href="{{route('receipt.cancel',$receipt->id)}}">
                        <div class="d-flex align-items-center justify-content-center" style="height: 100%">{{__('receipt.Cancel')}}</div>
                    </a>
                </td>
                <td>
                    @if ($receipt->is_finish)
                        <a style="margin: 10px" class="btn btn-success col" href="{{route('receipt.un-finish',$receipt)}}">
                            {{__('receipt.Not finish')}}
                        </a>
                    @else
                        <a style="margin: 10px" class="btn btn-success col" href="{{route('receipt.finish',$receipt)}}">
                            {{__('receipt.Finish')}}
                        </a>
                    @endif
                    
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
    {{ $receipts->links() }}
</div>

@endsection