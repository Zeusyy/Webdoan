@extends('layouts.admin')

@section('content')

<form action="{{route('receipt.update',$receipt->id)}}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>User </td>
            <td>{{$receipt->user->name}}</td>
        </tr>
        <tr>
            <td><label for="price_sum">Cost </label></td>
            <td><input type="text" name="price_sum" 
                value="{{$receipt->price_sum}}"/></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td>
                <textarea cols="30" rows="8" name="description" 
                value="{{$receipt->description}}">{{$receipt->description}}</textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Update</button></td>
        </tr>
    </table>
</form>
@endsection