<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="resources/css/styles.css">
    <!-- Carousel -->
    <link rel="stylesheet" href="resources/css/carousel.css">
    <!--<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">-->
    <!-- Styles -->
    <link rel="stylesheet" href="resources/css/sass/styles.css">
    <!-- Font Awesome -->
	  <link rel="stylesheet" href="http://localhost/Projects/vayne/assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">

    <title>sevencrows/Ecommerce</title>
  </head>
  <body>

  <style>
  body{
    background: #eee;
  }
  span{
      font-size:15px;
  }
  a{
    text-decoration:none;
    color: #0062cc;
    border-bottom:2px solid #0062cc;
  }
  .box{
      padding:60px 0px;
  }

  .box-part{
      background:#FFF;
      border-radius:0;
      padding:60px 10px;
      margin:30px 0px;
  }
  .text{
      margin:20px 0px;
  }

  .fa{
      color:#4183D7;
  }
  </style>

  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Lorem, ipsum.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Administrá tu sitio desde cualquier dispositivo... Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container-fluid bg-white p-5 text-lead">
    <h4>breve explicacion de la importancia de vender por internet... que ventajas hay y que beneficios trae para el crecimiento de las empresas...</h4>
    <h4>que ofrecemos... a quien va dirigido... (pequeñas, medianas empresas y emprendedores)</h4>
    <h4>...</h4>
    <h4>A continuación detallaremos algunas características...</h4>
  </div>


  <div class="box">
    <div class="container">
     	<div class="row">

			    <div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

            <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Web Responsive</h4>
						</div>

						<div class="text">
							<span>Diseño profesional y moderno, tu sitio se adapta a cualquier tipo de dispositivo celular y/o tablets. Accedé desde cualquier parte.</span>
						</div>

					 </div>
				</div>

				 <div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

					    <i class="fa fa-th-large fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Panel administrativo</h4>
						</div>

						<div class="text">
							<span>Todo lo que necesitas para administrar tu sitio de forma facil e intuitiva. Ingresá productos, ventas, proveedores y mucho más.</span>
						</div>

					 </div>
				</div>

				 <div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

            <i class="fa fa-truck fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Gestión de pedidos</h4>
						</div>

						<div class="text">
							<span>Podrás visualizar todas las ventas realizadas, ver pedidos enviados y pendientes de entrega para una mejor administración.</span>
						</div>

					 </div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

            <i class="fa fa-calculator fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Punto de venta</h4>
						</div>

						<div class="text">
							<span>Siempre es importante llevar un control total de las ventas para poder crecer. Además de las ventas Online efectuadas por los usuarios a traves de la Web, registrá tambien aquellas que realices presencialmente en tu negocio.</span>
						</div>

					 </div>
				</div>

				 <div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

					    <i class="fa fa-bell-o fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Notificaciones</h4>
						</div>

						<div class="text">
							<span>El sistema te notificará si ocurre algo! <br>Cada vez que un cliente se registra, realiza una compra, recibas un mensaje, tengas un nuevo comentario, reseña o te estes quedando sin stock de algún producto te lo haremos saber.</span>
						</div>

					 </div>
				</div>

				 <div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

                        <i class="fa fa-users fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Interactuá con la comunidad</h4>
						</div>

						<div class="text">
							<span>Redirigí los seguidores a tu sitio! <br> Podras publicitar productos, realizar notas, publicar eventos o generar temas de interes con imagenes ilustrativas y compartirlas en tus redes sociales.</span>
						</div>

					 </div>
				</div>


        <div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

            <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Impulsá tus ventas</h4>
						</div>

						<div class="text">
							<span>Conocé cuales son los productos más vendidos y tus clientes potenciales! <br> De acuerdo a ésta información podrás crear estrategias de marketing y contenido para impulsar tus ventas.</span>
						</div>

					 </div>
				</div>

        <div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

            <i class="fa fa-comments-o fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Comentarios y reseñas</h4>
						</div>

						<div class="text">
							<span>Las opiniones sobre tus productos son un punto clave! Los clientes leen los comentarios de otros usuarios antes de tomar una decisión de compra. Impulsá aún mas tus ventas con el sistema de comentarios y reseñas.</span>
						</div>

					 </div>
				</div>


        <div class="col-lg-4 col-md-12 col-sm-12">

					<div class="box-part text-center">

            <i class="fa fa-star-o fa-3x" aria-hidden="true"></i>

						<div class="title">
							<h4>Promociones y descuentos</h4>
						</div>

						<div class="text">
							<span>Podrás promocionar aquellos productos que creas necesarios. Ofrecerles descuentos a los usuarios son un elemento decisivo a la hora de vender. Los productos destacados aparecerán en distintas secciones del sitio.</span>
						</div>

					 </div>
				</div>

		</div>
    </div>
</div>

    <div class="container p-5 text-lead text-black text-center" style="background-color: #fff">
      <h4>Disponemos de varios <strong>planes</strong> a partir de <strong>$25</strong> al mes, elegí el que mas se adapte a tu negocio o emprendimiento de acuerdo a tus necesidades.</h4>
      <br>
      <h5>Cada plan tiene además un costo de implementación que se realiza en un pago único.</h5>
      <p><em>Los precios marcados a continuación son en dólares.</em></p>
    </div>

    <div class="container my-5 p-5 bg-white">
        <h4>Hemos lanzado una versión de demostración mostrando todas las características del producto, aquí te dejamos una <a href="https://www.sc-hosting.com.uy/" target="_blank">tienda online</a> de ejemplo.</h4>
        <br>
        <h4>El siguiente botón te redirigirá al panel administrativo, te damos la posibilidad de que puedas ingresar productos, proveedores y gestionar ventas si así lo deseas.</h4>
        <p>La versión demo del software corresponde al plan <span class="badge badge-danger">Premium</span>.</p>

        <a href="https://www.sc-hosting.com.uy/auth" target="_blank" class="btn btn-lg btn-primary">Ver DEMO <i class="fa fa-arrow-circle-right text-white"></i></a>
        <p><em>Las credenciales de acceso podrás encontrarlas en el formulario de inicio de sesión.</em></p>
    </div>

    <div class="pricing">
        <div class="container">

            <!-- ASIDE -->
            <?php include('layouts/aside.php') ?>

            <!-- PLAN 1 -->
            <?php include('layouts/plan_1.php') ?>

            <!-- PLAN 2 -->
            <?php include('layouts/plan_2.php') ?>

            <!-- PLAN 3 -->
            <?php include('layouts/plan_3.php') ?>

        </div>
    </div>

    <script src="resources/js/jquery-3.3.1.min.js"></script>
    <script src="resources/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
