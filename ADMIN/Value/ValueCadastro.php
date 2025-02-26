<?php
ini_set('default_charset','UTF-8');

class ValueCadastroProduto{
     function ValueProduto($GetValueProduto){
         echo htmlspecialchars($GetValueProduto);
      }
      function ValueQuantidade($GetValueQuantidade){
        echo htmlspecialchars($GetValueQuantidade);
     }
     function ValueGetPreco($GetValuePreco){
        echo htmlspecialchars($GetValuePreco);
     }
     function ValuePostar($GetValuePostar){
      echo htmlspecialchars($GetValuePostar);
     }
     function ValuePrecoProduto($GetValuePrecoProduto){
      echo htmlspecialchars($GetValuePrecoProduto);
   }
   function ValueCategoria($GetValueCategoria){
    echo htmlspecialchars($GetValueCategoria);
 }
}
?>