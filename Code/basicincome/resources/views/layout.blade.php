<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style type="text/css">
            .psrow {
                padding: 5px 5px 5px 5px; 
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script>
            $('.dropdown-toggle').dropdown()
        </script>
        @yield('header')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        @yield('footer')
    </body>
</html>
