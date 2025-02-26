<?php
ini_set('default_charset','UTF-8');
class SearchInputDB{
   public $Session;
   public $SearchFalse;
   public $Postado;
   public function VerificationIfSessionExist(){
      if(isset($_SESSION['SearchOption'])){
         $this-> Session = true;
      }else{
         $this-> Session = false;
      }
   }
   public function SearchNotFoundDB($conecta){
      if($this-> Session == true){
         $ArraySearchSession = array($_SESSION['SearchOption']);
      $SelectSearchidenticalDB = $conecta->query("SELECT id,Produto, Quantidade, Vendidos, Categoria, Preco, Postado FROM produto WHERE Categoria='$ArraySearchSession[0]'");

      if($SelectSearchidenticalDB->fetch(PDO::FETCH_ASSOC) == false && $ArraySearchSession[0] != "Todos"){
         echo "Desculpa, Não Tem Um Produto Cadastrado Com esse Nome, <a href='PaginaInicial.php'>Voltar Para A Página Inicial</a>";
   
       }
        }
   }
    public function SearchIdenticalDB($conecta){
     if($this-> Session == true){
      $ArraySearchSession = array($_SESSION['SearchOption']);
      
     $SelectSearchidentical = $conecta->query("SELECT id,Produto, Quantidade, Vendidos, Categoria, Preco, Postado FROM produto WHERE Categoria='$ArraySearchSession[0]'");
  
     while ($ArraySearchIdenticalDB = $SelectSearchidentical->fetch(PDO::FETCH_ASSOC)) {
      if($ArraySearchIdenticalDB['Postado'] == "N"){
         $this-> Postado = "Não";
      }else if($ArraySearchIdenticalDB['Postado'] == "S"){
         $this-> Postado = "Sim";
      }else if($ArraySearchIdenticalDB['Postado'] == "A"){
         $this-> Postado = "Apenas Cadastrado"; 
      }else{
         // Levar Para Tratamento De Erros
          echo "Error"; 
        }
      echo '
         <section class="Tabela">
           <table>
              <tr>
            <th onmouseover="return EfeitoTabelaProduto();" onmouseout="return EfeitoTabelaProdutosTH();"><h3 title="Produto" id="THPRODUTO">Produto</h3></th>        
            <th onmouseover="return EfeitoTabelaQuantidade();" onmouseout="return EfeitoTabelaQuantidadeTH();"><h3 title="Quantidade" id="THQUANTIDADE" >Quantidade</h3></th>
            <th onmouseover="return EfeitoTabelaCategoria();" onmouseout="return EfeitoTabelaCategoriaTH();"><h3 title="Categoria" id="THCATEGORIA" >Categoria</h3></th>
            <th onmouseover="return EfeitoTabelaVendido();" onmouseout="return EfeitoTabelaVendidoTH();"><h3 title="Vendido" id="THVENDIDO">Vendido</h3></th>
            <th onmouseover="return EfeitoTabelaPreco();" onmouseout="return EfeitoTabelaPrecoTH();"><h3 title="Preço" id="THPRECO">Preço</h3></th>
            <th onmouseover="return EfeitoTabelaPostado();" onmouseout="return EfeitoTabelaPostadoTH();"><h3 title="Postado" id="THPOSTADO">Postado</h3></th>
        </tr>
              <tr>
              <td id="TDPRODUTO">'.$ArraySearchIdenticalDB['Produto'].'</td>
              <td id="TDQUANTIDADE" >'.$ArraySearchIdenticalDB['Quantidade'].'</td>
              <td id="TDCATEGORIA">'.$ArraySearchIdenticalDB['Categoria'].'</td>
              <td id="TDPRECO">'.$ArraySearchIdenticalDB['Vendidos'].'</td>
              <td id="TDPRECO">R$'.$ArraySearchIdenticalDB['Preco'].'</td>
              <td id="TDPOSTADO">'.$this->Postado.'</td>
              <td><a href="Alterar.php?id='.$ArraySearchIdenticalDB['id'].'">Alterar</a><td/>
           </tr>   
             </table>
          </section>';
 
    }
   
     }
}
public function SearchAll($conecta){
   if($this-> Session == true){
      $ArraySearchSession = array($_SESSION['SearchOption']);
      if($ArraySearchSession[0] == "Todos"){ 
     $SelectSearchidenticalAll = $conecta->query("SELECT id,Produto, Quantidade, Vendidos, Categoria, Preco, Postado FROM produto");
  
     while ($ArraySearchIdenticalAllDB = $SelectSearchidenticalAll->fetch(PDO::FETCH_ASSOC)) {
      if($ArraySearchIdenticalAllDB['Postado'] == "N"){
         $this-> Postado = "Não";
        }else if($ArraySearchIdenticalAllDB['Postado'] == "S"){
           $this-> Postado = "Sim";
        }else if($ArraySearchIdenticalAllDB['Postado'] == "A"){
          $this-> Postado = "Apenas Cadastrado";
        }else{
         // Levar Para Tratamento De Erros
          echo "Error"; 
        }
      echo '
        <section class="Tabela">
           <table>
              <tr>
            <th onmouseover="return EfeitoTabelaProduto();" onmouseout="return EfeitoTabelaProdutosTH();"><h3 title="Produto" id="THPRODUTO">Produto</h3></th>        
            <th onmouseover="return EfeitoTabelaQuantidade();" onmouseout="return EfeitoTabelaQuantidadeTH();"><h3 title="Quantidade" id="THQUANTIDADE" >Quantidade</h3></th>
            <th onmouseover="return EfeitoTabelaCategoria();" onmouseout="return EfeitoTabelaCategoriaTH();"><h3 title="Categoria" id="THCATEGORIA" >Categoria</h3></th>
            <th onmouseover="return EfeitoTabelaVendido();" onmouseout="return EfeitoTabelaVendidoTH();"><h3 title="Vendido" id="THVENDIDO">Vendido</h3></th>
            <th onmouseover="return EfeitoTabelaPreco();" onmouseout="return EfeitoTabelaPrecoTH();"><h3 title="Preço" id="THPRECO">Preço</h3></th>
            <th onmouseover="return EfeitoTabelaPostado();" onmouseout="return EfeitoTabelaPostadoTH();"><h3 title="Postado" id="THPOSTADO">Postado</h3></th>
        </tr>
              <tr>
              <td id="TDPRODUTO">'.$ArraySearchIdenticalAllDB['Produto'].'</td>
              <td id="TDQUANTIDADE" >'.$ArraySearchIdenticalAllDB['Quantidade'].'</td>
              <td id="TDCATEGORIA">'.$ArraySearchIdenticalAllDB['Categoria'].'</td>
              <td id="TDPRECO">R$'.$ArraySearchIdenticalAllDB['Vendidos'].'</td>
              <td id="TDPRECO">R$'.$ArraySearchIdenticalAllDB['Preco'].'</td>
              <td id="TDPOSTADO">'.$this-> Postado.'</td>
              <td><a href="Alterar.php?id='.$ArraySearchIdenticalAllDB['id'].'">Alterar</a><td/>
           </tr>   
             </table>
          </section>
      ';

     }
}
 }
   
}
 }
$Search = new SearchInputDB();
?>