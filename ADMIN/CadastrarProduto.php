<?php
ini_set('default_charset','UTF-8');
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Produto</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/tabela.css">
<script src="JS/ValidaCadastro.js" deffer></script>
</head>
<body onload="InputCadastro();">
<header>
<nav>
<img width="50" height="50" src="https://img.icons8.com/ios/50/menu--v1.png">
 <ul>
  <li><a href="Paginainicial.php" title="Página Inicial">Página Inicial</a></li>
  <li><a href="Produtos.php" title="Produtos">Produtos</a></li>
  <li><a href="estoque.php" title="Produtos">Estoque</a></li>
  <li><a href="CadastrarProduto.php" title="Cadastrar Produtos" class="CadastrarNav">Cadastrar Produtos</a></li>
 </ul>
</nav>
</header>
<main>
  <?php
   include_once("PHP/ValidaCadastro.php");
   include_once("Value/ValueCadastro.php");
   include_once("PHP/Banco.php");
  ?>
<form action="#" method="post" enctype="multipart/form-data"> 
  
  <div> 
    <h3>Produto</h3>
    <p><?php $CadastroValidado-> ValidaProduto($Produto); ?></p>
  <input type="text" placeholder="Produto" name="Produto" id="Produto" title="Produto" value="<?php echo $GetValueProduto; ?>">
  </div>
  <div>
    <h3>Quantidade (Par)</h3>
    <p><?php $CadastroValidado-> ValidaQuantidade($Quantidade); ?></p>
  <input type="text" placeholder="Quantidade" name="Quantidade" id="Quantidade" title="Quantidade" value="<?php echo $GetValueQuantidade; ?>">
  </div>
  <div>
    <h3>Preço</h3>
  <p><?php $CadastroValidado-> ValidaPreco($Preco); ?></p>
  <input type="number" placeholder="Preço" name="Preco" id="Preco" title="Preço" value="<?php echo $GetValuePreco; ?>" 
  pattern="^[0-9]+\.?[0-9]{0,2}$">
  </div>
  <div> 
    <h3>Postar</h3>
    <p><?php $CadastroValidado-> ValidaPostar($Postar); ?></p>
    <select name="Postar" id="Postar" title="Postar">
    <option>---</option>
    <option>Sim</option>
    <option>Não</option>
    <option>Apenas Cadastrar No Sistema</option>
    </select>
  </div>
  <div>
    <h3>Categoria</h3>
  <p><?php $CadastroValidado-> ValidaCategoria($Categoria); ?></p>
    <select name="Categoria" id="Categoria">
      <option>---</option>
      <option>Masculino</option>
      <option>Feminino</option>
      <option>Infantil</option>
    </select>
  </div>
  <div>
    <h3>Imagem</h3>
  <p><?php $CadastroValidado-> ValidaImg($Img); ?></p>
    <input type="file" name="Img" id="Img" title="Img">
  </div>
  <div>
  <p>
  <?php 
  $CadastroValidado-> InputsValidados();

  $CadastroValidado->  HeaderCadastro($Produto, $Quantidade, $Preco, $Postar ,$Categoria);?></p>

  <input type="submit" value="Cadastrar"> 
  </div>

</form>
</body>
</html>