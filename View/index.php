<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>PANEL DE CONTROL</title>

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
                          <li><a  href="#">Crear </a></li>
                          <li><a  href="#">Modificar </a></li>
                          <li><a  href="#">Clasificacion </a></li>
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
                      <div class="row">
                        <div class="col-md-12" style="height:80px">
                        </div>

                      </div>
                      <div class="row mt">
                      
                        <div class="col-md-4 col-sm-4 mb">
                          <a href="ingredientes.php">
                          <div class="white-panel pn">
                            <div class="white-header">
                    <h5>Ingredientes</h5>
                            </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-6 goleft">
                    <p><i class="fa fa-cubes" id="color-font-icon"></i>122</p>
                  </div>
                  <div class="col-sm-6 col-xs-6"></div>
                            </div>
                            <div class="centered">
                    <img src="../assets/img/pescao.png"  width="120">
                            </div>
                          </div>
                          </a>
                        </div><!-- /col-md-4 -->
                      	

                      	<div class="col-md-4 col-sm-4 mb">
                          <a href="ctrRecetas.php">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Top Recetas</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-cutlery" id="color-font-icon"></i> 25</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
										<img src="../assets/img/pizza.png" width="120">
	                      		</div>
                      		</div>
                          </a>
                      	</div><!-- /col-md-4 -->
                      	
						<div class="col-md-4 col-sm-4 mb">
							<!-- WHITE PANEL - TOP USER -->
                <a href="ctrUsuario.php">
							<div class="white-panel pn">
								<div class="white-header">
									<h5>Usuarios</h5>
								</div>
								<p><img border=0 src="http://www.computerclipart.com/computer_clipart_images/black_and_white_chef_icon_0521-1004-1319-2654_TN.jpg" alt="Computer Clipart Images"></p>
								<p><b>Super O</b></p>
								<div class="row">
									<div class="col-md-6 col-sm-6 mb">
										<p class="small mt">Miembro desde</p>
										<p>2012</p>
									</div>
									<div class="col-md-6 col-sm-6 mb">
										<p class="small mt">Recetas creadas</p>
										<p>15</p>
									</div>
								</div>
							</div>
              </a>
						</div><!-- /col-md-4 -->
                      	
           
                    </div><!-- /row -->

            <div class="col-lg-3 ds">
                    <!--Notificaciones-->
            <h3>NOTIFICACIONES</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb" id="color-font-icon">
                          <span class="badge bg-theme"><i class="fa fa-users"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>Hace 2 Minutos</muted><br/>
                             <a href="#">James Brown</a> se ha registrado<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-users"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>Hace 3 Horas</muted><br/>
                             <a href="#">Diana Kennedy</a> ha creado una receta<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-users"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>Hace 7 Horas</muted><br/>
                             <a href="#">Brandon Page</a> ha modificado una receta<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>Hace 11 horas</muted><br/>
                             <a href="#">Mark Twain</a> Ha comentado una receta<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-users"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>Hace 18 horas</muted><br/>
                             <a href="#">Daniel Pratt</a> se ha registrado<br/>
                          </p>
                        </div>
                      </div>
                    </div>
					
                
                  
                  
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
	<script src="../assets/js/zabuto_calendar.js"></script>	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
