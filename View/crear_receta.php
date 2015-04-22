<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Crear Receta</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
     <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link href="../assets/css/MyStyle.css" rel="stylesheet" />
    <script src="../assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="ctrIndex.php" class="logo"><b  >Quick Recipes</b></a>
            <!--logo end-->
    
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                <li>
                                     <form name="formulario"method="POST"action='<?php echo $_SERVER['PHP_SELF']; ?>' >
                    <input type="hidden" name="cerrar">
                    <button type="submit" class="btn btn-default" name="cerrar" id="btn-cerrar">Cerrar sessi&oacute;n</button>
                  </form>
                  </li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside >
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="ctrIndex.php"><img src="../assets/img/Quick-Recipes.jpg"  width="60" class="img-circle"></a></p>
              	  <h5 class="centered" >Quick Recipes</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="ctrIndex.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Panel de control</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cutlery"></i>
                          <span>Recetas</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="ctrRecetas.php">Ver</a></li>
                          <li><a  href="#">Crear </a></li>
                          <li><a  href="#">Modificar </a></li>
                          <li><a  href="ctrClasificaciones.php">Clasificacion </a></li>
                      </ul>
                  </li>
                                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cutlery"></i>
                          <span>Ingredientes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="ctrIngredientes.php">Ver</a></li>
                          <li><a  href="ctrCrearReceta.php">Crear </a></li>
                          <li><a  href="#">Modificar </a></li>
                          <li><a  href="ctrTipoIngredientes.php">Clasificacion </a></li>
                      </ul>
                  </li>    
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

            <section id="main-content">
<br>
        <!-- INLINE FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                  <center>
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Registrar Receta</h4>
                
                      <form class="form-inline" method="post" class="form" role="form">
                          <div class="form-group">
                              <label class="sr-only" for="id_receta">Identificador</label>
                              <input type="text" class="form-control" name="id_receta" placeholder="Identificador" value="<?php echo $id_receta;?>">
                          </div>
                          <div class="form-group">
                              <label class="sr-only" for="nombre_receta">Nombre</label>
                              <input type="text" class="form-control" name="nombre_receta" placeholder="Nombre" value="<?php echo $nombre_receta;?>">
                          </div>

                          <div class="form-group">
                              <label class="sr-only" for="categoria">Categoria</label>
                              <select name="categoria"class="form-control">
                                <option>Categoria</option>
                                <?php                                   
                                echo $categoria; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="sr-only" for="fec_registro">fec_registro</label>
                              <input type="hidden" class="form-control" name="fec_registro" valuee="1999/05/17" >
                          </div>
                          <div class="form-group">
                              <label class="sr-only" for="descripcion">Descripcion</label>
                              <input type="text" class="form-control" name="descripcion" placeholder="descripcion" value="<?php echo $descripcion;?>">
                          </div>
                            
                          <br>
                              <div class="row mt">
                      
                          <div class="form-group">
                              <label class"control-label" for="preparacion">Preparacion</label>
                             <textarea class="form-control" rows="4" name="preparacion" value="preparacion"></textarea>
                              </div>
                
                            </div>
                         <br>
                         <br>
                          <button type="submit" class="btn btn-default" name="action" style="background:#00FA9A; color:white" value="registrar">Registrar</button>
                           <button type="submit" class="btn btn-default" name="action" style="background:#00FA9A; color:white" value="Modificar">Modificar</button></center>

                      </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
            </div><!-- /row -->
          <section class="wrapper" style="background:#00FA9A" >
          <!--Agregar ingredientes-->
          <div class="row mt">
            <div class="col-md-6">
              <div class="form-panel">
                <div class="form-group">
                  <form  method="post" class="form" role="form">
                    <label class="sr-only" for="ingredientes">Ingredientes</label>
                      <select name="id_ingredientes"class="form-control">
                        <option>Ingredientes</option>
                         <?php                                   
                        echo $ingredientes; ?>
                      </select>
                      <br>
                      <div class="col-md-6">
                        <label class="sr-only" for="cantidad">Cantidad</label>
                        <input type="text" class="form-control" name="cantidad" placeholder="Cantidad" value="<?php echo $cantidad;?>">       
                      </div>
                      <div class="col-md-6">
                        <label class="sr-only" for="unidad_medida">Unidad Medida</label>
                      <select name="unidad_medida"class="form-control">
                        <option>Medida</option>
                         <?php                                   
                        echo $unidades; ?>
                      </select>
                      <br>
                      </div>
                    <button type="submit" class="btn btn-default" name="action" style="background:#00FA9A; color:white" value="agregar">Agregar</button>
                  </form>    
                </div>
              </div>
            </div>
            <div class="col-md-6">
              
            </div>
          </div>
          
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Recetas</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th></i>Identificador</th>
                                  <th></i>Nombre</th>
                                  <th>Descripcion</th>
                                  <th>Clasificacion</th>
                              </tr>
                              </thead>
                              <tbody>

                                <?php echo $tabla; ?>

                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
       

          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 -Quick Recipes
              <a href="ctrIndex.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    

	

  

  </body>
</html>
