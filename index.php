<?php
ini_set('default_charset','UTF-8');
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <title>Estilos Tênis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="André Aparecido">
  <meta name="description" content="Estilos Tênnis">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/Cards.css">
  <link rel="stylesheet" type="text/css" href="css/Responsivo/MenuMobile.css">
  <link rel="stylesheet" type="text/css" href="css/Responsivo/IndexResponsivo.css">
  <script type="text/javascript" src="js/menu.js" deffer></script>
</head>
<body>
<nav>
<!--<div class="BackgroundMenuCelular" id="BackgroundMenuCelular">
  <div class="FecharMenuCelular" id="FecharMenuCelular" onclick="return FecharMenu();">
   <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACRElEQVR4nO2Zz0sVURTHP89+KkG4EbMohKIoCkKkRYugFrV1lW20VbXJNtVKW2Rg/tj02vYHCP2gFoEIQQsFwSIIiaAIgjYFRr/sh5rFhRG+HDSf8+bO3In5wPAec8/53vMeM/eecy4UFBSERI1P8T7ga/TpgwHgJ1D2pM9n4E90tSWs3Sba34ASHrglk7wHGhLSbYj0FrXdPF7YDLyViR4kpHtHNN8B9XjkKLAgE3ZWqXdatJzucVKgLJN+AnbE1NkGfBStG6TERmBKJn4UY/lzL+mIaLwE6kiRFmBWAuhapf8F8Z0DDpEBvRLED2BfhX57gO/ie5WMWAtMSiBPgXUV+EyIzzNgPRmyN/r3FwPqWcH+iti6XXc/AXDJPM+ty9gdBH6J7UUCwa1AjyWwF0CtsdkAPBebMWANAdEMfJEAB834kMl1dhIgZyXI38CR6P5hYF7GzhAwDyXQN8AW4JXcG/WVaSZFEzAtAX+Q79PRePC0S9B6nSRHDJvg75Izhs0PuEeOOLXMI+QereBpyvNLXFpiGW3M0zJ6rsKNzG14wdFsUgnX41EGTSqxi4CoWSKZc2Xnv5K58ZCSucsx02mXhmeOLWi6V7DvMQXNATLElpRP8lZSXotZ1O8GZsS3lwywbZXzq/TvyrKtUhc1orSxVaqysfUa2ERK3DStxe0xdbaa1qK3cwHlmGnudlSp12mauyfwiG2v309I93Za7fVcH3CUTD/T5xHTjK+MtRztntd9iAP9vg/5vB+D4l+/oOC/4y+WlwHOqCJNPgAAAABJRU5ErkJggg==">
  </div> -->
   <label><img src="https://img.icons8.com/glyph-neue/64/000000/menu.png"  id="MenuCelular" onclick="return Menu();" class="Menu"/></label>
   <label><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACRElEQVR4nO2Zz0sVURTHP89+KkG4EbMohKIoCkKkRYugFrV1lW20VbXJNtVKW2Rg/tj02vYHCP2gFoEIQQsFwSIIiaAIgjYFRr/sh5rFhRG+HDSf8+bO3In5wPAec8/53vMeM/eecy4UFBSERI1P8T7ga/TpgwHgJ1D2pM9n4E90tSWs3Sba34ASHrglk7wHGhLSbYj0FrXdPF7YDLyViR4kpHtHNN8B9XjkKLAgE3ZWqXdatJzucVKgLJN+AnbE1NkGfBStG6TERmBKJn4UY/lzL+mIaLwE6kiRFmBWAuhapf8F8Z0DDpEBvRLED2BfhX57gO/ie5WMWAtMSiBPgXUV+EyIzzNgPRmyN/r3FwPqWcH+iti6XXc/AXDJPM+ty9gdBH6J7UUCwa1AjyWwF0CtsdkAPBebMWANAdEMfJEAB834kMl1dhIgZyXI38CR6P5hYF7GzhAwDyXQN8AW4JXcG/WVaSZFEzAtAX+Q79PRePC0S9B6nSRHDJvg75Izhs0PuEeOOLXMI+QereBpyvNLXFpiGW3M0zJ6rsKNzG14wdFsUgnX41EGTSqxi4CoWSKZc2Xnv5K58ZCSucsx02mXhmeOLWi6V7DvMQXNATLElpRP8lZSXotZ1O8GZsS3lwywbZXzq/TvyrKtUhc1orSxVaqysfUa2ERK3DStxe0xdbaa1qK3cwHlmGnudlSp12mauyfwiG2v309I93Za7fVcH3CUTD/T5xHTjK+MtRztntd9iAP9vg/5vB+D4l+/oOC/4y+WlwHOqCJNPgAAAABJRU5ErkJggg==" class="Fechar" id="FecharMenuCelular" onclick="return FecharMenu();"></label>
  <label class="logo" id="logo">Estilos Tênis</label>
   <ul>
    <li class="active" id="carrinho">
     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB6ElEQVR4nO2ZO0tcQRSAv1VBCVhrwG0Eo65CCGLjL1DE1s4gGBFlEVkQ7PILUgQCFjYW4qrrAxG1CiL2NilEsPKBibj4wELwFQZOsYTsLi5zZu4sfnCaYQ57vnvnzs5h4I3o0QucAi8F4grYBT4DMSLKSRGJf2M2qjInOUUe55lTBwwBdzLPvJnI0SMyRqK7yNwvIrJP4FQDlyLTRuDMiUiSwBkWkQyB80FELqK6e72GM5FJEDjzIjJG4IyIyCKB0yIif8rpO2khcBZeeUbTiB0bIqMREDmyIZKIgMhXGyLmI//tUeIZaMQSGY8iP7FI0qPIgE2Rdk8SN8A7myIx+VN0LTKDAiseRLo0RMYdSxxqHYs+OhaZQolYTh+vHU9AHEXWHIlso8yEI5F+bZFPDiSyQI22SIX8kKbIDxyxrizS4UokpSjxC4d0KIqkXIpUyj2KbYkHoB7HbCg0T9/xwKQUME3gdIrIAYFTJU2PWRLvCZwNeSuDlMn9yS6BU5tzrP8GtLo4I2nRB9xb3Ib3fMvYEnkEGnxfmm5KESa2ZCydJyddQo4651JA7pOMy5g58v+PbIEcs6174bZAUdcWc9RZlQK2pJi49NxmbNlijjrNebpGM9ZkMQcXmCWyJOvbhHmqxQoqJYe/S/viCgHGEU4AAAAASUVORK5CYII="> 
    </li>
    <li class="active" id="Logar" ><a href="login.php">Logar</a></li>
    <li class="active" id="Cadastrar" ><a href="Cadastrar.php">Cadastrar</a></li>
   </ul>
