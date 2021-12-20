@extends('layouts.admin')

@section('content')

<link href="{{ asset('css/tour.css') }}" rel="stylesheet">

<div class="container create-form-container rounded bg-white">
    <div class="green-bar rounded-top"></div>
    <h1 class="d-flex justify-content-center ">
        <span style="padding-left: 20px;padding-right: 20px;" class="sub-title-warpper">{{__('tour.Create')}}</span>
    </h1>
    <form style="padding: 20px" action="{{route('tour.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="lang" name="lang" value="{{app()->getLocale()}}">
        <input type="hidden" id="formType" name="formType" value="create">
            <div class="form-group row">
                <div class="col">
                    <label for="name">{{__('tour.Title')}}</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}"/>
                    @if ($errors->has('name'))
                        @foreach ($errors->get('name') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="price">{{__('tour.Price')}}</label>
                    <input class="form-control" type="number" name="price" value="{{ old('price') }}"/>
                    @if ($errors->has('price'))
                        @foreach ($errors->get('price') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="col">
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
                    <label for="passenger_num">{{__('tour.Number of passengers')}}</label>
                    <input class="form-control" type="number" min="0" name="passenger_num" value="{{ old('passenger_num') }}"/>
                    @if ($errors->has('passenger_num'))
                        @foreach ($errors->get('passenger_num') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="col">
                    <label for="day_number"> {{__('tour.Days')}}</label></td>
                    <input class="form-control" type="number" min="0" name="day_number" value="{{ old('day_number') }}"/>
                    @if ($errors->has('day_number'))
                        @foreach ($errors->get('day_number') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col">
                    <label for="departure_date">{{__('tour.Departure date')}}</label></td>
                    <input class="form-control" type="date" name="departure_date" value="{{ old('departure_date') }}"/>
                    @if ($errors->has('departure_date'))
                        @foreach ($errors->get('departure_date') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="col">
                    <label for="transport">{{__('tour.Main transport')}}</label></td>
                    <select class="form-control" id="transport" name="transport">
                        @foreach ($transports as $transport)
                            <option  value="{{$transport->id}}">
                                {{-- {{$transport->name}} --}}
                                @switch($transport->name)
                                        @case('Plane')
                                            {{__('tour.Plane')}}
                                            @break

                                        @case('Coach')
                                            {{__('tour.Coach')}}
                                            @break

                                        @case('Train')
                                            {{__('tour.Train')}}
                                            @break
                                        @default
                                            Not define ...
                                    @endswitch
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('transport'))
                        @foreach ($errors->get('transport') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="form-group  row">
                <div class="col">
                    <input class="form-control " type="number" min="0" max="23" placeholder="Hour" name="departure_hour" value="{{ old('departure_hour') }}"/>
                </div>
                
                <div class="col">
                    <input class="form-control " type="number" min="0" max="59" placeholder="Minute" name="departure_minute" value="{{ old('departure_minute') }}"/>
                </div>
            
                @if ($errors->has('departure_hour'))
                    @foreach ($errors->get('departure_hour') as $error)
                        <strong>{{ $error }}</strong>
                    @endforeach
                @endif
                @if ($errors->has('departure_minute'))
                @foreach ($errors->get('departure_minute') as $error)
                    <strong>{{ $error }}</strong>
                @endforeach
            @endif
            </div>

            <div class="form-group row">
                <div class="col">
                    <label for="departure_place">{{__('tour.Departure place')}}</label>
                    <input class="form-control" type="text" name="departure_place" value="{{ old('departure_place') }}"/>
                    @if ($errors->has('departure_place'))
                        @foreach ($errors->get('departure_place') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="content">{{__('tour.Content')}} </label>
                    <textarea class="form-control" name="content" rows="10" cols="50">{{ old('content') }}</textarea>
                    @if ($errors->has('content'))
                        @foreach ($errors->get('content') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="avatar" >
                <label class="custom-file-label" for="customFile">{{__('common.Choose avatar')}}</label>
                @if ($errors->has('avatar'))
                    @foreach ($errors->get('avatar') as $error)
                        <div class="col-md-12">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        <h2 class="d-flex justify-content-center">{{__('tour.Schedule')}}</h2>
        
        <div class="form-group" id="day"></div>
        @if ($errors->has('subTripTitle.*'))
            {{-- @foreach ($errors->get('subTripTitle.*') as $error)
                <strong>{{ $error }}</strong>
            @endforeach --}}
            error
        @endif
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="button" id="addDay">{{__('tour.Add')}}</button>
            <button class="btn btn-secondary" type="button" id="removeDay">{{__('tour.Remove')}}</button>
            <button class="btn btn-success" type="submit">{{__('tour.Init')}}</button>
        </div>
    </form>
</div>


@endsection