<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warships App</title>

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    
    
</head>
<body>
    <div class="nav">
        <a href="{{route('home')}}">HOME</a>
        <a href="{{route('warships.list')}}">WARSHIPS</a>
        <a href="{{route('warships.create')}}">ADD A WARSHIP</a>
    </div>

    <main>
        @yield('content')
    </main>


</body>
</html>