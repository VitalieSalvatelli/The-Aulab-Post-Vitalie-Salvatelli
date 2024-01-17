<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h2>Richieste di amministratore</h2>
                <x-admin_request_table :adminRequest="$adminRequest"/>
            </div>
        </div>
    </div>
    
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h2>Richieste di revisore</h2>
                <x-revisor_request_table :revisorRequest="$revisorRequest"/>
            </div>
        </div>
    </div>
    
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h2>Richieste di articolista</h2>
                <x-writer_request_table :writerRequest="$writerRequest"/>
            </div>
        </div>
    </div>
    
</body>
</html>