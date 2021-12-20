@extends('admin.dashboard.index')

@section('dashboard')

<style>
    body {
    
}
</style>

<form action="{{route('users.update',[$user])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div  class="container rounded bg-white mt-5 mb-5">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" id="avatar" width="150px" src="{{$user->avatar}}"><span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
            
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
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="col-md-12 ">{{__('common.Profile')}}</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">{{__('common.Name')}}</label><input type="text" name="name" class="form-control" placeholder="" value="{{$user->name}}"></div>
                    @if ($errors->has('name'))
                        @foreach ($errors->get('name')  as $error)
                            <div class="col-md-12">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Email</label><input type="text" name="email" class="form-control" value="{{$user->email}}">
                        @if ($errors->has('email'))
                            @foreach ($errors->get('email') as $error)
                            <div class="col-md-12">{{ $error }}</div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-12">
                        <label class="labels">{{__('register.Phone number')}}</label><input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                        @if ($errors->has('phone'))
                        @foreach ($errors->get('phone') as $error)
                            <div class="col-md-12">{{ $error }}</div>
                        @endforeach
                    @endif
                    </div>

                        <div class="col-12 col-md-6">
                            <label class="labels" for="gender"></label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="none" selected>{{__('common.Gender')}}</option>
                                <option @if ($user->gender == 'male')
                                    selected
                                @endif value="male" >{{__('common.Male')}}</option>
                                <option @if ($user->gender == 'female')
                                    selected
                                @endif value="female" >{{__('common.Female')}}</option>
                                <option @if ($user->gender == 'other')
                                    selected
                                @endif value="other" >{{__('common.Other')}}</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="labels" for="role"></label>
                            <select class="form-control" id="role" name="role">
                                <option @if ($user->role->name == 'admin')
                                    selected
                                @endif value="1" >{{__('role.Admin')}}</option>
                                <option @if ($user->role->name == 'employee')
                                    selected
                                @endif value="3" >{{__('role.Employee')}}</option>
                                <option @if ($user->role->name == 'user')
                                    selected
                                @endif value="2" >{{__('role.User')}}</option>
                            </select>
                        </div>
                    
                </div>
                
                
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">{{__('common.Save Profile')}}</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
</form>

@endsection