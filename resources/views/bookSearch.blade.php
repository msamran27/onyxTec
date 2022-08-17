<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Book Search</title>
        {{-- <link rel="stylesheet" href="{{asset('assets\EmplyeeCSS\emplyee.css')}}"> --}}
        </head>
<body>
        @csrf

            <label for="gsearch">Search Google:</label>
            <input type="text" id='searchid' class= "form-control typeahead" placeholder="search...">
            <div id='product_list'>
            </div>

</body>
</html>
<script>
    // var path="{{route('autocomplete')}}";

   $(document).ready(function(){
    $("#searchid").on('keyup',function(){
        var val = $(this).val();
        $.ajax({
            url:"{{route('autocomplete')}}",
            type:"GET",
            data:{'name':value},
            success:function(data){
                $("#product_list").html(data);
            }
        });
    });
    $(document).on('click','li',function(){
        var value = $(this).text();
        $("#searchid").val(value);
        $("#product_list").html("");
    });
   });
</script>
