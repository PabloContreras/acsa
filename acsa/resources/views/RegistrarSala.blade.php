<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ACSA | Registro Sala</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>ACSA </b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
	<form >
  <fieldset>
    <center><legend>Ingresa datos de la sala</legend></center>
    <div class="form-group col-lg-8 col-lg-offset-2">
      <div class="form-group">
      <label>Nombre servicio</label>
      <input type="text" class="form-control" id="Nombre" placeholder="Ingresa Nombre del servicio">
      </div>

    <div class="form-group">
      <label>Tipo servicio</label>
      <input type="text" class="form-control" id="telefono" placeholder="Ingresa tipo de servicio">
    </div>
    <div class="form-group">
      <label>Cupo</label>
      <input type="tel" class="form-control" id="dir" placeholder="Ingresa cupo">
    </div>
    <center><a href="/panel" button type="submit" class="btn btn-primary">Aceptar</a>
     <a href="/panel" button type="submit" class="btn btn-primary">Regresar</a></center>
    </div>
  </fieldset>
</form>
	</div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
       <footer class="footer">
      <div class="container-fluid">
        &copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="glyphicon glyphicon-heart" aria-hidden="true"></i> por <a href="">INNOVA Soft</a>
      </div>
    </footer>
  </body>
</html>
