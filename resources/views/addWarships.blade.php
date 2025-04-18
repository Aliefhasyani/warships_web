<strong><h1>WELCOME TO CREATE PAGE</h1></strong>

<form action="{{route('warships.post')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    
    <label for="country">Country:</label>
    <input type="text" name="country" required>

    <label for="type">Type:</label>
    <select name="type" required>
        <option value="battleship">Battleship</option>
        <option value="cruiser">Cruiser</option>
        <option value="destroyer">Destroyer</option>
        <option value="aircraftCarrier">Aircraft Carrier</option>
    </select>

    <button type="submit">Create</button>
</form>