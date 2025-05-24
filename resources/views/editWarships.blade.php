@extends('layout.layout')


@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/addPage.css') }}">
</head>
<div class="form-container">
    <form action="{{route('warships.update',$warships->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" required value="{{$warships->name}}">
        
        <label for="country">Country:</label>
        <input type="text" name="country" required value="{{$warships->country}}">

        <label for="type">Type:</label>
        <select name="type" required>
            <option value="battleship" {{ $warships->type == 'Battleship' ? 'selected' : '' }}>Battleship</option>
            <option value="cruiser" {{ $warships->type == 'Cruiser' ? 'selected' : '' }}>Cruiser</option>
            <option value="destroyer" {{ $warships->type == 'Destroyer' ? 'selected' : '' }}>Destroyer</option>
            <option value="aircraftCarrier" {{ $warships->type == 'AircraftCarrier' ? 'selected' : '' }}>Aircraft Carrier</option>
        </select>

        <label for="mainarmaments">Main Armaments:</label>
        <select name="mainarmaments" id="mainarmaments" required>
            <option value="120mm" {{ $warships->mainarmaments == '120mm' ? 'selected' : '' }}>120mm</option>
            <option value="127mm" {{ $warships->mainarmaments == '127mm' ? 'selected' : '' }}>127mm</option>
            <option value="130mm" {{ $warships->mainarmaments == '130mm' ? 'selected' : '' }}>130mm</option>
            <option value="152mm" {{ $warships->mainarmaments == '152mm' ? 'selected' : '' }}>152mm</option>
            <option value="203mm" {{ $warships->mainarmaments == '203mm' ? 'selected' : '' }}>203mm</option>
            <option value="280mm" {{ $warships->mainarmaments == '280mm' ? 'selected' : '' }}>280mm</option>
            <option value="320mm" {{ $warships->mainarmaments == '320mm' ? 'selected' : '' }}>320mm</option>
            <option value="356mm" {{ $warships->mainarmaments == '356mm' ? 'selected' : '' }}>356mm</option>
            <option value="381mm" {{ $warships->mainarmaments == '381mm' ? 'selected' : '' }}>381mm</option>
            <option value="406mm" {{ $warships->mainarmaments == '406mm' ? 'selected' : '' }}>406mm</option>
            <option value="460mm" {{ $warships->mainarmaments == '460mm' ? 'selected' : '' }}>460mm</option>
        </select>
        

        <button type="submit" class="btn btn-secondary mt-4 rounded">Update</button>
    </form>
</div>
@endsection