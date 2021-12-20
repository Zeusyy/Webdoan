@extends('layouts.admin')

@section('content')

<link href="{{ asset('css/hotel.css') }}" rel="stylesheet">

<input type="hidden" id="lang" name="lang" value="{{app()->getLocale()}}">

<div class="container create-form-container rounded bg-white">
    <div class="blue-bar rounded-top"></div>
    <h1 class="d-flex justify-content-center">
        <span style="padding-left: 20px;padding-right: 20px;" class="sub-title-warpper">{{__('hotel.Edit')}}</span>
    </h1>
    <form style="padding: 20px" action="{{route('room.update',$room)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="hotel_id" value="{{$hotel->id}}">
        <div class="form-group row">
            <div class="col">
                <label for="name">{{__('room.Name')}}</label>
                <input class="form-control" type="text" name="name" value="{{ $room->name }}" />
                @if ($errors->has('name'))
                    @foreach ($errors->get('name') as $error)
                        <strong>{{ $error }}</strong>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="">Bed</span>
                    </div>
                    <select class="form-control" name="bed_num" >
                        {{-- <option @if ($hotel->CityProvince->name == $cityProvince->name)
                            selected
                        @endif>{{$cityProvince->name}}</option> --}}
                        
                        <option @if ($room->bed[0] == '1')
                            selected
                        @endif value="1">1</option>
                        <option @if ($room->bed[0] == '2')
                            selected
                        @endif value="2">2</option>
                    </select>
                    <select  class="form-control" name="bed_type">
                        {{-- <option @if ($hotel->CityProvince->name == $cityProvince->name)
                            selected
                        @endif>{{$cityProvince->name}}</option> --}}
                        <option @if ($room->bed[2] == '1')
                            selected
                        @endif value="1">single</option>
                        <option @if ($room->bed[2] == '2')
                            selected
                        @endif value="2">double</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Area</span>
                    </div>
                    <input type="number" value="{{$room->area}}" name="area" class="form-control" >
                    <div class="input-group-append">
                        <span class="input-group-text">sqm</span>
                    </div>
                    </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Price</span>
                    </div>
                    <input value="{{$room->price}}" type="number" name="price" class="form-control">
                    </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <span style="margin-right: 50px">
                    <label class="checkbox-inline">
                        <input @if ($room->refund == 1)
                            checked
                        @endif style="margin-right: 10px" type="checkbox" name="refund" value="1">Refundable
                    </label>
                </span>
                <span style="margin-right: 10px">
                    <label class="checkbox-inline">
                        <input @if ($room->breakfast == 1)
                        checked
                    @endif style="margin-right: 10px" type="checkbox" name="breakfast" value="1">With breakfast
                    </label>
                </span>
                    
            </div>
        </div>
        
        
        <div class="form-group row">
            <div class="col">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="avatar" >
                    <label class="custom-file-label" for="customFile">{{__('hotel.Choose avatar')}}</label>
                    @if ($errors->has('avatar'))
                        @foreach ($errors->get('avatar') as $error)
                            <div class="col-md-12">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-end">
            
            <button class="btn btn-primary" type="submit">{{__('hotel.Update')}}</button>
            </div>
        </div>

</div>

</form>
</div>


@endsection