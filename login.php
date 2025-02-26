<?php
ini_set('default_charset','UTF-8');
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <title>Logar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="André Aparecido">
  <meta name="description" content="Página Inicial">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/Responsivo/MenuMobile.css">
  <link rel="stylesheet" type="text/css" href="css/Responsivo/IndexResponsivo.css">
  <link rel="stylesheet" type="text/css" href="css/Form.css">
  <script deffer  type="text/javascript" src="js/menu.js"> </script>
</head>
<body>
<nav>
<!--<div class="BackgroundMenuCelular" id="BackgroundMenuCelular">
  <div class="FecharMenuCelular" id="FecharMenuCelular" onclick="return FecharMenu();">
   <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACRElEQVR4nO2Zz0sVURTHP89+KkG4EbMohKIoCkKkRYugFrV1lW20VbXJNtVKW2Rg/tj02vYHCP2gFoEIQQsFwSIIiaAIgjYFRr/sh5rFhRG+HDSf8+bO3In5wPAec8/53vMeM/eecy4UFBSERI1P8T7ga/TpgwHgJ1D2pM9n4E90tSWs3Sba34ASHrglk7wHGhLSbYj0FrXdPF7YDLyViR4kpHtHNN8B9XjkKLAgE3ZWqXdatJzucVKgLJN+AnbE1NkGfBStG6TERmBKJn4UY/lzL+mIaLwE6kiRFmBWAuhapf8F8Z0DDpEBvRLED2BfhX57gO/ie5WMWAtMSiBPgXUV+EyIzzNgPRmyN/r3FwPqWcH+iti6XXc/AXDJPM+ty9gdBH6J7UUCwa1AjyWwF0CtsdkAPBebMWANAdEMfJEAB834kMl1dhIgZyXI38CR6P5hYF7GzhAwDyXQN8AW4JXcG/WVaSZFEzAtAX+Q79PRePC0S9B6nSRHDJvg75Izhs0PuEeOOLXMI+QereBpyvNLXFpiGW3M0zJ6rsKNzG14wdFsUgnX41EGTSqxi4CoWSKZc2Xnv5K58ZCSucsx02mXhmeOLWi6V7DvMQXNATLElpRP8lZSXotZ1O8GZsS3lwywbZXzq/TvyrKtUhc1orSxVaqysfUa2ERK3DStxe0xdbaa1qK3cwHlmGnudlSp12mauyfwiG2v309I93Za7fVcH3CUTD/T5xHTjK+MtRztntd9iAP9vg/5vB+D4l+/oOC/4y+WlwHOqCJNPgAAAABJRU5ErkJggg==">
  </div> -->
   <label><img src="https://img.icons8.com/glyph-neue/64/000000/menu.png"  id="MenuCelular" onclick="return Menu();" class="Menu"/></label>
   <label><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACRElEQVR4nO2Zz0sVURTHP89+KkG4EbMohKIoCkKkRYugFrV1lW20VbXJNtVKW2Rg/tj02vYHCP2gFoEIQQsFwSIIiaAIgjYFRr/sh5rFhRG+HDSf8+bO3In5wPAec8/53vMeM/eecy4UFBSERI1P8T7ga/TpgwHgJ1D2pM9n4E90tSWs3Sba34ASHrglk7wHGhLSbYj0FrXdPF7YDLyViR4kpHtHNN8B9XjkKLAgE3ZWqXdatJzucVKgLJN+AnbE1NkGfBStG6TERmBKJn4UY/lzL+mIaLwE6kiRFmBWAuhapf8F8Z0DDpEBvRLED2BfhX57gO/ie5WMWAtMSiBPgXUV+EyIzzNgPRmyN/r3FwPqWcH+iti6XXc/AXDJPM+ty9gdBH6J7UUCwa1AjyWwF0CtsdkAPBebMWANAdEMfJEAB834kMl1dhIgZyXI38CR6P5hYF7GzhAwDyXQN8AW4JXcG/WVaSZFEzAtAX+Q79PRePC0S9B6nSRHDJvg75Izhs0PuEeOOLXMI+QereBpyvNLXFpiGW3M0zJ6rsKNzG14wdFsUgnX41EGTSqxi4CoWSKZc2Xnv5K58ZCSucsx02mXhmeOLWi6V7DvMQXNATLElpRP8lZSXotZ1O8GZsS3lwywbZXzq/TvyrKtUhc1orSxVaqysfUa2ERK3DStxe0xdbaa1qK3cwHlmGnudlSp12mauyfwiG2v309I93Za7fVcH3CUTD/T5xHTjK+MtRztntd9iAP9vg/5vB+D4l+/oOC/4y+WlwHOqCJNPgAAAABJRU5ErkJggg==" class="Fechar" id="FecharMenuCelular" onclick="return FecharMenu();"></label>
  <label class="logo" id="logo">Minha loja de tênis</label>
   <ul>
    <li class="active" id="carrinho">
     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB6ElEQVR4nO2ZO0tcQRSAv1VBCVhrwG0Eo65CCGLjL1DE1s4gGBFlEVkQ7PILUgQCFjYW4qrrAxG1CiL2NilEsPKBibj4wELwFQZOsYTsLi5zZu4sfnCaYQ57vnvnzs5h4I3o0QucAi8F4grYBT4DMSLKSRGJf2M2qjInOUUe55lTBwwBdzLPvJnI0SMyRqK7yNwvIrJP4FQDlyLTRuDMiUiSwBkWkQyB80FELqK6e72GM5FJEDjzIjJG4IyIyCKB0yIif8rpO2khcBZeeUbTiB0bIqMREDmyIZKIgMhXGyLmI//tUeIZaMQSGY8iP7FI0qPIgE2Rdk8SN8A7myIx+VN0LTKDAiseRLo0RMYdSxxqHYs+OhaZQolYTh+vHU9AHEXWHIlso8yEI5F+bZFPDiSyQI22SIX8kKbIDxyxrizS4UokpSjxC4d0KIqkXIpUyj2KbYkHoB7HbCg0T9/xwKQUME3gdIrIAYFTJU2PWRLvCZwNeSuDlMn9yS6BU5tzrP8GtLo4I2nRB9xb3Ib3fMvYEnkEGnxfmm5KESa2ZCydJyddQo4651JA7pOMy5g58v+PbIEcs6174bZAUdcWc9RZlQK2pJi49NxmbNlijjrNebpGM9ZkMQcXmCWyJOvbhHmqxQoqJYe/S/viCgHGEU4AAAAASUVORK5CYII="> 
    </li>
    <li class="active" id="Logar" ><a href="login.php">Logar</a></li>
    <li class="active" id="Cadastrar" ><a href="Cadastrar.php">Cadastrar</a></li>
   </ul>
</nav>
<main class="form-main">
  <form action="#" method="post">
    <h1>Logar</h1>
    <div>
    <p><?php 
    include_once("ADMIN/PHP/User/ValidaUser.php");
 $Validado -> ValidaEmail($Email); ?></p> 
    <input type="email" placeholder="Email" require="true" name="EmailLogin">
    </div>
    <div>
    <p><?php $Validado -> ValidaSenha($Senha); ?></p> 
    <input type="password" placeholder="Senha" require="true" name="SenhaLogin">
    </div>
     <input type="submit" value="Logar">
     <?php 

     $Validado -> LoginValidado(); 
     $Validado -> HeaderLogin();
     ?>
  </form>
</main>
</body>
</html>