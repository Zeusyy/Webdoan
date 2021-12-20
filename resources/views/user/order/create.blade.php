@extends('layouts.admin')

@section('content')

<body>
    <h1>Order room</h1>

    <form action="{{route('HotelBooking.store')}}" method="POST">
        @csrf
        <input type="hidden" name="room_id" value="{{$room->id}}">
        <table>
            <tr>
                <td>Room number</td>
                <td>{{$room->room_number}}</td>
            </tr>
            <tr>
                <td>Type</td>
                <td>{{$room->type->name}}</td>
            </tr>
            <tr>
                <td>Room for</td>
                <td>{{$room->type->max_person}} people(s)</td>
            <tr>
                <td>Price</td>
                <td>{{$room->type->price_per_night}}$ per night</td>
            </tr>
            <tr>
                <td>About this room</td>
                <td id="description">{{$room->description}}</td>
            </tr>
            <tr>
                <td>From</td>
                <td>
                    <input type="date"  name="arrive"
                        min="2021-01-01" max="2025-12-31">
                </td>
            </tr>
            <tr>
                <td>To</td>
                <td>
                    <input type="date"  name="checkout"
                        min="2021-01-01" max="2025-12-31">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Order this room</button></td>
            </tr>
        </table>
    </form>
</body>

@endsection