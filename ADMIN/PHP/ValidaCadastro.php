<?php
ini_set('default_charset','UTF-8');
include_once("GetCadastro.php");
$Produto = $GetCadastro -> GetProduto();
$Quantidade = $GetCadastro -> GetQuantidade();
$Preco = $GetCadastro -> GetPreco();
$Postar = $GetCadastro -> GetPostar();
$Categoria = $GetCadastro -> GetCategoria();
$Img = $GetCadastro -> GetImg();
class ValidaCadastro{
   public $ProdutoValidado;
   public $QuantidadeValidado;
   public $PrecoValidado;
   public $PostarValidado;
   public $CategoriaValidado;
   public $ImgValidado;
   public $validacao = false;
   public $VerificaSeExisteCategoria;
 public function ValidaProduto($Produto){    
      if(strlen($Produto)<=0){
         echo "Campo Vázio";
      }else if(strlen($Produto)<=2){
          echo "Mínimo De Caracteres È 3";
      }else if(strlen($Produto)>=21){
          echo "Máximo De Caracteres È 20";
      }else if(preg_replace('/[^\d\-]/', '',$Produto)){
         echo "Produto Inválido";
      }else if(!preg_match('/^[a-zA-Z-"]*$/',$Produto)){
         echo "Produto Inválido!";
        
      } else{
         return $this-> ProdutoValidado = true;
         // return true;
      }
   
 }
 public function ValidaQuantidade($Quantidade){
    if(strlen($Quantidade)<=0){
        echo "Campo Vázio";
     }else if(!is_numeric($Quantidade)){
        echo "Somente Números";
     }else if(strlen($Quantidade)>=6){
        echo "Quantidade Inválida";
      } else{
      echo "tudo certo";
      return $this-> QuantidadeValidado = true;
     }
 }
 public function ValidaPreco($Preco){
    if(strlen($Preco)<=0){
        echo "Campo Vázio";
     }else if(!is_numeric($Preco)){
        echo "Preço Inválido";
     }else{
      echo "tudo certo";
      return $this-> PrecoValidado = true;
     }
 }
 public function ValidaPostar($Postar){
    $ArrayPermitido = array("---", "Sim", "Não", "Apenas Cadastrar No Sistema");
     if($Postar == $ArrayPermitido[0]){
        echo "Escolha Uma Opção";
         
     }else if($Postar != $ArrayPermitido[1] && $Postar != $ArrayPermitido[2] && $Postar != $ArrayPermitido[3] ){
           echo "Escolha Uma Opção";
     }else if($Postar == $ArrayPermitido[3]){
            $Postar = "A";
            echo "tudo certo";
            return $this-> PostarValidado = true;
     }else{
      echo "tudo certo";
        return $this-> PostarValidado = true;
     }
 }
 public function ValidaCategoria($Categoria){
   $ArrayCategoria = array ("---", "Masculino", "Feminino", "Infantil");
    if($Categoria == $ArrayCategoria[0]){
      echo "Escolha Uma Opção";

    }else if($Categoria != $ArrayCategoria[1] && $Categoria != $ArrayCategoria[2] && $Categoria != $ArrayCategoria[3]){
      echo "Escolha Uma Opção";
    }else{
      echo "tudo certo";
       return $this-> CategoriaValidado = true;
     }
}
 public function ValidaImg($Img){
  /* Ressalvar a imagem  E Validar Ela
  $destino = 'IMGSPRODUTOS/' . $_FILES['Img']['name'];
 
  $arquivo_tmp = $_FILES['Img']['tmp_name'];
   
  move_uploaded_file( $arquivo_tmp, $destino  ); 
  if(isset( $_FILES[ 'Img' ])){
   $destino = 'IMGSPRODUTOS/' .rename($_FILES['Img']['name'], 'teste');
 
  $arquivo_tmp = $_FILES['Img']['tmp_name'];
   
  move_uploaded_file( $arquivo_tmp, $destino  );

  echo "ok";
   }else{
      echo "error";
   } */
 }
  public function InputsValidados(){
  if($this-> ProdutoValidado == true && $this-> QuantidadeValidado == true &&
     $this-> PrecoValidado == true && $this-> PostarValidado == true &&
     $this-> CategoriaValidado == true){
   return $this->validacao = true;
  }
 }
/*  public function InputsAlterarValidado(){
     if($this->validacao == true){
          
      return true;
     }else{
      return false;
     }
 }*/
 public function HeaderCadastro($Produto, $Quantidade, $Preco, $Postar ,$Categoria){
   if($this->validacao == true){ 
      session_start();
      $_SESSION['Produto'] = $Produto;
      $_SESSION['Quantidade'] = $Quantidade;
      $_SESSION['Categoria'] = $Categoria;
      $_SESSION['Preco'] = $Preco;
      $_SESSION['Postar'] = $Postar;
        header("location:PHP/FunctionsDB/CadastraProduto.php");
     
   }
}
public function HeaderAlterarProduto($Produto){
   if($this->ProdutoValidado == true){ 
      session_start();
      $_SESSION['ProdutoAlterar'] = $Produto;
      $_SESSION['IDAlterarProduto'] = "19";
      header("location:PHP/FunctionsDB/AlterarProdutoDB.php");
     
   }else{
      unset($_SESSION['IDAlterar'], $_SESSION['ProdutoAlterar']);
   }
}
public function HeaderAlterarQuantidade($Quantidade){
      if($this->QuantidadeValidado == true){
         session_start();
         $_SESSION['QuantidadeAlterar'] = $Quantidade;
         $_SESSION['IdAlterarQuantidade']= "19";
         header("location:PHP/FunctionsDB/AlterarProdutoDB.php");
      }
}
public function HeaderAlterarCategoria($Categoria){
     if($this->CategoriaValidado == true){
         session_start();
         $_SESSION['CategoriaAlterar'] = $Categoria;
         $_SESSION['IdAlterarCategoria']= "19";
         header("location:PHP/FunctionsDB/AlterarProdutoDB.php");
     }
}
public function HeaderAlterarPreco($Preco){
   if($this->PrecoValidado == true){
      session_start();
      $_SESSION['PrecoAlterar'] = $Preco;
      $_SESSION['IdAlterarPreco']= "19";
      header("location:PHP/FunctionsDB/AlterarProdutoDB.php");
  }
}
public function HeaderAlterarPostar($Postar){
   if($this->PostarValidado == true){
      session_start();
      $_SESSION['PostarAlterar'] = $Postar;
      $_SESSION['IdAlterarPostar']= "19";
      header("location:PHP/FunctionsDB/AlterarProdutoDB.php");
  }
}
 }
$CadastroValidado = new ValidaCadastro();
?>