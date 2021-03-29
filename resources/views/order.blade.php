<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Petiko | Pedido</title>

        <!-- Fonts Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">

        <!-- BootStrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- BootStrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Sweat Alert 2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

    </head>

    <body class="body">

        <!-- Início Navbar -->
        <nav class="navbar navbar-light justify-content-between py-3 px-5 shadow-lg">

            <a class="navbar-brand" href="http://petiko.com.br/" target="_blank">
            
                <img width="75" class="img-fluid" src="images/logo.png" alt="Petiko">

            </a>
            
            <div>
            
                <span class="navbar-text h6 mx-3">Iuri Almeida</span>

                <a href="https://github.com/Iuri-Almeida" target="_blank">
            
                    <img width="40" class="img-fluid" src="images/iuri.jpg" alt="Iuri">
                
                </a>
            
            </div>
        
        </nav>
        <!-- Fim Navbar -->

        <!-- Início Main -->
        <main class="d-flex justify-content-center mt-5">

            <section class="text-white my-auto">

                <h1 class="text-center text-white display-1">Finalizando o pedido</h1>
            
                <form action="save-address" method="post">

                    @csrf <!-- {{ csrf_field() }} -->

                    <div class="d-flex mb-3 justify-content-between">

                        <div class="col-md-4">

                            <label class="h5" for="cep">CEP</label>

                            <input type="text" class="form-control " id="cep" name="cep" placeholder="Ex.: 92818938" required>

                        </div>

                        <div class="col-md-7">
                        
                            <label class="h5" for="address">Endereço</label>
                            
                            <input type="text" class="form-control " id="address" name="address" placeholder="Ex.: Av. Brasil" required>

                        </div>
                    
                    </div>

                    <div class="d-flex mb-3 justify-content-between">

                        <div class="col-md-3">

                            <label class="h5" for="number">Número</label>
                            
                            <input type="number" class="form-control " id="number" name="number" min="1" required>
                        
                        </div>

                        <div class="col-md-8">
                        
                            <label class="h5" for="complement">Complemento</label>
                            
                            <input type="text" class="form-control " id="complement" name="complement" placeholder="Ex.: APTO, BL">

                        </div>
                    
                    </div>

                    <div class="d-flex mb-3 justify-content-between">

                        <div class="col-md-4">

                            <label class="h5" for="district">Bairro</label>

                            <input type="text" class="form-control " id="district" name="district" required>

                        </div>

                        <div class="col-md-5">

                            <label class="h5" for="city">Cidade</label>

                            <input type="text" class="form-control " id="city" name="city" required>

                        </div>

                        <div class="col-md-1">

                            <label class="h5" for="state">UF</label>

                            <input type="text" class="form-control " id="state" name="state" required>

                        </div>
                    
                    </div>
                    
                    <div class="text-center pt-3">
                        
                        <button type="submit" class="btn btn-lg btn-warning shadow text-white">Enviar</button>

                        <button type="reset" class="btn btn-lg btn-danger shadow text-white mx-3">Cancelar</button>
                    
                    </div>

                </form>
            
            </section>

        </main>
        <!-- Fim Main -->

        <script type="text/javascript" src="js/cepAPI.js"></script>

    </body>

</html>
