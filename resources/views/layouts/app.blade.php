<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Skola.dev</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                @include('inc.messages')

                @yield('main-row')
            </div>
        </div>
    </body>
</html>