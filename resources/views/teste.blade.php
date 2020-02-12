<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <title>Bootstrap</title>
</head>

<header>
</header>

<body>
    <div class="container-fluid" style="background-color:grey">

       

        <table class="table" >
            <tr>
                <th>#</th>
                <th>Cursos</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Bootstrap</td>
            </tr>
        </table>
        
        <div class="row" style="background-color:blue  ">
            <div class="col-2" style="background-color:aqua ">
                    opa1
            </div>

            <div class="col-8" style="background-color:lightblue">
                <div class="row" style="background-color:red  ">
                    <div class="col-8" style="background-color:magenta">
                                opa
                    </div>
                    
                </div>

                <div class="row" id="teste">
                
                    <h1>Título 1</h1>
                    <p>
                        <s>Lorem ipsum dolor sit amet</s>, <del>consectetur adipiscing elit</del>. Ut porttitor suscipit iaculis. <u>
                                Morbi sed consectetur urna, nec euismod leo</u>. Praesent rutrum molestie elit, eget feugiat mauris 
                                dignissim ac. Quisque ut faucibus dui.Phasellus dignissim sed metus ut viverra. Nullam et lectus lacinia, 
                                pretium leo. Quisque egestas odio vitae egestas pellentesque. Sed pretium eros a lectus suscipit hendrerit. 
                                Ut eu blandit lectus. Suspendisse ut ornare quam. Sed varius elementum finibus. Vivamus pellentesque pulvinar, 
                                quis iaculis odio.
                    </p>
                </div>


                
            </div>

            <div class="col-2" style="background-color:aqua">
                    opa3
            </div>
                
        </div>

        <div class="row" style="background-color:red">
                opa2
        </div>


		<h1>Título 1</h1>
		<p>
            <s>Lorem ipsum dolor sit amet</s>, <del>consectetur adipiscing elit</del>. Ut porttitor suscipit iaculis. <u>
                Morbi sed consectetur urna, nec euismod leo</u>. Praesent rutrum molestie elit, eget feugiat mauris 
                dignissim ac. Quisque ut faucibus dui.Phasellus dignissim sed metus ut viverra. Nullam et lectus lacinia, 
                pretium leo. Quisque egestas odio vitae egestas pellentesque. Sed pretium eros a lectus suscipit hendrerit. 
                Ut eu blandit lectus. Suspendisse ut ornare quam. Sed varius elementum finibus. Vivamus pellentesque pulvinar, 
                quis iaculis odio.
		</p>
		<p class="lead">
            Integer sed accumsan arcu. <mark>Nam vel aliquam nulla</mark>. Praesent varius tortor non nunc viverra suscipit. 
            Praesent eget mi ac velit sagittis convallis vel in ex. Aliquam eget suscipit eros. Curabitur lacinia luctus 
            finibus. Nulla facilisi. Vestibulum mattis turpis id orci tincidunt, vitae malesuada ex luctus. Donec nulla 
            risus, cursus at turpis ut, <mark>tincidunt porta lorem</mark>. Etiam pulvinar elit nec viverra rutrum. 
            Nullam vestibulum risus quis ligula accumsan suscipit. Morbi dictum nec dui vel aliquet. 
            <small>Suspendisse eget efficitur diam. Proin volutpat augue non nulla varius, at imperdiet felis ultrices. 
            Maecenas velit orci,hendrerit ac eleifend ac, bibendum euismod felis. Etiam laoreet varius dictum.</small>
		</p>
		<p>
            <strong>Donec ornare nisl eros</strong>, ut <small>luctus felis tristique ut</small>. 
            <em>Nunc ultricies varius aliquam</em>. Aenean pulvinar nisl ac leo commodo, non dignissim lorem luctus. 
            In iaculis convallis justo. Phasellus laoreet elit ac nisl consectetur, vitae fermentum libero pharetra. 
            Mauris sed maximus leo. Donec mattis augue at vehicula fringilla. Maecenas dictum nisl eget velit cursus 
            malesuada. Sed eu nulla a erat maximus molestie rhoncus et metus. Cras at mi sit amet quam interdum elementum 
            gravida ut justo. Morbi finibus vehicula malesuada. Etiam fermentum, urna eu pellentesque lacinia, dui risus 
            aliquam enim, sit amet lobortis mauris tellus et risus. Orci varius natoque penatibus et magnis dis parturient 
            montes, nascetur ridiculus mus.
		</p>
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