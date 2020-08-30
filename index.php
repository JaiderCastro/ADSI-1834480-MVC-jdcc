<?php
   
     session_start();

     //date_default_timezone_set('America/Bogota');

     require_once 'modelo/database.php';
     $controller = 'user';

    if (!isset($_SESSION['iduser'])) {

      require_once "controlador/$controller.controller.php";
       $controller = ucwords($controller).'Controller';
       $controller = new $controller;

      if (isset($_REQUEST['c']) and isset($_REQUEST['a'])) {
            $email        = $_REQUEST['email'];
            $contrasenna  = $_REQUEST['contrasenna'];
            $controller->validate($email,$contrasenna);
      }
      else {
            $controller->login();
       }
         
   
        
       
         
    } else {
      
        if (!isset($_REQUEST['c']))
        {
                   
           require_once "controlador/$controller.controller.php";
           
           $controller = ucwords($controller).'Controller';
           $controller = new $controller;
           $controller->dashboard();               
           
        } else {
          // print_r($_REQUEST);
           //die;
           
           $c = Database::encryptor('decrypt', $_REQUEST['c']);
           $a = Database::encryptor('decrypt', $_REQUEST['a']);

           $controller  = strtolower($c);
           $action      = strtolower($a);
   
          //crear el controlador
           require_once "controlador/$controller.controller.php";
           $controller = ucwords($controller).'Controller';
           $controller = new $controller;
           
           //$controller->index();
   
           call_user_func(array($controller,$action ));
   
        } 
       
       
                 
   
           
   
       
       
        

     }
     

   
    


    
 
?> 