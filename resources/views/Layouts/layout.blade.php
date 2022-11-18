<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Document')</title>
</head>
<body>
    <div>
        <!-- @csrf -->
        <h1>Layout</h1>
        @section('content')
        @endsection
    </div>
</body>
</html>