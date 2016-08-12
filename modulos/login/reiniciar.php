<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reiniciar contraseña</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../componentes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../componentes/datepicker/css/bootstrap-datepicker.min.css">
    <script src="../../componentes/files/jquery.js"></script>
    <script src="../../componentes/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../componentes/datepicker/js/bootstrap-datepicker.min.js" ></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Iniciar</h1>
            <form class="form">
              <input type="text" class="form-control" placeholder="Email" required autofocus>
              <br>
              <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" placeholder="Fecha de nacimiento" readonly, required autofocus/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
              <script>
                $('#datetimepicker1').datepicker({
                  format: 'mm/dd/yyyy',
                });
              </script>
              <br>
              <input type="text" class="form-control" placeholder="Nueva contraseña" required autofocus>
              <br>
              <input type="text" class="form-control" placeholder="Verificar contraseña" required autofocus>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Cambiar contraseña</button>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
