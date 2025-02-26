<?php
ini_set('default_charset','UTF-8');
class BestSellingProduct{

    public $MostSoldID;
    public function GetBestSellingProduct($conecta){
          $SearchProductBestSelling = $conecta ->query("SELECT id, Produto, Quantidade, Categoria, Vendidos,
            Preco, Postado, ImgLink FROM produtos WHERE 
          Vendidos = (SELECT MAX(Vendidos) FROM produtos);");
         while($MostSoldDB =  $SearchProductBestSelling->fetch(PDO::FETCH_ASSOC)){
            if($MostSoldDB['Vendidos'] == "0"){
              $this-> MostSoldID = false;
            }else{ 
             $this-> MostSoldID = array(
                $MostSoldDB['id'],
                $MostSoldDB['Produto'],
                $MostSoldDB['Quantidade'],
                $MostSoldDB['Categoria'],
                $MostSoldDB['Vendidos'],
                $MostSoldDB['Preco'],
                $MostSoldDB['Postado'],
                $MostSoldDB['ImgLink']
            );
         }
      }
        
    }
    public function BestSellingProduct(){
     if($this-> MostSoldID == false){
         echo '
         <div>
          <h1>Infelizmente Você Não Vendeu Nada Ainda</h1>
         </div>
         ';
       }else if(is_array($this-> MostSoldID)){
     echo '
     <div> 
       <h1 title="Produtos Que Mais Vendeu">Produto Que Mais Vendeu</h1>
     </div>
     <section class="Tabela">
<table>
<tr>
    <th onmouseover="return EffectTableProduct();" onmouseout="return EffectTableProductTH();"><h3 title="Produto" id="THPRODUTO">Produto</h3></th>        
    <th onmouseover="return EffectTableQuantity();" onmouseout="return EffectTableQuantityTH();"><h3 title="Quantidade" id="THQUANTIDADE" >Quantidade</h3></th>
    <th onmouseover="return EffectTableCategory();" onmouseout="return EffectTableCategoryTH();"><h3 title="Categoria" id="THCATEGORIA" >Categoria</h3></th>
    <th onmouseover="return EffectTableSold();" onmouseout="return EffectTableSoldTH();"><h3 title="Vendido" id="THVENDIDO" class="VENDIDO">Vendido</h3></th>
    <th onmouseover="return EffectTablePrice();" onmouseout="return EffectTablePriceTH();"><h3 title="Preço" id="THPRECO">Preço</h3></th>
    <th onmouseover="return EffectTablePosted();" onmouseout="return EffectTablePostedTH();"><h3 title="Postado" id="THPOSTADO">Postado</h3></th>
    <th onmouseover="return EffectTableChange();" onmouseout="return EffectTableChangeTH();"><h3 title="Alterar" id="THALTERAR">Alterar</h3></th>

</tr>
<tr>
   <td id="TDPRODUTO">'.$this-> MostSoldID[1].'</td>
   <td id="TDQUANTIDADE" >'.$this-> MostSoldID[2].'</td>
   <td id="TDCATEGORIA">'.$this-> MostSoldID[3].'</td>
   <td id="TDVENDIDO" class="VENDIDO">'.$this-> MostSoldID[4].'</td>

   <td id="TDPRECO">'.$this-> MostSoldID[5].'</td>
   <td id="TDPOSTADO">'.$this-> MostSoldID[6].'</td>
   <td id="TDALTERAR"><a href=Alterar.php?id='.$this-> MostSoldID[0].'>Alterar</a></td>
</tr>
</table>
</section>
     ';   
        
     }else{}
    }

}
 

?>