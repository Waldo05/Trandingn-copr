
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Trainingn-Corp</title>
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
            <li><a class="activo" href="inicio">INICIO</a></li>
            <li><a href="exportacion">EXPORTACIÓN</a></li>
            <li><a href="distribuidora">DISTRIBUIDORA</a></li>
            <li><a href="<?= $urlnoticias; ?>">NOTICIAS</a></li>
            <li><a href="contacto">CONTACTO</a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagenes/slide/1.jpg" alt="descripcion">
        <div class="hidden-xs carousel-caption info">
          <h2>EXPORTACIONES EN TODO EL MUNDO</h2>
          <p class="hidden-sm">Lorem Ipsum es simplemente el
            texto de relleno de las imprentas y archivos de texto.
            Lorem Ipsum ha sido el texto de relleno estándar.
          </p>
        </div>
      </div>

      <div class="item">
        <img src="imagenes/slide/2.jpg" alt="descripcion">
        <div class="hidden-xs carousel-caption info">
          <h2>EXPORTACIONES EN TODO EL MUNDO</h2>
          <p class="hidden-sm">Lorem Ipsum es simplemente el texto
            de relleno de las imprentas y archivos de texto. Lorem
            Ipsum ha sido el texto de relleno estándar.
          </p>
        </div>
      </div>

      <div class="item">
        <img src="imagenes/slide/3.jpg" alt="descripcion">
        <div class="hidden-xs carousel-caption info">
          <h2>EXPORTACIONES EN TODO EL MUNDO</h2>
          <p class="hidden-sm">Lorem Ipsum es simplemente el texto
            de relleno de las imprentas y archivos de texto.
            Lorem Ipsum ha sido el texto de relleno estándar.
          </p>
        </div>
      </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="flecha glyphicon glyphicon-menu-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="flecha glyphicon glyphicon-menu-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <article class="container cont-bienvenidos">
    <div class="col-xs-12 col-md-4 titulo">
      <h1>LAS MEJORES CARNES EXPORTADAS DESDE EL EXTRANJERO</h1>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 texto">
      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas
        y archivos de texto. Lorem Ipsum ha sido el texto de relleno
        estándar de las industrias desde el año 1500, cuando un impresor
        (N. del T. persona que se dedica a la imprenta) desconocido usó
        una galería de textos y los mezcló de tal manera que logró hacer
        un libro de textos especimenmentmente.
      </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 texto">
      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas
        y archivos de texto. Lorem Ipsum ha sido el texto de relleno
        estándar de las industrias desde el año 1500, cuando un impresor
        (N. del T. persona que se dedica a la imprenta) desconocido usó
        una galería de textos y los mezcló de tal manera que logró hacer
        un libro de textos especimenmentmente.
      </p>
    </div>
  </article>

  <aside class="container-fluid cont-destacados">
    <div class="container dentro-destacados">
      <div class="col-xs-12 text-center titulo">
        <h4>PRODUCTOS MÁS EXPORTADOS</h4>
      </div>
    </div>
    <div class="container destacados">
      <!-- autoincrementa -->
      <div class="col-xs-12 col-md-4 destacado">
        <figure>
          <img src="imagenes/destacados/1.jpg" alt="nombre">
        </figure>
        <div class="info">
          <h2>Título de la exportación</h2>
          <p>Lorem Ipsum es simplemente el texto de relleno
            de las imprentas y archivos de texto. Lorem Ipsum
            ha sido el texto de relleno estándar de las
            industrias desde el año 1500, cuando un impresor.
          </p>
        </div>
        <div class="btn">
          <a href="detalle.php">Ver más</a>
        </div>
      </div>
      <!-- autoincrementa -->
      <!-- autoincrementa -->
      <div class="col-xs-12 col-md-4 destacado">
        <figure>
          <img src="imagenes/destacados/2.jpg" alt="nombre">
        </figure>
        <div class="info">
          <h2>Título de la exportación</h2>
          <p>Lorem Ipsum es simplemente el texto de relleno
            de las imprentas y archivos de texto. Lorem
            Ipsum ha sido el texto de relleno estándar
            de las industrias desde el año 1500, cuando
            un impresor.
          </p>
        </div>
        <div class="btn">
          <a href="detalle.php">Ver más</a>
        </div>
      </div>
      <!-- autoincrementa -->
      <!-- autoincrementa -->
      <div class="col-xs-12 col-md-4 destacado">
        <figure>
          <img src="imagenes/destacados/3.jpg" alt="nombre">
        </figure>
        <div class="info">
          <h2>Título de la exportación</h2>
          <p>Lorem Ipsum es simplemente el texto de relleno
            de las imprentas y archivos de texto. Lorem
            Ipsum ha sido el texto de relleno estándar 
          de las industrias desde el año 1500,
          cuando un impresor.
          </p>
        </div>
        <div class="btn">
          <a href="detalle.php">Ver más</a>
        </div>
      </div>
      <!-- autoincrementa -->
    </div>
  </aside>

  <div class="container-fluid fondo-img">
    <div class="container text-center cont-socios">
      <p class="titulo">EXPORTADORES ASOCIADOS</p>
      <p class="texto">Lorem Ipsum es simplemente el texto de
        elleno de las imprentas y archivos de texto. Lorem
        Ipsum ha sido el texto de relleno estándar.
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


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"> </script>


</body>
</html>