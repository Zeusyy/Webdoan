@extends('layouts.admin')

@section('content')
<div  class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{$user->avatar}}"><span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="col-md-12 ">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="" value=""></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" value=""></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" value=""></div>
                    <div class="col-md-12">
                        <label class="labels" for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>

@endsection