<?php
ini_set('default_charset','UTF-8');
session_start();
include_once("PHP/Banco.php");

?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Alterar Produto</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/FormAlterar.css">


</head>
<body>

<?php  
include_once("PHP/GetAlterarProdutoURL.php");

include_once("PHP/ValidaCadastro.php");
include_once("PHP/FunctionsDB/GetAlterar.php");

?>

<main class="FormAlterar" id="FormAlterar">

<?php
   
    include_once("PHP/ShowInputsAlterar.php");
    $ShowInput -> ShowInputExcluir($DadoInput, $Url, $Dados, $DBDADOS);
  ?>
<form action="#" method="post">
  <?php  
     $ShowInput ->  ShowDadosInputProduto($DadoInput, $CadastroValidado, $Produto);
     $ShowInput ->  ShowDadosInputQuantidade($DadoInput, $CadastroValidado, $Quantidade);
     $ShowInput -> ShowDadosInputCategoria($DadoInput, $CadastroValidado, $Categoria);
     $ShowInput -> ShowDadosInputPreco($DadoInput, $CadastroValidado, $Preco);
     $ShowInput -> ShowDadosInputPostado($DadoInput, $CadastroValidado, $Postar);
     $CadastroValidado -> HeaderAlterarProduto($Produto);
     $CadastroValidado -> HeaderAlterarQuantidade($Quantidade);
     $CadastroValidado -> HeaderAlterarCategoria($Categoria);
     $CadastroValidado -> HeaderAlterarPreco($Preco);
     $CadastroValidado -> HeaderAlterarPostar($Postar);
  ?>
</form>
</main>
<?php 
?>
</body>
</html>