<?php

     //Listado de usuarios actuales, SOLO ADMINISTRADOR PUEDE VERLO

    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Alumnos</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Id</th>
                         <th>Apellido</th>
                         <th>Nombre</th>
                         <th>Id de carrera</th>
                         <th>Dni</th>
                         <th>Numero de archivo</th>
                         <th>Genero</th>
                         <th>Fecha nacimiento</th>
                         <th>Numero telefonico</th>
                         <th>Activo</th>
                         <th>Email</th>

                    </thead>
                    <tbody>
                         <?php
                              foreach($studentList as $student)
                              {
                                   ?>
                                        <tr> <td> <a href="<?php echo FRONT_ROOT?>Admin/StudentValidationAdmin?studentId=<?php echo $student->getStudentId()?>"><?php echo $student->getStudentId() ?></a> </td>
                                             <td><?php echo $student->getFirstName() ?></td>
                                             <td><?php echo $student->getLastName() ?></td>
                                             <td><?php echo $student->getCareerId() ?></td>
                                             <td><?php echo $student->getDni() ?></td>
                                             <td><?php echo $student->getFileNumber() ?></td>
                                             <td><?php echo $student->getGender() ?></td>
                                             <td><?php echo $student->getBirthDate() ?></td>
                                             <td><?php echo $student->getPhoneNumber() ?></td>
                                             <td><?php echo $student->getActive() ?></td>
                                             <td><?php echo $student->getEmail() ?></td>


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