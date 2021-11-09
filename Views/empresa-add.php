<?php

 // Archivo donde se agregan las empresas, SOLO ADMINISTRADOR PUEDE ACCEDER

require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar empresa</h2>
               <form action="<?php echo FRONT_ROOT ?>Empresa/Add" method="post" class="bg-light-alpha p-5">
                    <div class="row">     
                    <!-- <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Id</label>
                                   <input type="text" name="idEmpresa" value="" class="form-control">
                              </div>
                         </div>                     -->
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="name" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" name="email" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Contraseña</label>
                                   <input type="text" name="pasword" value="" class="form-control">
                              </div>
                         </div>
                        
                        
                         <!-- <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Descripcion</label>
                                   <input type="text" name="description" value="" class="form-control">
                              </div>
                         </div> -->
                         
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>