<strong><h1>WELCOME TO EDIT PAGE</h1></strong>

<form action="{{route('warships.update',$warships->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" required value="{{$warships->name}}">
    
    <label for="country">Country:</label>
    <input type="text" name="country" required value="{{$warships->country}}">

    <label for="type">Type:</label>
    <select name="type" required>
        <option value="battleship" {{ $warships->type == 'battleship' ? 'selected' : '' }}>Battleship</option>
        <option value="cruiser" {{ $warships->type == 'cruiser' ? 'selected' : '' }}>Cruiser</option>
        <option value="destroyer" {{ $warships->type == 'destroyer' ? 'selected' : '' }}>Destroyer</option>
        <option value="aircraftCarrier" {{ $warships->type == 'aircraftCarrier' ? 'selected' : '' }}>Aircraft Carrier</option>
    </select>

    <button type="submit">Update</button>
</form>