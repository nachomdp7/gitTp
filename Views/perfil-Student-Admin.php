<!DOCTYPE html>

    <!-- Archivo donde el administrador puede seleccionar la opcion de modificar la empresa, eliminarla o ver sus ofertas laborales para luego una vez ingresado en ese archivo
poder eliminar o modificar las ofertas laborales de dicha empresa -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark mb-5">
        <a class="navbar-brand" href="<?php echo FRONT_ROOT ?>Student/ShowLoginView"> <strong>Cerrar Sesion</strong> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
          </ul>
            <span class="navbar-text">
                <img src="https://mdp.utn.edu.ar/wp-content/uploads/2021/02/UTN_IsoLogoBcoNeg.png" alt="" width="140" height="60"> 
            </span>
        </div>
    </nav>
    


    <div class="container justify-content-center align-item-center shadow p-3 mb-5 bg-white rounded">
        <div class="row"></div>
        <div class="col-md-8 offset-md-2">
           
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Datos del estudiante</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="<?php echo FRONT_ROOT?> poner redireccionamiento de ofertas laborales" role="tab"
                        aria-controls="profile" aria-selected="false">Ofertas Laborales</a>
                </li>
            </ul>



            <div class="tab-content" id="myTabContent">
        
                <div class="row  pt-4"> 
                    <div class="col-4">
                      
                        <img class="img-tumbnaill"src="https://cdn2.iconfinder.com/data/icons/website-icons/512/User_Avatar-512.png"alt=""width="150px"height="150px">
                        <p><a class="btn btn-primary btn-sm col-12 " href="<?php echo FRONT_ROOT?>Admin/studentModAdmin?studentId=<?php echo $student->getStudentId()?>">Modificar &raquo;</a></p>
                        <p><a class="btn btn-primary btn-sm col-12 " href="<?php echo FRONT_ROOT?>Admin/removeStudent?studentId=<?php echo $student->getStudentId()?>">Eliminar &raquo;</a></p>
                    </div>
                    <div class="col-8">
                      
                         <div class="form-group row">
                            <label for="nombre" class= "col-4">Id</label>
                            <div class="col-8"> 
                            <label for=""> <?php echo $student->getStudentId() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Nombre</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getFirstName() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Apellido</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getLastName() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Id de carrera</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getCareerId() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">DNI</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getDni() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Numero de archivo</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getFileNumber() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Genero</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getGender() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Fecha de nacimiento</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getBirthDate() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Numero telefonico</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getPhoneNumber() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Esta activo?</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getActive() ?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-4">Email</label>
                            <div class="col-8">
                            <label for=""><?php echo $student->getEmail() ?></label>
                            </div>
                        </div> 

                       

                        <!-- <div class="form-group text center">
                            <button class="btn btn-info">Actualizar</button>
                            </div>
                      
                    </div>





                </div>


                </div>





                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    
    
    
        </body>

</html>