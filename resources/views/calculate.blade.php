<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="{{route('calculate')}}" method="POST">
        @csrf
        <label name="a">Digit 1</label>
        <input name="a">
        <label name="b">Digit 2</label>
        <input name="b">
        
        <label name="operator">Choose operator</label>
        <select name="operator">
            <option name="+">+</option>
            <option name="-">-</option>
            <option name="*">*</option>
            <option name="/">/</option>
        </select>
        <br>
        <button type="submit" class="mt-2 ml-2">Calculate</button>
        @if(isset($result))
            <p>Result : {{$result}}
        @endif

    </form>
</body>
</html>