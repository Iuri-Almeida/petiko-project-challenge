<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Petiko | Sucesso</title>

        <!-- Fonts Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">

        <!-- BootStrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- BootStrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </head>

    <body class="body">

        <!-- Início Navbar -->
        <nav class="navbar navbar-light justify-content-between py-3 px-5 shadow-lg">

            <a class="navbar-brand" href="http://petiko.com.br/">
            
                <img width="75" class="img-fluid" src="images/logo.png" alt="Petiko">

            </a>
            
            <div>
            
                <span class="navbar-text h6 mx-3">Iuri Almeida</span>
            
                <img width="40" class="img-fluid" src="images/iuri.jpg" alt="Iuri">
            
            </div>
        
        </nav>
        <!-- Fim Navbar -->

        <!-- Início Main -->
        <main class="text-center text-white mt-5">

            <h1 class="h1 display-1">Pedido realizado com sucesso!</h1>

            <span class="h4 d-block">
                <strong>Endereço:</strong> 
                {{ $user->address }},
                {{ $user->number }},
                {{ $user->complement }},
                CEP: {{ $user->cep }},
                {{ $user->district }},
                {{ $user->city }},
                {{ $user->state }}.
            </span>

            <a href="/">
                <button type="button" class="btn btn-lg btn-success shadow">Voltar</button>
            </a>

        </main>
        <!-- Fim Main -->

    </body>

</html>
