<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Agroservicios Jacquez</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingreso al administrador de página</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="usuario-Ing">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="clave-Ing">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row"></div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php

      $ingreso = new UsuariosC();
      $ingreso -> IngresoUsuariosC();

      ?>

    </form>

  </div>