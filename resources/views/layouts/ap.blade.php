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
    <div id="app" class="">
        <main class="py-4">
            @include('messages.inc.navbar')
            <div class='container'>
                <div class="row">
                    @if(Request::is('/showcase'))
                        @include('messages.inc.showcase')
                    @endif
                    @if(Request::is('/page'))
                        @include('pages.inc.navbar')
                    @endif
                 
                    <div class="col-md-8">
                        @include('incl.messages')  
                        @yield('contentt')  
                                      
                    </div>
                    <div class="col-md-4">
                        @include('messages.inc.sidebar')
                    </div>
                </div>
               
            </div>
            <!-- this will show only when it has the same name of the section -->
        </main>
    </div>
</body>
</html>