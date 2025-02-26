<?php
ini_set('default_charset','UTF-8');
include_once("PHP/ValidaSearch.php");
session_start();
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Página Inicial</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/tabela.css">
<script src="JS/Tabela.js"></script>
</head>
<body>
<header>
<nav>
<img width="50" height="50" src="https://img.icons8.com/ios/50/menu--v1.png">
 <ul>
  <li><a href="Paginainicial.php" title="Página Inicial">Página Inicial</a></li>
  <li><a href="Produtos.php" title="Produtos">Produtos</a></li>
  <li><a href="estoque.php" title="Estoque">Estoque</a></li>
  <li><a href="CadastrarProduto.php" title="Cadastrar Produtos">Cadastrar Produtos</a></li>
 </ul>
</nav>
</header> 
<section>
<h1 title="Produtos">Produtos</h1>
  <form action="#" method="get">
     <select name="SearchOption" id="SearchOption">
      <option>---</option>
      <option>Masculino</option>
      <option>Feminino</option>
      <option>Infantil</option>
      <option>Todos</option>
    </select>
    <input type="image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAChklEQVR4nO2Zu24TQRSGPxeElgYbEVIYHoECCJdXQAIH+YKECA+AxEVESAl0wAsgUUEKpCiiIDFKDYGGS96AhhZSBZGQ2MFwpH+lKQxi8czYu+wnjbTy5f/3jPecOTOGgoKR5AAwDcwDa8A6sKPxBfig9y4DFUaQM0Ab6AC9vxz22WXgNCPAEWDFubku8Aq4BhwDysAeDbs+DlwHVvXZ5HsvgMPDCqIFfNWNfAPuAftTfN8Cuw9sSmMDaBCZOWc2F4DxAbQOAYuO3iyRuCvDH7ouedK9CuzGCqYlIzOsBdCfcoKpEzCxk5y4FcoEmHFyphrCYMXJiZCUnJxph1gneqowE4RnXJWwB5zyKdyWqJXYWFhpNs8ln21HRwtYmnViUGyd6aq9seuBuaKZeUl8Xsv7kg+xeYlZ2xGbG/J+7ENsTWLWO8VmUt7vfIitSyxmfiRU5P3Zh9i2xMaIz155f89LIBt5ebQ++kx22xTF5qS8rQznovw+8iE2LTHbnsbmjbzP+XpOkxbFS6uQskXpAPt8iS5rZqyRi8UDeVpL740TEt0aQht/1Ld425khX/v0fpj2M3k9D2FQ1cLU03Y0FLflYSeTB0OZNJzDBzso8M0F5/DhLIGZdYKZ8fSYlfRLJEHs6sSGWMEkOWOHbP/KhJMT7rDS2yQCdSdnNlWa06wzZZXYLacx7PYJpkEEqk41S4xX1VpMajEd06jotZvqndybXlBiN4cZDDqyWUr5t4JtD572aUZ/F0ydiJR1UPAEeK8Suq3F7RPwFniom/rTtqAxCsH4wsp7p08wF8lRMC0yyFSegqn9D8E0yWgwO0UwGSkAc2SU885jdoeMU4v5d3ZBwa8Z+Ak4rhMJLuUtjQAAAABJRU5ErkJggg==" alt="Pesquisar" title="Pesquisar">
  </form>
</section>
<div> 
   <h1 title="Pesquisa"><?php  $ValidadoSearch -> ValidaSearch($SearchOption); ?></h1>
</div>
<?php 
    $ValidadoSearch -> SearchValidate($SearchOption);
    include_once("PHP/FunctionsDB/SearchDB.php");
    include_once("PHP/Banco.php");
    $Search -> VerificationIfSessionExist();
    $Search -> SearchAll($conecta);
    $Search -> SearchIdenticalDB($conecta);
    $Search -> SearchNotFoundDB($conecta); 
 ?>
</body>
</html>
