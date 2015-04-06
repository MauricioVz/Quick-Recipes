<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Registrarse</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 well well-sm">
            <legend class="text-center"><i class="glyphicons glyphicons-user-add"></i>Registrarse</legend>
            <form action="#" method="post" class="form" role="form">
              <input class="form-control" id="id_usuario" name="id_usuario" placeholder="Identificacion" type="text" required autofocus/>
              <br>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" id="primer_nombre" name="primer_nombre" placeholder="Primer Nombre" type="text"
                         />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" id="segundo_nombre" name="segundo_nombre" placeholder="Segundo Nombre" type="text" required />
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Primer Apellido" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Segundo Apellido" type="text" required />
                </div>
            </div>
            <br>
            <input class="form-control" id="email" name="email" placeholder="Correo Electronico" type="email" />
            <br>
            <input class="form-control"  id="password" name="password" placeholder="Contraseña" type="password" />
            <br>
             <input class="form-control"  id="rol" name="rol" placeholder="Rol" type="hidden" value="2" />
         
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="registrar" style="background:#00FA9A; border-color:#00FA9A">
                Registrar</button>
            </form>
        </div>
    </div>
</div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="../assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("../assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
