@extends('layouts.admin')

@section('content')

<link href="{{ asset('css/hotel.css') }}" rel="stylesheet">

<input type="hidden" id="lang" name="lang" value="{{app()->getLocale()}}">


<div class="container create-form-container rounded bg-white">
    <div class="green-bar rounded-top"></div>
    <h1 class="d-flex justify-content-center">
        <span style="padding-left: 20px;padding-right: 20px;" class="sub-title-warpper">{{__('hotel.CreateRoom')}}</span>
    </h1>
    <form style="padding: 20px" action="{{route('room.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="formType" name="formType" value="create">
        <input type="hidden" name="hotel_id" value="{{$hotel->id}}">
        <div class="form-group row">
            <div class="col">
                <label for="name">{{__('hotel.RoomName')}}</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
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
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <select  class="form-control" name="bed_type">
                        {{-- <option @if ($hotel->CityProvince->name == $cityProvince->name)
                            selected
                        @endif>{{$cityProvince->name}}</option> --}}
                        <option  value="1">single</option>
                        <option value="2">double</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Area</span>
                    </div>
                    <input type="number" name="area" class="form-control" >
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
                    <input type="number" name="price" class="form-control">
                    </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <span style="margin-right: 50px">
                    <label class="checkbox-inline">
                        <input style="margin-right: 10px" type="checkbox" name="refund" value="1">Refundable
                    </label>
                </span>
                <span style="margin-right: 10px">
                    <label class="checkbox-inline">
                        <input style="margin-right: 10px" type="checkbox" name="breakfast" value="1">With breakfast
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
            
            <button class="btn btn-success" type="submit">{{__('hotel.Init')}}</button>
            </div>
        </div>

</div>

</form>
</div>


@endsection