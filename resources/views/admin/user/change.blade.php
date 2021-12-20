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