<?php
ini_set('default_charset','UTF-8');
include_once("../ValidaCadastro.php");
session_start();

class CadastrarProduto{
  public  $SessionDados;
    public function GetVariableInputs(){
      if(isset($_SESSION['Produto']) && isset($_SESSION['Quantidade']) &&
      isset($_SESSION['Categoria']) && isset($_SESSION['Preco']) &&
      isset($_SESSION['Postar'])){
      return  $this->SessionDados = array (  
             $_SESSION['Produto'] ,
             $_SESSION['Quantidade'], 
             $_SESSION['Categoria'],
             $_SESSION['Preco'],
             $_SESSION['Postar'],
             
            );
         } else{
          die("Erro");
         }
    } 
    public function CadastraProduto(){
 
       
        $Dados = $this-> SessionDados;
        include_once("../Banco.php");
        $conecta =  $Banco -> conecta();
         $CadastraProduto = $conecta->prepare("INSERT INTO produto (Produto, Quantidade, Categoria,
          Vendidos, Preco, Postado, ImgLink ) values (:Produto, :Quantidade,:Categoria, :Vendidos, 
          :Preco,:Postado, :ImgLink )");
          $CadastraProduto->execute(array(
              ':Produto' => $Dados[0],
              ':Quantidade' => $Dados[1],
              ':Categoria' => $Dados[2],
              ':Vendidos' => "0",
              ':Preco' => $Dados[3],
              ':Postado' => $Dados[4],
              ':ImgLink' => "2"
               ));
               unset($Dados);
               header("location:../../Cadastrado.php");
    }
    
}
$Cadastrar = new CadastrarProduto();
$Cadastrar -> GetVariableInputs();
$Cadastrar -> CadastraProduto();

?>