@extends('layouts.admin')

@section('content')


<body>
    <h1>Add new receipt</h1>

    <form action="{{route('receipt.store')}}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="name">Name: </label></td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td><label for="avg_price">Average price: </label></td>
                <td><input type="text" name="avg_price" /></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Add</button></td>
            </tr>
        </table>
    </form>
</body>

@endsection