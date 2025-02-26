<?php
ini_set('default_charset','UTF-8');
include_once("../Banco.php");
class GetIdUrl{
    public function GetUrld(){
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
             return $_GET['id'];
        }else{
            die("error");
        }
    }
}

$UrlIdExcluir = new GetIdUrl();
$Id = $UrlIdExcluir -> GetUrld();
class DeleteProduct{
    public function Delete($Id, $conecta){

        $Delete = $conecta->prepare('DELETE FROM Produto WHERE id = :id');
        $Delete->bindParam(':id', $Id);
        $Delete->execute();
         die("Excluido, <a href='http://localhost/Projects/Tenis/Admin/Paginainicial.php'>Página Inicial</a>");

        }
}
$DropProduct = new DeleteProduct();
$DropProduct -> Delete($Id, $conecta);
