@extends('layout.layout')

<link rel="stylesheet" href="{{ asset('css/addPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/detailPage.css') }}">

@section('content')

<div class="detail-container mt-3">
    <h1>{{$warship->name}}</h1>
    <img src="{{ asset('img/warships.jpg') }}" class="card-img-top" alt="Warship Image">
    <p><strong>Country :</strong> {{$warship->country}}</p>
    <p><strong>Main Armaments :</strong> {{$warship->mainarmaments}}</p>
    <p><strong>Type:</strong> {{$warship->type}}</p>
</div>
@endsection