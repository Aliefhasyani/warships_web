
<link rel="stylesheet" href="{{asset('css/layout.css')}}">


<div class="nav">
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('warships.create')}}">Add A Warship</a>
    <a href="{{route('warships.list')}}">Warships</a>
    <a href="#about">About</a>
</div>

<main>
    @yield('content')
</main>









