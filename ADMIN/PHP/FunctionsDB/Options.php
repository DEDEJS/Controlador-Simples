<?php
ini_set('default_charset','UTF-8'); 
class OptionsDBCategoria{
    public function GetCategoriaDB($conecta){
        $GetCategoriaDB = $conecta->query("SELECT Categoria from produto;");
        while ($SelectLinhaCategoria = $GetCategoriaDB->fetch(PDO::FETCH_ASSOC)) {
               $Categoria = $SelectLinhaCategoria['Categoria'];
         } 
    }
}
$CategoriaDB = new OptionsDBCategoria();
?>