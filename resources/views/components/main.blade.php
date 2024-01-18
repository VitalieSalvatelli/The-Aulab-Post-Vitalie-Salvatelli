<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    <main class="d-flex flex-column min-vh-100">

        <div class="sticky-top">
            <x-navbar/>
        </div>

        

            

        

        <div>
            {{$slot}}
        </div>

        <div class="mt-auto">
            <x-footer/>
        </div>

    </main>
    
</body>
</html>