<?php

require_once 'modelo/user.php';

class UserController
 {  
    private $model;

    public function __CONSTRUCT()
    {

        $this->model=new User();
    }

    public function dashboard()
    {
    

        require_once 'vista/header.php';
        require_once 'vista/message.php';
        require_once 'vista/footer.php';
    }

    public function index()
    {  
        /*$c = Database::encryptor('encrypt','user');
        $aEdit= Database::encryptor('encrypt','edit');

         $aIndex= Database::encryptor('encrypt','index');
         $aLogout= Database::encryptor('encrypt','logout');
         */
        $rows=$this->model->index();

        require_once 'vista/header.php';
        require_once 'vista/message.php';
        require_once 'vista/user/index.php';
        require_once 'vista/footer.php';
    }


    public function delete(){
       //print_r($_REQUEST); 
       //die;
       

        $this->model->delete($_REQUEST['id']);
        $err = 2;
        $msg = '¡Usuario Eliminado !';

        header ("location:index.php?c=".Database::encryptor('encrypt','user')."user&a=".Database::encryptor('encrypt','index')."&m=".$msg.'&e='.$err);

    }

    public function edit() {
        

        if (!isset($_REQUEST['id'])) {
            $level1 = null;
            $level2 = null;

            $id    = null;
            $name  = null;
            $email = null;
            $level = null;

            $button = 'Crear Usuario';
        } else {
            
            $id     = $_REQUEST['id'];
            $row    = $this->model->view($id);
            $name   = $row->name;
            $email  = $row->email;
            $level  = $row->level;
            
            if ($level == 1) {

                $level1 = 'select';
                $level2 = null;
            } else {
              
                $level2 = 'select';
                $level1 = null;
            }
            
            $button = 'Actualizar Usuario';  
        }
     
        require_once 'vista/header.php';
        require_once 'vista/user/edit.php';
        require_once 'vista/footer.php';
    }

    public function crud() {
      
        //print_r($_REQUEST);
        //die;

        $id    = $_REQUEST['id'];
        $name  = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $level = $_REQUEST['level'];
       

        if ($id == null) {
           /* $lastId=*/ $this->model->create($name,$email,$level);
           // mkdir('documents/'.$lastId,0700);

            $msg = '¡Usuario Creado Con Exito!';
            header ("location:index.php?c=user&a=index&m=".$msg.'&e='.$err);
            $err = 0;
 
        } else {
            $this->model->update($name,$email,$level,$id);
            $msg = '¡Usuario Actualizado Con Exito!';
            $err = 0;
            
        }
        header ("location:index.php?c=".Database::encryptor('encrypt','user')."user&a=".Database::encryptor('encrypt','index')."&m=".$msg.'&e='.$err);

        
          

    } 

    public function login()
    {
        require_once 'vista/message.php';
        require_once 'vista/user/login.php';
        
    }

    public function validate($email,$contrasenna)
    {  
        $msg = 'Datos Errados o Inexistentes';
        $err = 1;

        $row = $this->model->validate($email,$contrasenna);

         
        
     
         if ($row != false) {
            //$this->model->lastAccess($row->id); 

            $_SESSION['iduser'] = $row->id;
            $_SESSION['name']   = $row->name;
             
            $msg = 'BIENVENID@';
            $err = 0 ;
            
        } 
        header ("location: index.php?&m='.$msg.'&e='.$err");
        
       
        
    } 

        

   

   

    public function logout () {

        $_SESSION = array();
        
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(),  '', time() - 42000,
            $params["path"], $params ["domain"],
            $params["secure"], $params ["httponly"]
        );


        }
        session_destroy();
        header("location: index.php"); 
 

    }

    public function upload() {
     
        require_once 'vista/header.php';
        require_once 'vista/message.php';
        require_once 'vista/user/upload.php';
        require_once 'vista/footer.php';
     
    }

    public function uploadFile()
    {
        $err = 0;
        $msg = 'Documento Subido';

        $starget_dir = "documents/";
        
        move_uploaded_file($_FILES  ["file"]["tmp_name"],$starget_dir.$_FILES['file'] ['name']);
        $nombre = $_FILES['file'] ['name'];

        header ("location:index.php?c=".Database::encryptor('encrypt','user')."user&a=".Database::encryptor('encrypt','index')."&m=".$msg.'&e='.$err);   
    }


}


?>