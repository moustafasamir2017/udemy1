<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
</head>

{{--@php--}}
{{--    $title = "Contact Page !"--}}
{{--@endphp--}}

<body>

    <h2>{{$title}}</h2>
    <h2>From foreach loop</h2>
    <ul>
        @foreach($books as $book)
            <li>{{$book}}</li>
        @endforeach
    </ul>
    <h2>From for loop</h2>
    <ul>
        @for($i = 0;$i < count($books); $i++)
            <li>{{$books[$i]}}</li>
        @endfor
    </ul>

</body>
</html>
