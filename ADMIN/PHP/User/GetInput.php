<?php
ini_set('default_charset','UTF-8');
class GetInput{
    
    public function GetEmail(){
        if(isset($_POST['EmailLogin'])){
            return htmlspecialchars($_POST['EmailLogin']);
        }
    }
    public function GetSenha(){
        if(isset($_POST['SenhaLogin'])){
            return htmlspecialchars($_POST['SenhaLogin']);
        }
    }
    public function GetNome(){
        if(isset($_POST['Nome'])){
            return htmlspecialchars($_POST['Nome']);
        }
    }
 
}
$GetInputs = new GetInput();