
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Contacto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
 
<body>
  <header>
    <nav class="navbar navbar-default navegador">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">LOGO</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right menu">
            <li><a href="inicio.php">INICIO</a></li>
            <li><a href="exportacion.php">EXPORTACIÓN</a></li>
            <li><a href="distribuidora.php">DISTRIBUIDORA</a></li>
            <li><a href="noticias.php">NOTICIAS</a></li>
            <li><a class="activo" href="contacto.php">CONTACTO</a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  <div id="carousel-example-generic" class="carousel slide slide-secciones" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagenes/slide/1.jpg" alt="descripcion">
        <div class="hidden-xs carousel-caption info">
          <h2>COMUNICATE CON NOSOTROS</h2>
        </div>
      </div>
    </div>
    <!-- Controls -->
  </div>

  <article class="container cont-bienvenidos">
    <div class="col-xs-12 titulo-secciones text-center">
      <h3 class="titulo">NUESTRA UBICACIÓN</h3>
      <p class="subtitulo">Lorem Ipsum es simplemente el texto de relleno.</p>
      <p class="texto">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera.
      </p>
      <div class="linea"></div>
    </div>

    <div class="mapa col-xs-12 col-sm-6 col-md-4 col-lg-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3300.711393985207!2d-70.73234079999997!3d-34.17929579999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9663434f79402789%3A0x6b2258731f4db8e5!2sCarr+del+Cobre+5%2C+Rancagua%2C+VI+Regi%C3%B3n!5e0!3m2!1ses!2scl!4v1435356583294" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen>
      </iframe>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-7 cont-contacto">
      <form class="col-xs-12" action="envio" method="post" onsubmit="MM_validateForm('Nombre','','R','Mail','','RisEmail','consulta','','R');return document.MM_returnValue;return document.MM_returnValue">
        <input name="Nombre" type="text" class="col-xs-12 input" id="Nombre" placeholder="Nombre">
        <input name="Telefono" type="text" class="col-xs-12 input" id="Telefono" placeholder="Telefono">
        <input name="Mail" type="text" class="col-xs-12 input" id="Mail" placeholder="E-mail">
        <textarea name="Mensaje" id="consulta" class="col-xs-12 mensaje" placeholder="Mensaje"></textarea>
        <input class="enviar" name="Enviar" type="submit" value="Enviar">

      </form>
    </div>
    
    

  </article>

  <div class="container-fluid fondo-img">
    <div class="container text-center cont-socios">
      <p class="titulo">EXPORTADORES ASOCIADOS</p>
      <p class="texto">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar.
      </p>
    </div>
  </div>
  <div class="container logos">
    <a class="empresas" href="#" target="new"><img src="imagenes/logos/1.jpg"></a>
    <a class="empresas" href="#" target="new"><img src="imagenes/logos/2.jpg"></a>
    <a class="empresas" href="#" target="new"><img src="imagenes/logos/3.jpg"></a>
    <a class="empresas" href="#" target="new"><img src="imagenes/logos/4.jpg"></a>
    <a class="empresas" href="#" target="new"><img src="imagenes/logos/5.jpg"></a>
  </div>

  <footer class="container-fluid">
    <div class="container text-center">
      <div class="contactate">
        <p class="titulo">CONTÁCTANOS</p>
        <p class="texto">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar.</p>
      </div>
      <div class="sociales">
        <a class="social" href="#" target="new"><img src="imagenes/iconos/twit.png"></a>
        <a class="social" href="#" target="new"><img src="imagenes/iconos/face.png"></a>
      </div>
      <div class="col-xs-12 info">
        <div class="col-xs-12 col-md-6 text-left texto">
          <p>NUESTRA OFICINA DE LUJO <br>
            WEBLOUNGE BVBA <br>
            TORHOUTSESTEENWEG 503 - B-8200 BRUJAS INFO@WEBLOUNGE.BE
          </p>
        </div>
        <div class="col-xs-12 col-md-6 text-right texto">
          <p>OFICINA REGISTRADA <br>
            WEBLOUNGE BVBA <br>
            JOS. VEREECKESTRAAT 1 - B-8210 ZEDELGEM <br>
            TVA BE 0478 384 994
          </p>
        </div>
      </div>
      <div class="col-xs-12 info2">
        <div class="col-xs-12 col-md-6 text-left texto">
          <p>© 2015 WEBLOUNGE - TODOS LOS DERECHOS RESERVADOS
          </p>
        </div>
        <div class="col-xs-12 col-md-6 text-right texto">
          <a href="https://www.emagenic.cl/" target="new">SITIO DESARROLLADO POR EMAGENIC LTDA.</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- script de botstrap -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"> </script>
  <!-- fin script de botstrap -->
  <!-- script efecto hover en fotos -->
  <script>
      // For Demo purposes only (show hover effect on mobile devices)
      [].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
        el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
      } );
  </script>
  <!-- fin script efecto hover en fotos -->


</body>
</html>