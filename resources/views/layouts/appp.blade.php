<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Todo List</title>
</head>
<body>
    @include('todo.inc.navbar')
    <div class="container">
        @include('incl.messages') 
        <div class="col-md-8">
        @yield('content')
    </div>
    </div>

    <footer id="footer" class="text-center card-footer fixed-bottom">
        <p>Copyright &copy; 2020 Todolist</p>
    </footer>
</body>
</html>