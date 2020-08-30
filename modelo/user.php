<?php

  class User
  {

    private $PDO;
    
    public $id;
    public $name;
    public $email;
    public $contrasenna;
    public $level;
    public $active;
    public $lastAccess;
    public $session;
    public $avatar;
    public $timeStamp;

    public function __CONSTRUCT() {

        try {
            $this->PDO=Database::startup();
        } catch (Exception $th) {

            die ($th->getMessage());
        }
    }
     
    public function index(){

        try {
            $con = $this->PDO->prepare("SELECT * FROM usuarios ORDER BY name") ;
            $con->execute();

             return $con->fetchAll( PDO::FETCH_OBJ); 

        
        } catch (Exception $th)
         {

        die ($th->getMessage() );
         }
    } 


    public function delete($id) {

       try {
        $con=$this->PDO->prepare("DELETE FROM usuarios WHERE id = ?");
        $con->execute(array($id));
        return true;

       } catch (Exception $th) {
           die ($th->getMessage());
       }
    }
    
    public function create($name,$email,$level) {
        try {
            $con = $this->PDO->prepare("INSERT INTO usuarios (name,email,level) VALUES (?,?,?)") ;
            $con->execute(array($name,$email,$level));
            
         return true;

             //return $con->lastInsertId();


           

        
        } catch (Exception $th)
         {

        die ($th->getMessage() );
         }
         
        
    }

    public function view($id) {
        
        $con=$this->PDO->prepare("SELECT * FROM usuarios WHERE id = ?") ;
        $con->execute(array($id));

        return $con->fetch( PDO::FETCH_OBJ); 

    }

    public function update($name,$email,$level,$id) {
        try {
            $con=$this->PDO->prepare("UPDATE  usuarios  SET name = ?,email = ?, level = ? WHERE id = ?") ;
            $con->execute(array($name,$email,$level,$id));

             return true;

        
        } catch (Exception $th)
         {

        die ($th->getMessage() );
         }
        
    }

    public function validate($email,$contrasenna) {
     
        $con=$this->PDO->prepare("SELECT * FROM usuarios WHERE email = ? AND contrasenna = ?") ;
        $con->execute(array($email,$contrasenna));

        if ($con->rowCount() > 0 ) {
            return $con->fetch(PDO::FETCH_OBJ );
        } else {
            return false;
        }
        

    }

    
  }

?>