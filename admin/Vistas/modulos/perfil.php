<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Gestor de perfil
    </h1>

    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
      
        <div class="box-body">
          <table class="table table-bordered table-hover table-striped TBorrar">
              <thead>
                  <tr>
                      <th>Nombre del usuario</th>
                      <th>Contraseña</th>
                      <th>Foto</th>
                      <th>Editar</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    $perfil = new UsuariosC();
                    $perfil-> VerPerfilC();
                    
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
            
            <div class="form-group" style="display: none;">
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