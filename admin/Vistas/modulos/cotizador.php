<div class="content-wrapper">

    <section class="content-header">
      <h1>
       Cotizador
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearImagen">Crear Imagen</button>
        
        </div>
        <div class="box-body">
         
          <table class="table table-bordered table-hover table-striped TB">
              
            <thead>
              
              <tr>
                
                <th>N°</th>
                <th>Imagen</th>
                <th>Titulo</th>
                <th>Precio Contado</th>
                <th>Precio Crédito</th>
                <th>Orden</th>
                <th>Editar / Eliminar</th>

              </tr>

            </thead>

            <tbody>

              <?php

                $item = null;
                $valor = null;

                $verT = CotizadorC::VerCotizadorC($item, $valor);

                foreach ($verC as $key => $value) {
                
                    echo ' <tr>
                            <td>'.($key+1).'</td>
    
                            <td><img src="'.$value["imagen"].'" class="img-thumbnail" width="200px"></td>
    
                            <td>'.$value["titulo"].'</td>
    
                            <td>'.$value["precio_contado"].'</td>
    
                            <td>'.$value["precio_credito"].'</td>
    
                            <td><h1>'.$value["orden"].'</h1></td>
    
                            <td>
                              <div class="btn-group">
                                
                                <button class="btn btn-success EditarTractor" Tid="'.$value["id"].'" 
                                data-toggle="modal" data-target="#EditarTractor"><i class="fa fa-pencil"></i></button>
    
                                <button class="btn btn-danger BorrarTractor" Tid="'.$value["id"].'" 
                                Timagen="'.$value["imagen"].'"><i class="fa fa-times"></i></button>
    
                              </div>
                            </td>
    
                          </tr>';
    
                  }

              ?>

            </tbody>

          </table>

        </div>
        <!-- /.box-body -->
      
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>




  <!-- Crear Slide -->
  <div class="modal fade" role="dialog" id="CrearImagen">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form method="post" role="form" enctype="multipart/form-data">


          
          <div class="modal-body">
            
           <div class="box-body">
             
            <div class="form-group">
              
              <h2>Título:</h2>

              <input type="text" class="form-control input-lg" name="tituloN" required>

            </div>

            <div class="form-group">
              
              <h2>Precio contado:</h2>

              <input type="text" class="form-control input-lg" name="precio_contadoN" required>

            </div>

            <div class="form-group">
              
              <h2>Precio credito:</h2>

              <input type="text" class="form-control input-lg" name="precio_creditoN" required>

            </div>


             <div class="form-group">
              
              <h2>Orden:</h2>

              <input type="text" class="form-control input-lg" name="ordenN">

            </div>

            <div class="form-group">
              
              <h2>Imagen:</h2>

              <input type="file" name="imagenN">

              <p class="help-block">peso máximo permitido 200 MB</p>

            </div>

           </div> 

          </div>


          <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary">Crear</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

          </div>

          <?php

            $crearC = new CotizadorC();
            $crearC -> CrearCotizadorC();

          ?>

        </form>

      </div>

    </div>

  </div>


<div class="modal fade" role="dialog" id="EditarTractor">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form method="post" role="form" enctype="multipart/form-data">


          <!-- Modal Editar -->
          <div class="modal-body">
            
           <div class="box-body">
             
            <div class="form-group">
              
              <h2>Titulo:</h2>

              <input type="text" class="form-control input-lg" id="tituloE" name="tituloE" required>

              <input type="hidden" id="Sid" name="Sid">

            </div>

            <div class="form-group">
              
              <h2>Precio contado:</h2>

              <input type="text" class="form-control input-lg" id="precio_contadoE" name="precio_contadoE" required>

            </div>

            <div class="form-group">
              
              <h2>Precio credito:</h2>

              <input type="text" class="form-control input-lg" id="precio_creditoE" name="precio_creditoE" required>

            </div>

            <div class="form-group">
              
              <h2>Orden:</h2>

              <input type="text" class="form-control input-lg" id="ordenE" name="ordenE" required>

            </div>

            <div class="form-group">
              
              <h2>Imagen:</h2>

              <input type="file" id="imagenE" name="imagenE">

              <p class="help-block">peso máximo permitido 200 MB</p>

              <img src="Vistas/img/usuarios/default.png" class="img-thumbnail visor" width="300px;"> 

              <input type="hidden" name="imagenA" id="imagenA">

            </div>

           </div> 

          </div>


          <div class="modal-footer">
            
            <button type="submit" class="btn btn-success">Guardar Cambios</button>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>

          </div>

          <?php

            $actualizarC = new CotizadorC();
            $actualizarC = ActualizarCotizadorC();

          ?>

        </form>

      </div>

    </div>

  </div>


  <?php

    $borrarC = new CotizadorC();
    $borrarC -> BorrarCotizadorC();


  ?>