</nav>
<main>
 <div class="descricao">
  <h2>Tênis adidas<br> Grand Court Base</h2><br>
  <p>Conforto e estilo da melhor forma e no menor preço</p>
 </div>
 <div class="MainImg">
   <img src="img/tenis.avif" alt="tenis" class="">
 </div>
</main>
<section >
 <div class="options">
    <p>Entrega rápida</p> 
     <span>
     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACRklEQVR4nO2YO0sdQRiGH1GPQtQjksJYhXTpE4hVwE6IaKws/APxQpr0sdNTJ4VC2hTBSv9CiDfMpfGSIkUSNShoYRQlKCcMfAuDObM7M3thA/PCNLPffM++55vbHggKCgoKCgoKCgqyUAcwDxwD9QLaCbAA3CJjLRRk4GZ7nbWRY0n8gGL0SHhHWSeuSytSuTDrwYi/QkXKOrV+Wexuh8A74L5t0iLls12fAUM2SYtUxBy3iL0HLEn8BdCflLRIuTKbgTcy5jvQk0XSLGRiVoAacJAwzZaBJtukecrErDmsmRe2SfOUibkv/U9ixg4C18Cfm+ulTEbqlu8yK3E/gNuug8tkpAV4L7GLroPLZETpLnAp8Y//ZyNoW/Lbshn5Kf1jlnkGJP5bXNI8ZWLOeF5frspmpEXMRJVxaaUy4qNgJAuFiqSdWu3Ac2ADOJe2DkwDbWngCZwzYBWYkptxKiN9wJeY3eIzcCcDI0mcTxLjZaRNS74FDAOd0kaAHQ1SSWHElvOxAcfKyLQ82waqDZ5XNchECiMunElTroOY7+cVeaZ+IZOeSswHSxMPNfiQB2dV6xuXvn3brzJVYpO6PK8VvpzTBuNmo/lZ077OXAFVx5dVf5q/Al4Cex6cUy1evfOczfqMSq4WnEmjjlMrLWfFBzAlg3cMi7Ab+Coxz3wAHpwJH0BFzgmVYFcWXJe0US15o20xD84m0OoL6dMgpoOqN4UJW86mx8H7j9SGoMq/JteG6Oqg9vQ0lUji/Ja1p6ZTbCX+Anf7zx/UhtX/AAAAAElFTkSuQmCC">
     </span>
 </div>
 <div class="options">
    <p>Frete Grátis A Partir De R$ 200</p>
    <span>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACRklEQVR4nO2YO0sdQRiGH1GPQtQjksJYhXTpE4hVwE6IaKws/APxQpr0sdNTJ4VC2hTBSv9CiDfMpfGSIkUSNShoYRQlKCcMfAuDObM7M3thA/PCNLPffM++55vbHggKCgoKCgoKCgqyUAcwDxwD9QLaCbAA3CJjLRRk4GZ7nbWRY0n8gGL0SHhHWSeuSytSuTDrwYi/QkXKOrV+Wexuh8A74L5t0iLls12fAUM2SYtUxBy3iL0HLEn8BdCflLRIuTKbgTcy5jvQk0XSLGRiVoAacJAwzZaBJtukecrErDmsmRe2SfOUibkv/U9ixg4C18Cfm+ulTEbqlu8yK3E/gNuug8tkpAV4L7GLroPLZETpLnAp8Y//ZyNoW/Lbshn5Kf1jlnkGJP5bXNI8ZWLOeF5frspmpEXMRJVxaaUy4qNgJAuFiqSdWu3Ac2ADOJe2DkwDbWngCZwzYBWYkptxKiN9wJeY3eIzcCcDI0mcTxLjZaRNS74FDAOd0kaAHQ1SSWHElvOxAcfKyLQ82waqDZ5XNchECiMunElTroOY7+cVeaZ+IZOeSswHSxMPNfiQB2dV6xuXvn3brzJVYpO6PK8VvpzTBuNmo/lZ077OXAFVx5dVf5q/Al4Cex6cUy1evfOczfqMSq4WnEmjjlMrLWfFBzAlg3cMi7Ab+Coxz3wAHpwJH0BFzgmVYFcWXJe0US15o20xD84m0OoL6dMgpoOqN4UJW86mx8H7j9SGoMq/JteG6Oqg9vQ0lUji/Ja1p6ZTbCX+Anf7zx/UhtX/AAAAAElFTkSuQmCC">
    </span>
 </div>

