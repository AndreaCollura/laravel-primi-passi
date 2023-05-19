<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <h1>{{ $page_title }}</h1>
    {{-- <p>{{ $description }}</p> --}}
    <a href="{{ route('task') }}">Go to Tasks</a>



        <h4>Staff</h4>
        <ul>
            @foreach ($staff as $employee)
                <li>{{ $employee }}</li>
            @endforeach
        </ul>

</body>

</html>
