<?php
if($_SESSION["rol"] != "Administrador"){

  echo '<script>
  
  window.location = "inicio";

  </script>';

  return;
}
?>
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        Gestor de usuarios
    </h1>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuarios">Crear usuario</button>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-hover table-striped TBorrar">
              <thead>
                  <tr>
                      <th>N°</th>
                      <th>Nombre del usuario</th>
                      <th>Contraseña</th>
                      <th>Foto</th>
                      <th>Rol</th>
                      <th>Editar / Eliminar</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    $verU = new UsuariosC();
                    $verU ->VerUsuariosC();

                    $item = null;
                    $valor = null;

                    $editarU = UsuariosC::EUsuariosC($item, $valor);

                  ?>

              </tbody>
          </table>

        </div>
        <!-- /.box-body -->
        
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

<!-- Crear usuarios -->

<div class="modal fade" role="dialog" id="CrearUsuarios">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" role="form" enctype="multipart/form-data">

        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <h2>Nombre de usuario</h2>
              <input type="text" class="form-control input-lg" name="usuarioN" required></input>
            </div>
            <div class="form-group">
              <h2>Contraseña</h2>
              <input type="password" class="form-control input-lg" name="claveN" required></input>
            </div>
            <div class="form-group">
              <h2>Seleccionar el rol:</h2>
              <select class="form-control input-lg" name="rolN">
              <option>Seleccionar rol...</option>
              <option value="Administrador">Administrador</option>
              <option value="Editor de contenido">Editor de contenido</option>
              <option value="Marketing">Marketing</option>
              </select>
            </div>
            <div class="form-group">
              <h2>Foto:</h2>
              <input type="file" name="fotoN">
                <p class="help-block">Maximo 200 MB</p>
              </input>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Crear usuario</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
        <?php
          $crearU = new UsuariosC();
          $crearU -> CrearUsuariosC();
        ?>
      </form>
    </div>
  </div>
</div>

<?php
$borrarU = new UsuariosC();
$borrarU -> BorrarUsuariosC();
?>

<!-- Editar Usuario -->

<div class="modal fade" role="dialog" id="EditarU">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" role="form" enctype="multipart/form-data">

        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <h2>Nombre de usuario</h2>
              <input type="text" class="form-control input-lg" id="usuarioE" name="usuarioE" required>
              <input type="hidden" id="Uid" name="Uid"></input>
            </div>
            <div class="form-group">
              <h2>Contraseña</h2>
              <input type="text" class="form-control input-lg" id="claveE" name="claveE" required>
            </div>
            <div class="form-group">
              <h2>Seleccionar el rol:</h2>
              <select class="form-control input-lg" name="rolE">
              <option id="rolE"></option>
              <option value="Administrador">Administrador</option>
              <option value="Editor de contenido">Editor de contenido</option>
              <option value="Marketing">Marketing</option>
              </select>
            </div>
            <div class="form-group">
              <h2>Foto:</h2>
              <input type="file"  id="fotoE" name="fotoE">
                <p class="help-block">Maximo 200 MB</p>
                <img src="Vistas/img/usuarios/defecto.png" class="img-thumbnail visor" width="100px;">
                <input type="hidden" name="FotoA" id="FotoA">
              </input>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar cambios</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        </div>
        <?php
         
         $actualizarU = new UsuariosC();
         $actualizarU -> ActualizarUsuariosC();
         
        ?>
      </form>
    </div>
  </div>
</div>