<?php
ini_set('default_charset','UTF-8');

class GetSearch{

    public function GetSearchOption(){
        if(isset($_GET['SearchOption'])){
           return htmlspecialchars($_GET['SearchOption']);
        }
    }
}
$SearchGet = new GetSearch();

$SearchOption = $SearchGet -> GetSearchOption();
class ValidaSearch{
    public $SearchInput;
    public $ArraySearch;
    public function ValidaSearch( $SearchOption){
         $Array_Search = array("---","Masculino","Feminino","Infantil", "Todos"); 
         if( $SearchOption == $Array_Search['1']){
            $this->ArraySearch = $Array_Search['1'];

         }else if( $SearchOption == $Array_Search['2']){
            $this->ArraySearch = $Array_Search['2'];

         }else if( $SearchOption == $Array_Search['3']){
            $this->ArraySearch = $Array_Search['3'];
         
        }else if($SearchOption == $Array_Search['4']){
            $this->ArraySearch = $Array_Search['4'];
        
        }else{
            unset( $_SESSION['SearchOption'] ); 
            echo "Desculpa, Não Tem Um Produto Cadastrado Com esse Nome, <a href='PaginaInicial.php'>Voltar Para A Página Inicial</a>";
         }
    }
  
    public function SearchValidate($SearchOption){
        if($this->ArraySearch != false ){
             $_SESSION['SearchOption'] = $SearchOption;
         
        }
}
}
$ValidadoSearch = new ValidaSearch();
?>