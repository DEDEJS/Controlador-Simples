<?php
ini_set('default_charset','UTF-8');
include_once("GetInput.php");
$Email = $GetInputs -> GetEmail();
$Senha = $GetInputs -> GetSenha();
$Nome = $GetInputs -> GetNome();
class Valida{
   public $EmailValidado;
   public $SenhaValidado;
   public $NomeValidado;
   public $LoginValidado;
   public function ValidaEmail($Email){
     if(strlen($Email)<= 0){
         echo "Email Inválido";
     }else if(strlen($Email)>= 65){
        echo "Email Inválido";
      } else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
         echo "Email Inválido";
     }else{
        return $this-> EmailValidado = true;
     }
   }
   public function ValidaSenha($Senha){
    if(strlen($Senha)<= 0){
        echo "Senha Inválida";
    }else if(strlen($Senha) >= 65){
        echo "Senha Inválida";
    }else{
        return $this-> SenhaValidado = true;
    }
   }
   public function ValidaNome($Nome){
    if(strlen($Nome)<= 0){
       echo "Nome Inválido";
    }else if(strlen($Nome)>= 21){
        echo "Nome Inválido";
    }else{
        return $this-> NomeValidado = true;
    }
   }
   public function LoginValidado(){
    if($this-> EmailValidado == true && $this-> SenhaValidado == true){
     $this->LoginValidado = true;
    }
   }
   public function CadastroValidado(){
    if($this-> EmailValidado == true && $this-> SenhaValidado == true && $this-> NomeValidado == true){
        
  }
   }
   public function HeaderLogin(){
    if($this->LoginValidado == true){
        echo "sim";
        header("location:ADMIN/PHP/");
        die();
    }
   }
}
$Validado = new Valida();
?>