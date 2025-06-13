@extends('layout.layout')


@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/addPage.css') }}">
</head>
<div class="header-font mt-3">
    <h1>EDIT FORM</h1>
</div> 
<div class="form-container">
    
    <form action="{{route('warships.update',$warships->id)}}" method="POST">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="name">Warship Name</label>
        <input type="text" class="form-control" name="name" >
        <label for="name" >Country</label>
        <input type="text" class="form-control" name="country" >
    </div>
    
    <div class="form-group">
        <label for="mainarmaments">Main Armaments</label>
            <select class="form-control" name='mainarmaments'>
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
    </div>

    <div class="form-group">
        <label for="type">Type</label>
            <select class="form-control" name='type'>
                <option value="battleship" >Battleship</option>
                <option value="cruiser" >Cruiser</option>
                <option value="destroyer" >Destroyer</option>
                <option value="aircraftCarrier" >Aircraft Carrier</option>
            </select>
        </div>
    <button type="submit" class="btn btn-primary btn-sm"> Edit Warship</button>
    </form>
</div>
@endsection