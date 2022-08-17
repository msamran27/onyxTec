<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Books</title>
    @include('header')
   
</head>

<body>
   

    <h2>All Books </h2>
    @foreach (\App\Models\Books::get() as $Books)
        {{ $Books->id }} {{ $Books->book_title }}<br>
    @endforeach
</body>
@include('footer')
</html>