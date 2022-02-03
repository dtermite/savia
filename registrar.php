<div class="row mt-3">
              <div class="d-flex justify-content-center">
                  <h4 class="mt-5 mb-3 p-2"><p class="text-center bg-success p-2">Ingresa tus datos antes de enviar las respuestas</p></h4>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" id="nombreyapellido" name="nombre" placeholder="Nombre y Apellido" required>   
             </div>
             <div class="col-md-6">
               <input type="email" class="form-control" id="mail" name="email" placeholder="Correo electronico" required>
             </div>
            </div>            
            <br>

            <div class="row">
              <div class="d-grid gap-2 mb-5">
                <button class="btn btn-primary" type="submit" name="enviar">Enviar respuestas</button>  
              </div>  
            </div>

          </form>
          <!--Aca empieza la programacion-->      
          <?php require_once 'respuestas.php';?>
