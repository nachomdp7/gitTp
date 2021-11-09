<?php

namespace Controllers;

use DAO\AdminDAO;
use DAO\EmpresaDAO;
use DAO\StudentDAO as StudentDAO;
use Exception;
use Models\Student as Student;   
use Models\Admin;

class AdminController{


    private $AdminDAO;
    private $empresaDAO;
    private $studentDAO;


    public function __construct()
    {
        $this->AdminDAO = new AdminDAO();
        $this->empresaDAO = new EmpresaDAO();
        $this->studentDAO = new StudentDAO();
        
    }


    public function showPerfilAdmin($admin){

        require_once(VIEWS_PATH."perfil-admin.php");

    }



    public function RegisterAdmin2()
    {
        require_once(VIEWS_PATH."registerAdmin.php");
    }


    public function showModifyStudent($student){
        $studentList= $this->studentDAO->GetAll();

        require_once(VIEWS_PATH."student-mod.php");
    }

   public function showPerfilStudent($student)
   {
     require_once(VIEWS_PATH."perfil-Student-Admin.php");
   }

   public function modStudentAdmin($studentId,$firstName,$lastName,$careerId,$dni,$fileNumber,$gender,$birthdate,$phoneNumber,$active,$email){
       try{
        $studentList=$this->studentDAO->GetAll();
        $cant = count($studentList);
        $i = 0;
        $flag = false;
        while($i < $cant && $flag == false){
        if($studentId== $studentList[$i]->getStudentId()){
        $flag = true;
        $studentId= $_POST['studentId'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $careerId = $_POST['careerId'];
        $dni= $_POST['dni'];
        $fileNumber = $_POST['fileNumber'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $phoneNumber= $_POST['phoneNumber'];
        $active = $_POST['active'];
        $email= $_POST['email'];
        $this->AdminDAO->modifyStudentAdmin($studentId,$firstName,$lastName,$careerId,$dni,$fileNumber,$gender,$birthdate,$phoneNumber,$active,$email);
    }
    $i++;
}
       }catch(Exception $ex){
           throw $ex;
       }
    }




    public function studentValidationAdmin($studentId){
     
        $studentList = $this->studentDAO->GetAll(); // tengo los 200 alumnos cargados en esta lista, comprobado!
        $cant = count($studentList);

        for($i=0 ; $i<$cant; $i++) {

            if($studentList[$i]->getStudentId() == $studentId){
                $student = $studentList[$i];
                $this->showPerfilStudent($student); // si es correcto me lleva al perfil del student
            }
        
        }
    }

    public function studentModAdmin($studentId){

        $studentList = $this->studentDAO->GetAll();
       // tengo los 200 alumnos cargados en esta lista, comprobado!
        $cant = count($studentList);

            for($i=0 ; $i<$cant; $i++) {

                if($studentList[$i]->getStudentId() == $studentId){
                    $student = $studentList[$i];
                    $this->showModifyStudent($student);
                }
            }
    }







//esta funcion lo que hace es buscar si existe ese admin en la base de datos y de ser asi inicia la session

public function AdminValidation($email,$password){


    if($this->AdminDAO->AdminExistSession($email,$password)){


        return true;

    }
    else{
        return false;
    }

  

}





    public function registerAdmin($email,$password,$name){
        

        if($this->empresaDAO->CompanyExist($email)){

            echo " ese mail lo tiene una empresa<br>";

        }

        else if($this->studentDAO->studentExistRegister($email)){

            echo " ese mail lo tiene un estudiante<br>";
        }
 
        else{

            if($this->AdminDAO->AdminExist($email) == false){


                $email = $_POST['email'];
                $password = $_POST['password'];
                $name = $_POST['name'];
        
                $Admin = new Admin();
        
                $Admin->setEmail($email);
                $Admin->setPasword($password);
                $Admin->setName($name);
                $Admin->setRole('Admin');
                
        
                $this->AdminDAO->add($Admin);
        
                    $this->showPerfilAdmin($Admin);  
        
        
        
        
                }
        
                else{
                    echo "ya existe el admin<br>";
                }

        }

        

    }

    public function removeStudent($studentId){

        $studentList = $this->studentDAO->GetAll();

        $cant = count($studentList);
        $i = 0;
        $flag = false;
        while($i < $cant && $flag == false){

            if($studentList[$i]->getStudentId() == $studentId){
                $flag = true;
                $aux = $studentList[$i]->getStudentId();
                $this->AdminDAO->removeStudentAdmin($aux);
            }
            $i++;
        }
        $this->studentDAO->GetAll();

    }





}


?>