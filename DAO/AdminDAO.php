<?php

namespace DAO;

use DAO\IAdminDAO as IAdminDAO;
use Exception;
use Models\Admin as Admin;
use Models\Student as Student;
use DAO\StudentDAO as StudentDAO;
use DAO\Connection as Connection;

    class AdminDAO implements IAdminDAO
    {
        private $connection;
        private $tableName = "Admin_";
        private $tableName2 = "students";
        private $tableName3 = "company";

        public function __construct()
        {
            
        }


public function Add(Admin $admin){


    try
    {
        $query = "INSERT INTO ".$this->tableName." (email, passwordS,roles,nameA) 
        VALUES (:email, :passwordS, :roles, :nameA);";
        $parameters["email"] = $admin->getEmail();
        $parameters["passwordS"] = $admin->getPasword();
        $parameters["roles"] = $admin->getRole();
        $parameters["nameA"] = $admin->getName();
        


        $this->connection = Connection::GetInstance();
    
        
        $this->connection->ExecuteNonQuery($query, $parameters);
    
    }
    catch(Exception $ex)
    {
        throw $ex;
    }

}

public function GetAll()
{
    
}
        
// si existe debe retornar el admin
// o nulo en caso de no existir

public function AdminExist($email){
     try
    {

    $query = "SELECT * FROM ".$this->tableName. " WHERE email"."=".":email";


    // SELECT * FROM passwordStudent WHERE password = :password
         $parameters["email"] = $email;

        $this->connection = Connection::GetInstance();

        $this->connection->Execute($query,$parameters);
    
        return ($this->connection->Execute($query,$parameters));

    }
    catch(Exception $ex)
    {
        throw $ex;
    }


}

public function AdminExistSession($email,$password){



    try
    {

        $query = "SELECT * FROM ". $this->tableName. " WHERE email "." =".":email"." and "." passwordS". "= ".":passwordS";

        


    // SELECT * FROM passwordStudent WHERE password = :password

         $parameters["email"] = $email;
         $parameters["passwordS"] = $password;

        $this->connection = Connection::GetInstance();

        $this->connection->Execute($query,$parameters);
    
        return ($this->connection->Execute($query,$parameters));

    }
    catch(Exception $ex)
    {
        throw $ex;
    }


}

public function BringAdmin($email,$password){



    try
    {

        $query = "SELECT * FROM ". $this->tableName. " WHERE email "." =".":email"." and "." passwordS". "= ".":passwordS";

     


    // SELECT * FROM passwordStudent WHERE password = :password
    
         $parameters["email"] = $email;
         $parameters["passwordS"] = $password;

        $this->connection = Connection::GetInstance();

        $this->connection->Execute($query,$parameters);
    
        return ($this->connection->Execute($query,$parameters));

    }
    catch(Exception $ex)
    {
        throw $ex;
    }


}


    public function modifyStudentAdmin(){
        
       try{

        $parameters["studentId"]= $_POST['studentId'];
        $parameters['firstName'] = $_POST['firstName'];
        $parameters ['lastName'] = $_POST['lastName'];
        $parameters['careerId'] = $_POST['careerId'];
        $parameters['dni']= $_POST['dni'];
        $parameters['fileNumber'] = $_POST['fileNumber'];
        $parameters['gender'] = $_POST['gender'];
        $parameters['birthdate'] = $_POST['birthdate'];
        $parameters['phoneNumber']= $_POST['phoneNumber'];
        $parameters['active'] = $_POST['active'];
        $parameters['email'] = $_POST['email'];

       $query= "UPDATE FROM ".$this->tableName2." SET firstName"."=".":firstName"."and"."lastName"."=".":lastName"."and"."careerId"."=".":careerId"."and"."dni"."=".":dni"."and"."fileNumber"."=".":fileNumber".
       "and"."gender"."=".":gender"."and"."birthdate"."=".":birthdate"."="."phoneNumber"."=".":phoneNumber"."and"."active"."=".":active"."and"."email"."=".":email". " WHERE studentId"."=".":studentId";
        
       $this->connection = Connection::GetInstance();
       $this->connection->ExecuteNonQuery($query,$parameters);
       }
       catch(Exception $ex){
      throw $ex;
       }

    }


    public function removeStudentAdmin($studentId){
    try{
      
        $query=" DELETE FROM ".$this->tableName2." WHERE studentId"." = ".":studentId ";
        $parameters["studentId"]= $studentId;
        $this->connection = Connection::GetInstance();
        $this->connection->ExecuteNonQuery($query,$parameters);
    }catch(Exception $ex){
        throw $ex;
    }
    
    }


    public function removeEmpresaAdmin($idEmpresa){
        try{
          
            $query=" DELETE FROM ".$this->tableName3." WHERE idCompany"." = ".":idCompany ";
            $parameters["idCompany"]= $idEmpresa;
            $this->connection = Connection::GetInstance();
            $this->connection->ExecuteNonQuery($query,$parameters);
        }catch(Exception $ex){
            throw $ex;
        }
        
        }




    }

    

   
?>