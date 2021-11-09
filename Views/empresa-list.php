<?php

// Archivo donde el administrador puede listar las empresas

require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de empresas</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Id de empresa</th>
                          <th>Nombre</th>
                         
                    </thead>
                    <tbody>
                         <?php
                              foreach($empresaList as $empresa)
                              {
                                   ?>
                                        <tr>
                                        <td> <a href="<?php echo FRONT_ROOT?>Empresa/empresaValidationAdmin?idEmpresa=<?php echo $empresa->getIdEmpresa()?>"><?php echo $empresa->getIdEmpresa() ?></a> </td>
                                        <td><?php echo $empresa->getName() ?></td>
                                       </tr>
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>
