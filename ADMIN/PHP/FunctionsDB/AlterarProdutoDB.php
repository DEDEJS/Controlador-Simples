<?php
ini_set('default_charset','UTF-8');
include_once("../Banco.php");
include_once("../ValidaCadastro.php");
session_start();
class GetSessionAlterar{
  public function GetSessionAlterarProduto(){
    if(isset($_SESSION['ProdutoAlterar']) && isset($_SESSION['IDAlterarProduto'])){   
      return true;
       }
 }
 public function GetSessionAlterarQuantidade(){
  if(isset($_SESSION['QuantidadeAlterar']) && isset($_SESSION['IdAlterarQuantidade'])){   
    return true;
     }
 }
 public function GetSessionAlterarCategoria(){
  if(isset($_SESSION['CategoriaAlterar']) && isset($_SESSION['IdAlterarCategoria'])){   
    return true;
     }
 }
 public function GetSessionAlterarPreco(){
  if(isset($_SESSION['PrecoAlterar']) && isset($_SESSION['IdAlterarPreco'])){   
    return true;
     }
 }
 public function GetSessionAlterarPostar(){
  if(isset($_SESSION['PostarAlterar']) && isset($_SESSION['IdAlterarPostar'])){   
    return true;
     }
 }
}

$GetSessionsAlterar = new GetSessionAlterar();
$GetAlterarProduto = $GetSessionsAlterar -> GetSessionAlterarProduto();
$GetAlterarQuantidade = $GetSessionsAlterar -> GetSessionAlterarQuantidade();
$GetAlterarCategoria = $GetSessionsAlterar -> GetSessionAlterarCategoria();
$GetAlterarPreco = $GetSessionsAlterar -> GetSessionAlterarPreco();
$GetAlterarPostar = $GetSessionsAlterar -> GetSessionAlterarPostar(); 
class AlterarProduto{
 
  public function AlterarProduto($conecta, $GetAlterarProduto){
    if($GetAlterarProduto == true) {
      $AlteraProduto = $conecta->prepare('UPDATE produto SET Produto = :Produto WHERE id = :id');
      $AlteraProduto->execute(array(
        ':id'   => $_SESSION['IDAlterarProduto'],
        ':Produto' => $_SESSION['ProdutoAlterar']
      ));
    echo "alterado";
    unset($_SESSION['IDAlterar'], $_SESSION['ProdutoAlterar']);
    }
}
public function AlterarQuantidade($conecta, $GetAlterarQuantidade){
  if($GetAlterarQuantidade == true){
    $AlteraQuantidade = $conecta->prepare('UPDATE produto SET Quantidade = :Quantidade WHERE id = :id');
    $AlteraQuantidade->execute(array(
      ':id'   => $_SESSION['IdAlterarQuantidade'],
      ':Quantidade' => $_SESSION['QuantidadeAlterar']
    ));
  echo "alterado";
  unset($_SESSION['QuantidadeAlterar'], $_SESSION['IdAlterarQuantidade']);
  }
}
 public function AlterarCategoria($conecta, $GetAlterarCategoria){
  if($GetAlterarCategoria == true){
    $AlteraCategoria = $conecta->prepare('UPDATE produto SET Categoria = :Categoria WHERE id = :id');
    $AlteraCategoria->execute(array(
      ':id'   => $_SESSION['IdAlterarCategoria'],
      ':Categoria' => $_SESSION['CategoriaAlterar']
    ));
  echo "alterado";
  unset($_SESSION['CategoriaAlterar'], $_SESSION['IdAlterarCategoria']);
  }
 }
 public function AlterarPreco($conecta, $GetAlterarPreco){
  if($GetAlterarPreco == true){
    $AlteraPreco = $conecta->prepare('UPDATE produto SET Preco = :Preco WHERE id = :id');
    $AlteraPreco->execute(array(
      ':id'   => $_SESSION['IdAlterarPreco'],
      ':Preco' => $_SESSION['PrecoAlterar']
    ));
  echo "alterado";
  unset($_SESSION['PrecoAlterar'], $_SESSION['IdAlterarPreco']);
  }
 }  
 public function AlterarPostar($conecta, $GetAlterarPostar){
  if($GetAlterarPostar == true){
    $AlteraPostar = $conecta->prepare('UPDATE produto SET Postado = :Postado WHERE id = :id');
    $AlteraPostar->execute(array(
      ':id'   => $_SESSION['IdAlterarPostar'],
      ':Postado' => $_SESSION['PostarAlterar']
    ));
  echo "alterado";
  unset($_SESSION['PostarAlterar'], $_SESSION['IdAlterarPostar']);
  }else{
    echo "erro"; 
  }
 }  
}
$Alterar = new AlterarProduto();
$Alterar -> AlterarProduto($conecta, $GetAlterarProduto);
$Alterar -> AlterarQuantidade($conecta, $GetAlterarQuantidade);
$Alterar -> AlterarCategoria($conecta, $GetAlterarCategoria);
$Alterar -> AlterarPreco($conecta, $GetAlterarPreco);
$Alterar -> AlterarPostar($conecta, $GetAlterarPostar);

?>