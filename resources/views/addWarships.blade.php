@extends('layout.layout')


@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/addPage.css') }}">
</head>

<div class="form-container">
    <form action="{{route('warships.create')}}" method="POST">
        @csrf
        @method('PUT')
    
        <label for="name">Name:</label>
        <input type="text" name="name" required >
        
        <label for="country">Country:</label>
        <input type="text" name="country" required >

        <label for="type">Type:</label>
        <select name="type" required>
            <option value="battleship" >Battleship</option>
            <option value="cruiser" >Cruiser</option>
            <option value="destroyer" >Destroyer</option>
            <option value="aircraftCarrier" >Aircraft Carrier</option>
        </select>

        <label for="mainarmaments">Main Armaments:</label>
        <select name="mainarmaments" id="mainarmaments" required>
            <option value="120mm" >120mm</option>
            <option value="127mm">127mm</option>
            <option value="130mm" >130mm</option>
            <option value="152mm" >152mm</option>
            <option value="203mm" >203mm</option>
            <option value="280mm" >280mm</option>
            <option value="320mm" >320mm</option>
            <option value="356mm" >356mm</option>
            <option value="381mm" >381mm</option>
            <option value="406mm">406mm</option>
            <option value="460mm" >460mm</option>
        </select>
        

        <button type="submit">Update</button>
    </form>
</div>
@endsection