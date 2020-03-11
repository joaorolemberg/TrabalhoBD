<!DOCTYPE html>
<html>
    <head>

        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @yield('css-view')
        <link rel="stylesheet" href="{{asset('css/stylesheetTemplates.css')}}">
        <link rel="stylesheet" href="{{asset('css/stylesheetClasses.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <title>
                Centro de Cosmologia Mundial
        </title>

        
    </head>

    <body>
       <div class="container-fluid"  id="master">

            <header >
                <div class="row" id="cabecalhoMaster1" >

                    <div class="col-xl-8 col-md-3" >
                        <h1>Centro de Cosmologia Mundial</h1>
                    </div>

                    <div class="col-xl-4 col-md-3" >

                            <a href="">Consulta Geral</a>
                            <a href="">Logout</a>

                    </div>

                </div>

                <div class="row" id="cabecalhoMaster2" style="text-align:center;" >

                    <div class="col-xl-2" >
                        <div class="dropdown" >
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropPlaneta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Planeta
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropPlaneta">

                                <a class="dropdown-item" href="{{route('planeta.consultar')}}">Consultar</a>
                                <a class="dropdown-item" href="{{route('planeta.inserir')}}">Inserir</a>
                                <a class="dropdown-item" href="{{route('planeta.alterar')}}">Alterar</a>
                                <a class="dropdown-item" href="{{route('planeta.remover')}}">Remover</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2" >
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropEstrela" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Estrela
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropEstrela">
                                <a class="dropdown-item" href="#">Consultar</a>
                                <a class="dropdown-item" href="#">Inserir</a>
                                <a class="dropdown-item" href="#">Alterar</a>
                                <a class="dropdown-item" href="#">Remover</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2" >
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropSatelite" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Satélite
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropSatelite">
                                <a class="dropdown-item" href="#">Consultar</a>
                                <a class="dropdown-item" href="#">Inserir</a>
                                <a class="dropdown-item" href="#">Alterar</a>
                                <a class="dropdown-item" href="#">Remover</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-2" >
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropSistema" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sistema
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropSistema">
                                <a class="dropdown-item" href="#">Consultar</a>
                                <a class="dropdown-item" href="#">Inserir</a>
                                <a class="dropdown-item" href="#">Alterar</a>
                                <a class="dropdown-item" href="#">Remover</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2" >
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropGalaxia" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Galáxia
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropGalaxia">
                                <a class="dropdown-item" href="#">Consultar</a>
                                <a class="dropdown-item" href="#">Inserir</a>
                                <a class="dropdown-item" href="#">Alterar</a>
                                <a class="dropdown-item" href="#">Remover</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2" >
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropRelac" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Relacionamentos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropRelac">
                                <a class="dropdown-item" href="#">Orbitar</a>
                                <a class="dropdown-item" href="#">Outra ação</a>
                                <a class="dropdown-item" href="#">Alguma coisa aqui</a>
                            </div>
                        </div>
                    </div>





 
                </div>
                         

                        

                       
            </header>
            
            @yield('conteudo-view')
    
            
            
                
        </div>

    </body>
    <footer>
            <!-- JS -->
            <script src="public/js/jquery.js"></script>
            <script src="public/js/bootstrap.bundle.min.js"></script>
            @yield('js-view')
            <script type="text/javascript" src="<?php echo asset('js/jquery-3.4.1.min.js')?>"> </script>
            <script type="text/javascript" src="<?php echo asset('js/bootstrap.bundle.min.js')?>"> </script>
    </footer>

</html>