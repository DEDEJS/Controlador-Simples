<?php
ini_set('default_charset','UTF-8');

class GetUrl{
   public function GetUrl(){
      if(isset($_GET['id']) && is_numeric($_GET['id'])){
         return $_GET['id'];
      }else{
         return die("Error");

      }
   }

}
$GetUrl = new GetUrl();
 $Url = $GetUrl -> GetUrl();
class GetUrlDB{
    public function GetDadosDB($Url, $conecta){
      $GetDados = $conecta ->query("SELECT id,Produto, Quantidade, Categoria, Preco, Postado FROM Produto WHERE id=$Url;"); 
      while ($Get = $GetDados->fetch(PDO::FETCH_ASSOC)) {
        return  $ArrayDados = array($Get['id'], $Get['Produto'],$Get['Quantidade'], $Get['Categoria'],$Get['Preco'], $Get['Postado']);
        
   }
   return $ArrayDados = null;
   
     }

       }


$GetURLDB = new GetUrlDB();
$DBDADOS = $GetURLDB -> GetDadosDB($Url, $conecta);

class GetDados{
public function ValidaArrayDB($DBDADOS){
      if($DBDADOS == null){
         die("errosr");
         // Levar Para Uma Página De Erro
      }
}
public function GetProdutoId($DBDADOS){
         echo $DBDADOS['0'];
}
public function GetProdutoDB($DBDADOS){
   if(is_array($DBDADOS) ){  
      echo $DBDADOS['1'];

    }
 }
public function GetQuantidadeDB($DBDADOS){
if(is_array($DBDADOS)){
     echo $DBDADOS['2'];
}
}
public function GetCategoriaDB($DBDADOS){
if(is_array($DBDADOS)){
   echo $DBDADOS['3'];
 }
}
public function GetPrecoDB($DBDADOS){
   if(is_array($DBDADOS)){
        echo $DBDADOS['4'];
   }
   }
   public function GetPostadoDB($DBDADOS){
 if(is_array($DBDADOS)){
   if($DBDADOS['5'] == "N"){
      echo "Não";
   }else{
      echo "Sim";
   }
}
}
 
  
}
$Dados = new GetDados();
$Dados -> ValidaArrayDB($DBDADOS);
class GetURLALTERAR{
   public function ProdutoUrl(){
       if(isset($_GET['Produto'])){
          echo '
<form action="#" method="post" >
<div class="ProdutoForm" id="ProdutoForm">
<h3>Produto</h3>
<p><?php $CadastroValidado-> ValidaProduto($Produto); ?></p>
<input type="text" placeholder="Produto" name="ProdutoAlterar" id="Produto" title="Produto" value="<?php  ?>">
<input type="submit" name="SubmitProduto">
</div>
</form>          
          ';
       }
   }
}
$UrlForm = new GetURLALTERAR();
class GetFormAlterar{
   public function GetSubmitProduto(){
      if(isset($_POST['SubmitProduto']) && isset($_POST['ProdutoAlterar'])){
           echo $_POST['ProdutoAlterar'];
      }
   }
}

$GetFormAlterar = new GetFormAlterar();

?>