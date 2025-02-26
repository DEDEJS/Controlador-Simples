<?php
ini_set('default_charset','UTF-8');
session_start();
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Alterar Produto</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/tabela.css">
<link rel="stylesheet" type="text/css" href="css/FormAlterar.css">
<link rel="stylesheet" type="text/css" href="../css/Cards.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">

<script src="JS/Form.js"></script>

</head>
<body>
<header>
<nav>
<img width="50" height="50" src="https://img.icons8.com/ios/50/menu--v1.png">
 <ul>
  <li><a href="Paginainicial.php" title="Página Inicial">Página Inicial</a></li>
  <li><a href="Produtos.php" title="Produtos">Produtos</a></li>
  <li><a href="estoque.php" title="Produtos" class="EstoqueNav">Estoque</a></li>
  <li><a href="CadastrarProduto.php" title="Cadastrar Produtos">Cadastrar Produtos</a></li>
 </ul>
</nav>
</header>
<?php  
include_once("PHP/Banco.php");
include_once("PHP/FunctionsDB/GetAlterar.php");

include_once("PHP/ValidaCadastro.php");

?>
<section class="Tabela">
<table>
<tr>
    <th ><a href="AlterarProduto.php?id=<?php $Dados-> GetProdutoId($DBDADOS); ?>&Dados=Produto" target="_blank" title="Produto" id="THPRODUTO">Produto</a></th>        
    <th ><a href="AlterarProduto.php?id=<?php $Dados-> GetProdutoId($DBDADOS); ?>&Dados=Quantidade" target="_blank" title="Quantidade" id="THQUANTIDADE" >Quantidade</a></th>
    <th ><a href="AlterarProduto.php?id=<?php $Dados-> GetProdutoId($DBDADOS); ?>&Dados=Categoria" target="_blank" title="Categoria" id="THCATEGORIA" >Categoria</a></th>
    <th ><a href="AlterarProduto.php?id=<?php $Dados-> GetProdutoId($DBDADOS); ?>&Dados=Preco" target="_blank" title="Preço" id="THPRECO">Preço</a></th>
    <th ><a href="AlterarProduto.php?id=<?php $Dados-> GetProdutoId($DBDADOS); ?>&Dados=Postado" target="_blank" title="Postado" id="POSTADO">Postado</a></th>
    <th ><a href="AlterarProduto.php?id=<?php $Dados-> GetProdutoId($DBDADOS); ?>&Dados=Excluir" target="_blank" title="Excluir" id="Excluir">Excluir</a></th>
</tr>
<tr>
   <td id="TDPRODUTO"><?php $Dados-> GetProdutoDB($DBDADOS); ?></td>
   <td id="TDQUANTIDADE" ><?php $Dados-> GetQuantidadeDB($DBDADOS); ?></td>
   <td id="TDCATEGORIA"><?php $Dados-> GetCategoriaDB($DBDADOS); ?></td>
   <td id="TDPRECO"><?php $Dados-> GetPrecoDB($DBDADOS); ?></td>
   <td id="TDPOSTADO"><?php $Dados-> GetPostadoDB($DBDADOS); ?></td>
   <td ><a href="AlterarProduto.php?id=<?php $Dados-> GetProdutoId($DBDADOS); ?>&Dados=Excluir" target="_blank" title="Excluir" id="Excluir">Excluir</a></td>

</tr>
</table>
</section>

<?php
  ?>
<?php 
$GetFormAlterar -> GetSubmitProduto();
?>

<section>
  
<div class="Card-box-Alterar">
  <img src="../img/tenis.avif" alt="tênis">
 </div>
 <link type="image/png" sizes="96x96" rel="icon" href=".../icons8-avançar-cotton-96.png"> 

</section>
</body>
</html>