</section>
<section>

<div class="Card">  

  <div class="Card-box">
  <a href="index.php" target="_blank"><img src="img/tenis.avif" alt="tênis"></a>
  <h2>Preço R$ 450</h2>
  </div>
  <div class="Card-box">
  <a href="index.php" target="_blank"><img src="img/tenis.avif" alt="tênis"></a>
  <h2>Preço R$ 450</h2>
  </div>
  <div class="Card-box">
  <a href="index.php" target="_blank"><img src="img/tenis.avif" alt="tênis"></a>
  <h2>Preço R$ 450</h2>
  </div>
  <div class="Card-box">
    <a href="index.php" target="_blank"><img src="img/tenis.avif" alt="tênis"></a>
    <h2>Preço R$ 450</h2>
  </div>

</div>
</section>
<section>
  <div class="pesquisa">
   <form action="#" method="post">
      <input type="text" placeholder="Pesquisar Tênis">
      <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAChklEQVR4nO2Zu24TQRSGPxeElgYbEVIYHoECCJdXQAIH+YKECA+AxEVESAl0wAsgUUEKpCiiIDFKDYGGS96AhhZSBZGQ2MFwpH+lKQxi8czYu+wnjbTy5f/3jPecOTOGgoKR5AAwDcwDa8A6sKPxBfig9y4DFUaQM0Ab6AC9vxz22WXgNCPAEWDFubku8Aq4BhwDysAeDbs+DlwHVvXZ5HsvgMPDCqIFfNWNfAPuAftTfN8Cuw9sSmMDaBCZOWc2F4DxAbQOAYuO3iyRuCvDH7ouedK9CuzGCqYlIzOsBdCfcoKpEzCxk5y4FcoEmHFyphrCYMXJiZCUnJxph1gneqowE4RnXJWwB5zyKdyWqJXYWFhpNs8ln21HRwtYmnViUGyd6aq9seuBuaKZeUl8Xsv7kg+xeYlZ2xGbG/J+7ENsTWLWO8VmUt7vfIitSyxmfiRU5P3Zh9i2xMaIz155f89LIBt5ebQ++kx22xTF5qS8rQznovw+8iE2LTHbnsbmjbzP+XpOkxbFS6uQskXpAPt8iS5rZqyRi8UDeVpL740TEt0aQht/1Ld425khX/v0fpj2M3k9D2FQ1cLU03Y0FLflYSeTB0OZNJzDBzso8M0F5/DhLIGZdYKZ8fSYlfRLJEHs6sSGWMEkOWOHbP/KhJMT7rDS2yQCdSdnNlWa06wzZZXYLacx7PYJpkEEqk41S4xX1VpMajEd06jotZvqndybXlBiN4cZDDqyWUr5t4JtD572aUZ/F0ydiJR1UPAEeK8Suq3F7RPwFniom/rTtqAxCsH4wsp7p08wF8lRMC0yyFSegqn9D8E0yWgwO0UwGSkAc2SU885jdoeMU4v5d3ZBwa8Z+Ak4rhMJLuUtjQAAAABJRU5ErkJggg=="></span>
   </form>  
  </div> 
</section>
<div class="MaisVendidos">
    <h1>Tênis Mais Vendidos</h1>
 </div>
<section>

  <div class="Card"> 
    <div class="CardTenis">
    <img src="img/tenis.avif" alt="tênis">
    <h2>Preço R$ 450</h2>
    </div>
   <div class="CardTenis">
    <img src="img/tenis.avif" alt="tênis">
    <h2>Preço R$ 450</h2>
   </div>
   <div class="CardTenis">
    <img src="img/tenis.avif" alt="tênis">
    <h2>Preço R$ 450</h2>
   </div>
   <div class="CardTenis">
    <img src="img/tenis.avif" alt="tênis">
    <h2>Preço R$ 450</h2>
   </div>
  </div>
</section>
<footer>
  <h1>p</h1>
</footer>
</body>
</html>