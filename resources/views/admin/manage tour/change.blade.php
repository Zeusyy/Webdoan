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
                        <button onclick="deleteTour({{$tour->id}})" class="btn btn-danger" type="button"><i class="bi bi-trash-fill"></i></button>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>