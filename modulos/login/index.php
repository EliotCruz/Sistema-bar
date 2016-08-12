<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="../../componentes/bootstrap/css/bootstrap.min.css">
    <script src="../../componentes/files/jquery.js"></script>
    <script src="../../componentes/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Iniciar</h1>
            <form class="form">
              <input type="text" class="form-control" placeholder="Email" required autofocus>
              <br>
              <input type="password" class="form-control" placeholder="Password" required>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
              <br>
              <a href="reiniciar.php" class="pull-right need-help">Olvide contraseña </a>
              <span class="clearfix"></span>
            </form>
        </div>
      </div>
    </div>

  </body>
</html>
