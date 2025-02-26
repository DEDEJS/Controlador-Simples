<?php
ini_set('default_charset','UTF-8');
class GetCadastro{
  public function GetProduto(){
    if(isset($_POST['Produto'])){
      return htmlspecialchars($_POST['Produto']);
    }else if(isset($_POST['ProdutoAlterar'])){
      return htmlspecialchars($_POST['ProdutoAlterar']);
    }else{
        return false;
    }
  }
  public function GetQuantidade(){
    if(isset($_POST['Quantidade'])){
      return htmlspecialchars($_POST['Quantidade']);
    }else if(isset($_POST['QuantidadeAlterar'])){
      return htmlspecialchars($_POST['QuantidadeAlterar']);
  }else{
        return false;
    }
  }
  public function GetPreco(){
    if(isset($_POST['Preco'])){
      return htmlspecialchars($_POST['Preco']);
    }else if(isset($_POST['PrecoAlterar'])){
      return htmlspecialchars($_POST['PrecoAlterar']);
  }else{
        return false;
    }
  }
  public function GetPostar(){
    if(isset($_POST['Postar'])){
      return htmlspecialchars($_POST['Postar']);
    }else if(isset($_POST['PostarAlterar'])){
      return htmlspecialchars($_POST['PostarAlterar']);
  }else{
        return false;
    }
  }
  public function GetCategoria(){
    if(isset($_POST['Categoria'])){
      return htmlspecialchars($_POST['Categoria']);
    }else if(isset($_POST['CategoriaAlterar'])){
      return htmlspecialchars($_POST['CategoriaAlterar']);
  }else{
        return false;
    }
  }
  public function GetImg(){
    if(isset($_FILES['Img'])){
      return $_FILES['Img'];
    }else{
        return false;
    }
  }
}
$GetCadastro = new GetCadastro();
$GetValueProduto = $GetCadastro -> GetProduto();
$GetValueQuantidade = $GetCadastro -> GetQuantidade();
$GetValuePreco = $GetCadastro -> GetPreco();
$GetValuePostar = $GetCadastro -> GetPostar();
$GetValueCategoria = $GetCadastro -> GetCategoria();

?> 