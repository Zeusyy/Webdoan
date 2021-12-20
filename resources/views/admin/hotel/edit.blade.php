@extends('layouts.admin')

@section('content')

<link href="{{ asset('css/hotel.css') }}" rel="stylesheet">
<div class="container create-form-container rounded bg-white">
    <div class="blue-bar rounded-top"></div>
    <h1 class="d-flex justify-content-center">
        <span style="padding-left: 20px;padding-right: 20px;" class="sub-title-warpper">{{__('hotel.Edit')}}</span>
    </h1>
<form style="padding: 20px" action="{{route('hotel.update',$hotel)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">{{__('hotel.Name')}}</label>
        <input class="form-control" value="{{$hotel->name}}" type="text" name="name"/>
    </div>

    <div class="form-group">
        <label for="price">{{__('hotel.Average price')}} </label>
        <input class="form-control" value="{{$hotel->price}}" type="number" name="price" />
    </div>

    <div class="form-group row">
        <div class="col-md-8">
            <label for="address">{{__('hotel.Address')}} </label>
            <input class="form-control" value="{{$hotel->address}}" type="text" name="address" />
        </div>
        <div class="col-md-4">
            <label for="cityProvince">{{__('hotel.Province/City')}}</label>
            <select class="form-control" id="cityProvince" name="cityProvince">
                @foreach ($cty_province as $cityProvince)
                    <option value="{{$cityProvince->id}}" @if ($hotel->city_province_id == $cityProvince->id)
                        selected
                    @endif>{{$cityProvince->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group ">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="avatar" >
            <label class="custom-file-label" for="customFile">{{__('common.Choose avatar')}}</label>
            @if ($errors->has('avatar'))
                @foreach ($errors->get('avatar') as $error)
                    <div class="col-md-12">{{ $error }}</div>
                @endforeach
            @endif
        </div>
    </div>



        <button class="btn btn-primary" type="submit">{{__('hotel.Update')}}</button>
</form>
</div>
@endsection