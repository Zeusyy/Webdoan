@extends('layouts.admin')

@section('content')


<link href="{{ asset('css/hotel.css') }}" rel="stylesheet">


<div class="container create-form-container rounded bg-white">
    <div class="green-bar rounded-top"></div>
    <h1 class="d-flex justify-content-center">
        <span style="padding-left: 20px;padding-right: 20px;" class="sub-title-warpper">{{__('hotel.Create')}}</span>
    </h1>
    <form style="padding: 20px" action="{{route('hotel.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="formType" name="formType" value="create">
        <div class="form-group row">
            <div class="col">
                <label for="name">{{__('hotel.Name')}}</label>
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
                <label for="address">{{__('hotel.Address')}}</label>
                <input class="form-control" type="text" name="address" value="{{ old('address') }}" />
                @if ($errors->has('address'))
                    @foreach ($errors->get('address') as $error)
                        <strong>{{ $error }}</strong>
                    @endforeach
                @endif
            </div>
            <div class="col-md-4">
                <label for="cityProvince">Province / City</label>
                <select class="form-control" id="cityProvince" name="cityProvince">
                    @foreach ($cty_province as $cityProvince)
                        <option  value="{{$cityProvince->id}}">{{$cityProvince->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col">
                <label for="price">{{__('hotel.Price')}}</label>
                <input class="form-control" type="number" min="0" name="price" value="{{ old('price') }}" />
                @if ($errors->has('price'))
                @foreach ($errors->get('price') as $error)
                <strong>{{ $error }}</strong>
                @endforeach
                @endif
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

</form>
</div>


@endsection