@extends('layout.layout')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/addPage.css') }}">
</head>

<div class="container mt-4">


    <div class="row mb-3">
        <div class="col-md-6">
            <form action="{{ route('warships.search') }}" method="GET" class="form-inline">
                <input type="search" name="search" class="form-control mr-2" placeholder="Search a Warship...">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>


    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NAME</th>
                <th>TYPE</th>
                <th>COUNTRY</th>
                <th>MAIN ARMAMENTS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warships as $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->type }}</td>
                <td>{{ $value->country }}</td>
                <td>{{ $value->mainarmaments }}</td>
                <td class="d-flex">
            
                    <form action="{{ route('warships.edit', $value->id) }}" class="mr-2">
                        @csrf
                        <button type="submit" class="btn btn-warning">EDIT</button>
                    </form>

             
                    <form action="{{ route('warships.delete', $value->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <form action="{{ route('warships.create') }}">
        <button type="submit" class="btn btn-primary">Add A Warship</button>
    </form>

</div>

@endsection
