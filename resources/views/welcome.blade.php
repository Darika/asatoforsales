<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-grid.css">
        <link rel="stylesheet" href="{{mix('css/style.css')}}">
        <title>Asato</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
        <div id="app">
            <app-vue> </app-vue>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
