<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">{{__("hotel.ID")}}</th>
                <th scope="col">{{__('hotel.Product_code')}}</th>
                <th scope="col">{{__('hotel.Name')}}</th>
                <th scope="col">{{__('hotel.Price')}}</th>
                <th scope="col">{{__('hotel.Created_at')}}</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <th scope="row">{{$hotel->id}}</th>
                    <td>{{$hotel->product_code}}</td>
                    <td><a href="{{route('hotel.show',$hotel)}}">{{$hotel->name}}</a></td>
                    <td>{{$hotel->money($hotel->price)}}</td>
                    <td>{{$hotel->created_at}}</td>
                    <td><a class="btn btn-primary" href="{{route('hotel.edit',[$hotel])}}"><i class="bi bi-pencil-fill"></i></a></td>
                    <td>
                        <button onclick="deleteHotel({{$hotel->id}})" class="btn btn-danger" type="button"><i class="bi bi-trash-fill"></i></button>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>