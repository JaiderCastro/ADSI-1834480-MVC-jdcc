<?php

class Database
{

    public static function startup()
    {
        

        $PDO=new PDO ("mysql:host=localhost;dbname=usuarios_mvc;charset=utf8", 'root', '');
        $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $PDO;   
    } 

    public static function encryptor($action, $string) {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        /** cambiar el valor  $secret_key */
        $secret_key = 'MiguelRomeroP';
        /** Cambiar el valor $secret_iv */
        $secret_iv = '1234!#$%abcd';

        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if( $action == 'encrypt' ) {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        }
        else if( $action == 'decrypt' ){
            $output = openssl_decrypt(base64_decode($string),
        $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }

    
}


?>