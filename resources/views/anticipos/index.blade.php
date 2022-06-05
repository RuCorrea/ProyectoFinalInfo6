<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }}"></script>
</head>
<body>
    <div class="container">
        @include('fragments.nav-bar')
        @yield('content')
    </div>
    <h1>Esta es la pagina principal de anticipos</h1>
        
    
</body>
</html>