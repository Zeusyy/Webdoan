@extends('admin.dashboard.index')

@section('dashboard')

<link href="{{ asset('css/receipt.css') }}" rel="stylesheet">

<div class="mt-3 pt-3 container bg-white rounded wrapper">
    @include('admin.user.searchBar')
    <div class="btn-toolbar my-2" role="toolbar" aria-label="Toolbar with button groups">
        @if (!Auth::guest() && Auth::user()->role->name == 'admin')
            
        @endif
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{route('user.roleSort','all')}}" class="btn btn-outline-primary">Show all</a>
        </div>
        
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <a href="{{route('user.roleSort','user')}}" class="btn btn-outline-secondary">Only user</a>
        </div>
        
        <div class="btn-group mr-2" role="group" aria-label="Third group">
            <a href="{{route('user.roleSort','employee')}}" class="btn btn-outline-success">Only Employee</a>
        </div>
        
        <div class="btn-group" role="group" aria-label="Fourth group">
            <a href="{{route('user.roleSort','admin')}}" class="btn btn-outline-danger">Only Admin</a>
        </div>
    </div>
    <div id="change">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">{{__("user.ID")}}</th>
                        <th scope="col">{{__('user.Name')}}</th>
                        <th scope="col">Email</th>
                        <th scope="col">{{__('user.Phone')}}</th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row"><a href="{{route('users.edit',[$user])}}">{{$user->id}}</a></th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                <form onsubmit="return confirm('Delete this account?');" action="{{route('users.destroy',[$user->id])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <div class="">
                                        <button class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $users->links() }}
</div>

<script>
    
</script>
@endsection