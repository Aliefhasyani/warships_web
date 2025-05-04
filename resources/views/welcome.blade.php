@extends('layout.layout')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Warships</title>

        </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
            

        <table class="table" >
            <thead>
            <tr>
                <th scope="col">NAME</th>
                <th scope="col">TYPE</th>
                <th scope="col">COUNTRY</th>
                <th scope="col">MAIN ARMAMENTS</th>
            </tr>
            </thead>
            @foreach ($warships as $value)
            <tbody>
            <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->type}}</td>
                <td>{{$value->country}}</td>
                <td>{{$value->mainarmaments}}</td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </body>
</html>
@endsection
