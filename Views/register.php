<?php

// index inicial , es la pantalla inicial donde el user va a logearse

include('header.php');
?>
<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center pb-5">
               <!-- <h2>UTN - MAR DEL PLATA</h2> -->
               <img src="https://mdp.utn.edu.ar/wp-content/uploads/2021/02/UTN_IsoLogoBcoNeg.png" alt="" width="440" height="160" class="pt 5">
          </header>


          <script type="text/javascript">
function ConfirmCancel(){

var respuesta =  confirm("estas seguro que desea cancelar?");

if(respuesta == true){
return true;

}

else {
return false;

}

}

</script>


         <form action="<?php echo FRONT_ROOT ?>student/bringValidationRegister" method="POST" class="login-form bg-dark-alpha p-5 bg-light shadow"> 
               <div class="form-group">
                    <label for="">Ingrese un Email</label>
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Ingresar usuario" required>
               </div>


               <div class="form-group">
                    <label for=""> Ingrese una Contraseña</label>
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" required>
               </div>


               <button class="btn btn-primary btn-block btn-lg" type="submit">Aceptar</button>
              <td> <a href="student/ShowLoginView"></a> <button class="btn btn-primary btn-block btn-lg" type="cancel" onclick="return ConfirmCancel()" >Cancelar</button></td>
               
               
               
          </form>
     </div>
</main>

<?php
include('footer.php')
?>