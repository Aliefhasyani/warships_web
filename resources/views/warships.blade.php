@extends('layout.layout')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



@section('content')


<table class="table" >
  
  <form action="{{route('warships.search')}}" method="GET" style="margin-:20px">
    <input type="search" name="search" placeholder="Search a Warship...">
    <button type="submit">Search</button>
  </form>
    
  <thead>
      <tr>
        <th scope="col">NAME</th>
        <th scope="col">TYPE</th>
        <th scope="col">COUNTRY</th>
        <th scope="col">MAIN ARMAMENTS</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    @foreach ($warships as $value)
    <tbody>
      <tr>
        
        <td>{{$value->name}}</td>
        <td>{{$value->type}}</td>
        <td>{{$value->country}}</td>
        <td>{{$value->mainarmaments}}</td>
        <td>
          
          <form action="{{route('warships.edit',$value->id)}}">
            @csrf
            <button>EDIT</a></button>
          </form>
         
          <form action="{{route('warships.delete',$value->id)}}" method="POST" onsubmit="return onDelete()">
            @csrf
            @method('DELETE')
            <button>DELETE</button>
          </form>
        
        </td>
      
      </tr>
    </tbody>
    @endforeach

  
  </table>
  <button><a href="{{route('warships.create')}}">ADD A WARSHIP</a></button>
@endsection