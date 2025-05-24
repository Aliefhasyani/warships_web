@extends('layout.layout')

@section('content')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Warships</title>
</head>
<body>
         
    <div class="container mt-4">
        <div class="row">
            @foreach($warships as $ships)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/warships.jpg') }}" class="card-img-top" alt="Warship Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $ships->name }}</h5> 
                            <p><i>{{$ships->country}}</i></p>
                            <form action="{{route('warship.show',$ships->id)}}">
                            <button type="submit" class="btn btn-primary">Ship Detail</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
@endsection
