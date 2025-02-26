<?php
  ini_set('default_charset','UTF-8'); 
class Banco_DB{
public $conn;
    public function conecta(){
        try {
     
            $conecta =  new PDO('mysql:host=localhost;dbname=sistemaadminloja', 'root', '');
              $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //  echo "conectado";
              return $conecta;
          } catch(PDOException $e) {
              
            echo 'ERROR: ' . $e->getMessage();
              // 
          }
  } 
}
$Banco = new Banco_DB();
$conecta =  $Banco -> conecta();
?>