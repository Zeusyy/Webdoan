@extends('admin.dashboard.index')

@section('dashboard')

<link href="{{ asset('css/manage.css') }}" rel="stylesheet">

<div style="max-width: 1300px" class="mt-3 container bg-white rounded">
    
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    
    
    <div id="change">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">{{__("tour.ID")}}</th>
                        <th scope="col">{{__('tour.Product_code')}}</th>
                        <th scope="col">{{__('tour.Name')}}</th>
                        <th scope="col">{{__('tour.Price')}}</th>
                        <th scope="col">{{__('tour.Created_at')}}</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                        <tr>
                            <th scope="row">{{$tour->id}}</th>
                            <td>{{$tour->product_code}}</td>
                            <td><a href="{{route('tour.show',$tour)}}">{{$tour->name}}</a></td>
                            <td>{{$tour->money($tour->price)}}</td>
                            <td>{{$tour->created_at}}</td>
                            <td><a class="btn btn-primary" href="{{route('tour.edit',[$tour])}}"><i class="bi bi-pencil-fill"></i></a></td>
                            <td>
                                {{-- <button onclick="deleteTour({{$tour->id}})" class="btn btn-danger" type="button"><i class="bi bi-trash-fill"></i></button>     --}}
                                <form action="{{route('manage.deleteTour',$tour)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button  class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>    
                                </form>
                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $tours->links() }}
</div>
<script>

    function deleteTour(tour_id){
        var result = confirm("Want to delete?");
        if (result) {
            $.ajax({
            url: "deleteTourAjax/"+tour_id,
            type:'delete',
            data:{
                "_token": "{{ csrf_token() }}",  
            }
        }).done(function(respone){
            // console.log(respone);
            
            $("#change").empty();
            $("#change").html(respone);
        });
        }
        
    };

</script>
@endsection