<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<table class="table">
    
        
   
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">COUNTRY</th>
        <th scope="col">TYPE</th>
      </tr>
    </thead>
    @foreach ($warships as $value)
    <tbody>
      <tr>
        <th scope="row"></th>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->country}}</td>
        <td>{{$value->type}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>