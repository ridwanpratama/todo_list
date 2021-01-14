<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatis.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
        
        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>Todo App</title>
</head>
<body>
    @yield('content')
</body>
</html>