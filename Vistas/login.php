<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Applicaciones en la UADY</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style type="text/css">
        #textTitle {
            font-size: 100%;
        }

        .intro-text {
            font-size: 60%;
        }


        #login{
            margin-top:10%;
            background-color: #ffffff;
        }

        .login-usr{
            margin-left: 25%;
        }

        #message-error{
            margin-left: 15%;
            color: red;
        }

    </style>


</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a id="textTitle" class="navbar-brand" href="index.html">
                REGRESAR A INICIO</a>


        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <!--<li class="page-scroll">-->
                <!--<a href="#apps_hechas">Applicaciones hechas</a>-->
                <!--</li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca de  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="tecnologias.html">Tecnologias Usadas</a></li>
                        <li><a href="publicaciones.html">Publicaciones</a></li>
                        <li><a href="personal.html">Personal</a></li>
                        <li><a href="proyectos.html">Proyectos en Desarrollo</a></li>
                        <!--<li><a href="#about">Conócenos</a></li>-->
                    </ul>
                </li>
                <!--<li class="page-scroll">-->
                <!--<a href="../Vistas/index.html">Contáctanos</a>-->
                <!--</li>-->


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<section id="inicio">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h4>Inicia Sesiòn</h4>
            <hr class="star-primary">
        </div>
        <div class="row">
            <form class="form-horizontal login-usr"  method="post" action="../Controladores/Controlador_login.php">
                <div class="form-group">
                    <label for="correo" class="col-sm-2 control-label">Correo</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="correo" name="correo"
                               placeholder="Correo Electronico" required>
                    </div>
                </div>
                <div class="form-group" >
                    <label for="contrasena" class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="contrasena" name="contrasena"
                               placeholder="Introduce tu Contraseña" requiered>
                    </div>
                </div>
                <?php

          if (isset($_GET["error"])) {
            ?>
                <p id="message-error"> El correo o la contraseña estan incorrectos.</p>
                <?php
          }
          ?>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

</section>




<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Dirección</h3>


                    <p>Anillo Periférico Norte, <br/>Tablaje Cat. 13615,<br/>
                        Colonia Chuburná Hidalgo Inn,<br/> Mérida Yucatán.</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Visita nuestras redes sociales!</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Autores:</h3>

                    <p>Eduardo Canché</p>

                    <p>Abner Collí</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; UADY 2015
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>



<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/cbpAnimatedHeader.js"></script>




<!-- Custom Theme JavaScript -->
<script src="../js/freelancer.js"></script>

</body>

</html>