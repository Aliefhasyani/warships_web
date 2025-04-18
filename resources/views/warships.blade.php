<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<table class="table">
    
        
   
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">COUNTRY</th>
        <th scope="col">TYPE</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    @foreach ($warships as $value)
    <tbody>
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->country}}</td>
        <td>{{$value->type}}</td>
        <td><button><a href="{{route('warships.edit',$value->id)}}">EDIT</a></button></td>
      </tr>
    </tbody>
    @endforeach

  
  </table>
  <button><a href="{{route('warships.create')}}">ADD A WARSHIP</a></button>