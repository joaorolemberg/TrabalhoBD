<!DOCTYPE html>
<html>
    <head>

        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{asset('css/stylesheetLogin.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <title>
                Login |  CCM
        </title>

        
    </head>
    <body>
       <div class="container-fluid"  id="mainLogin">
         
        
            <div class="row" id="teste" >

            </div>
            <div class="row" >

                    <div class="col-xl-4 col-md-3" >
                            
                    </div>

                    <div class="col-xl-4 col-md-6" style="background-color: rgba(255, 255, 255, 0.7);">

                       

                        <h1 class="display-1">CCM</h1>
                        <h2 class="display-3">Centro de Cosmologia Mundial</h2>

                        <form method="post" action="{{ action('loginController@fazerLogin') }}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <div class="form-group">
                                <label class="labelForms" >Usuário</label>
                                <input name="username" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="labelForms">Senha</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <button type="submit" id="btnLogin" class="botao">Entrar</button>
                            
                        </form>
                        <br> 
                        <a href="">Cadastre-se</a>
                            
                    </div>

                    <div class="col-xl-4 col-md-3" >
                            
                    </div> 
                    
                </div>
                <div class="row" id="teste">

                </div>
                
        </div>

    </body>
    <footer>
            <!-- JS -->
            <script src="public/js/jquery.js"></script>
            <script src="public/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="<?php echo asset('js/jquery-3.4.1.min.js')?>"> </script>
            <script type="text/javascript" src="<?php echo asset('js/bootstrap.bundle.min.js')?>"> </script>
    </footer>

</html>