@extends('layouts.admin')

@section('content')

<link href="{{ asset('css/tour.css') }}" rel="stylesheet">

<div class="container create-form-container rounded bg-white ">
    <div class="blue-bar rounded-top"></div>
    <h1 class="d-flex justify-content-center">
        <span style="padding-left: 20px;padding-right: 20px;" class="sub-title-warpper">{{__('tour.Edit')}}</span>
    </h1>
    <form style="padding: 20px" action="{{route('tour.update',$tour)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" id="lang" name="lang" value="{{app()->getLocale()}}">
        <input type="hidden" value="{{$tour->subTour->count()}}" name="day_number" id="day_number"/>
        <input type="hidden" id="formType" name="formType" value="edit">
            <div class="form-group row">
                <div class="col">
                    <label for="name">{{__('tour.Title')}}</label>
                    <input class="form-control" type="text" name="name" value="{{ $tour->name }}"/>
                    @if ($errors->has('name'))
                        @foreach ($errors->get('name') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>

            <input type="hidden" value="{{$tour->subTour->count()}}" name="day_number" id="day_number"/>
                
            <div class="form-group row">
                <div class="col">
                    <label for="price">{{__('tour.Price')}}</label>
                    <input class="form-control" type="number" name="price" value="{{ $tour->price }}"/>
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
                            <option
                                @if ($tour->city_province_id == $cityProvince->id)
                                    selected
                                @endif
                            value="{{$cityProvince->id}}">{{$cityProvince->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="passenger_num">{{__('tour.Number of passengers')}}</label>
                    <input class="form-control" type="number" min="0" name="passenger_num" value="{{ $tour->passenger_num }}"/>
                    @if ($errors->has('passenger_num'))
                        @foreach ($errors->get('passenger_num') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="col">
                    <label for="day_number"> {{__('tour.Days')}}</label></td>
                    <input class="form-control" type="number" min="0" name="day_number" value="{{ $tour->day_number }}"/>
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
                    <input class="form-control" type="date" name="departure_date" value="{{ $tour->departure_date }}"/>
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
                            <option 
                                @if ($tour->transport_id == $transport->id)
                                    selected
                                @endif
                            value="{{$transport->id}}">
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
                    <input class="form-control " type="number" min="0" max="23" placeholder="Hour" name="departure_hour" value="{{ $tour->departure_hour }}"/>
                </div>
                
                <div class="col">
                    <input class="form-control " type="number" min="0" max="59" placeholder="Minute" name="departure_minute" value="{{ $tour->departure_minute }}"/>
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
                    <input class="form-control" type="text" name="departure_place" value="{{ $tour->departure_place }}"/>
                    @if ($errors->has('departure_place'))
                        @foreach ($errors->get('departure_place') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="content">{{__('tour.Content')}}</label>
                    <textarea class="form-control" name="content" rows="10" cols="50">{{ $tour->content }}</textarea>
                    @if ($errors->has('content'))
                        @foreach ($errors->get('content') as $error)
                            <strong>{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
        
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="avatar" value="" >
            <label class="custom-file-label" for="customFile">{{__('common.Choose avatar')}}</label>
            @if ($errors->has('mainImg'))
                @foreach ($errors->get('mainImg') as $error)
                    <div class="col-md-12">{{ $error }}</div>
                @endforeach
            @endif
        </div>
            
        <h2 class="d-flex justify-content-center">{{__('tour.Schedule')}}</h2>
        <div id="day">
            @foreach ($tour->subTour as $subTrip)
            <div id="{{$subTrip->day}}">
                <div class="form-group row">
                    <div class="col">
                        <label for="title">{{__('tour.Title')}}</label></td>
                        <input class="form-control"  type="text" value="{{$subTrip->title}}" name="subTripTitle[{{$subTrip->day}}]" size="40"/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label class="col-12" for="content">{{__('tour.Content')}}</label></td>
                        <textarea id="subTripContent" class="ckeditor col-12"  name="subTripContent[{{$subTrip->day}}]" rows="10" cols="50">{{$subTrip->content}}</textarea></td>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end">
            <button style="margin-right: 20px" class="btn btn-primary" type="button" id="addDayEdit">{{__('tour.Add')}}</button>
            <button style="margin-right: 20px" class="btn btn-secondary" type="button" id="removeDayEdit">{{__('tour.Remove')}}</button>
            <button style="margin-right: 20px" class="btn btn-success" type="submit">{{__('tour.Update')}}</button>
            <a href="{{route('tour.show',$tour)}}" style="margin-right: 0px" class="btn btn-success" type="submit">{{__('tour.Back')}}</a>
        </div>
    </form>
</div>

<script src="{{ asset('js/tourEdit/script.js') }}" defer></script>
@endsection