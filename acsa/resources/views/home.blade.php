<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ACSA</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('device-mockups/device-mockups.min.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/new-age.min.css') }}" rel="stylesheet">
    <style>
    .modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}

.modalDialog > div {
    width: 400px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
.close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }
</style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <!--<a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">¿Estás listo para la mejor experiencia web de tu vida? ¡Estás listo para ACSA!</h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Iniciar</a>  
              <a href="/entrada" class="btn btn-outline btn-xl js-scroll-trigger">Entrada</a>
              <a href="/salida" class="btn btn-outline btn-xl js-scroll-trigger">Salida</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus_black_land">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
        
          <div class="col-md-8 mx-auto">
            <div class>
              <h1 class="mb-5">¡Me quiero registrar!</h1>
                <a href="#openModal" class="btn btn-outline btn-xl ">Registro</a>
                <div id="openModal" class="modalDialog">
                <div>
                <a href="#close" title="Close" class="close">X</a>
                @include('RegistroAdministrador')
                </div>
              </div>
        </div>
        <br>
        <div class="header-content mx-auto">
          <h1 class="mb-5">Soy:</h1>
          <a href="/admin" class="btn btn-outline btn-xl js-scroll-trigger">Administrador</a>
          <a href="/loginprofesor" class="btn btn-outline btn-xl js-scroll-trigger">Maestro</a>
          <a href="/loginalumno" class="btn btn-outline btn-xl js-scroll-trigger">Alumno</a>
        </div>
          </div>
        </div>
      </div>
    </section>

    

    <footer class="footer">
      <div class="container-fluid">
        &copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="fa fa-heart" aria-hidden="true"></i> por <a href="">INNOVA Soft</a>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/new-age.min.js')}}"></script>

  </body>

</html>
