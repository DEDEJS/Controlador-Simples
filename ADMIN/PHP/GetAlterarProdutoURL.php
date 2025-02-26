<?php  
ini_set('default_charset','UTF-8');

class GetUrlAlterarProduto{
public function GetDadosUrlID(){ 
if(isset($_GET['id']) && is_numeric($_GET['id'])){
   return $_GET['id'];
}else{
// Levar Para Página De Erro
}
}
public function GetDadosUrlAlterar(){
    $ArrayDadosPermitidos = array("Produto","Quantidade","Categoria","Preco","Postado","Excluir");
     if(isset($_GET['Dados'])){
        if($_GET['Dados']  == $ArrayDadosPermitidos[0]){
          return $_GET['Dados'];
        }else if($_GET['Dados']  == $ArrayDadosPermitidos[1]){
            return $_GET['Dados'];
        }else if($_GET['Dados']  == $ArrayDadosPermitidos[2]){
            return $_GET['Dados'];
        }if($_GET['Dados']  == $ArrayDadosPermitidos[3]){
            return $_GET['Dados'];
        }if($_GET['Dados']  == $ArrayDadosPermitidos[4]){
            return $_GET['Dados'];
        }else if($_GET['Dados']  == $ArrayDadosPermitidos[5]){
          return $_GET['Dados'];
           }else{
                // Levar Para Página De Erro
              die("erros");        
            }
          }
     }
 
}
$UrlALterarProduto = new GetUrlAlterarProduto();

?>