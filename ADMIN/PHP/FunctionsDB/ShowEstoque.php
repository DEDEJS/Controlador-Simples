<?php
ini_set('default_charset','UTF-8'); 
class ShowEstoque{
   public $Postado;
   public function ShowStock($conecta){
    $Select = $conecta->query("SELECT id,Produto, Quantidade, Categoria, Vendidos, Preco, Postado  FROM Produto limit 3;");
 echo "
 <div> 
   <h1 title='Produtos Cadastrados'>Produtos Cadastrados</h1>
</div>
 ";

while ($SelectLinha = $Select->fetch(PDO::FETCH_ASSOC)) {
      if($SelectLinha['Postado'] == "N"){
         $this-> Postado = "Não";
      }else if($SelectLinha['Postado'] == "S"){
         $this-> Postado = "Sim";
      }else if($SelectLinha['Postado'] == "A"){
        $this-> Postado = "Apenas Cadastrado";
      }else{
         $this-> Postado = "Error";
      }
   echo '
   <section class="Tabela">
   <table>
<tr>
    <th onmouseover="return EfeitoTabelaProduto();" onmouseout="return EfeitoTabelaProdutosTH();"><h3 title="Produto" id="THPRODUTO">Produto</h3></th>        
    <th onmouseover="return EfeitoTabelaQuantidade();" onmouseout="return EfeitoTabelaQuantidadeTH();"><h3 title="Quantidade" id="THQUANTIDADE" >Quantidade</h3></th>
    <th onmouseover="return EfeitoTabelaCategoria();" onmouseout="return EfeitoTabelaCategoriaTH();"><h3 title="Categoria" id="THCATEGORIA">Categoria</h3></th>
    <th onmouseover="return EfeitoTabelaVendido();" onmouseout="return EfeitoTabelaVendidoTH();"><h3 title="Vendido" id="THVENDIDO">Vendido</h3></th>
    <th onmouseover="return EfeitoTabelaPreco();" onmouseout="return EfeitoTabelaPrecoTH();"><h3 title="Preço" id="THPRECO">Preço</h3></th>
    <th onmouseover="return EfeitoTabelaPostado();" onmouseout="return EfeitoTabelaPostadoTH();"><h3 title="Postado" id="THPOSTADO">Postado</h3></th>
    <th onmouseover="return EffectTableChange();" onmouseout="return EffectTableChangeTH();"><h3 title="Alterar" id="THALTERAR">Alterar</h3></th>
</tr>
   <tr>
    <td id="TDPRODUTO">'.$SelectLinha['Produto'].'</td>
    <td id="TDQUANTIDADE" >'.$SelectLinha['Quantidade'].'</td>
    <td id="TDCATEGORIA">'.$SelectLinha['Categoria'].'</td>
    <td id="TDVENDIDO">'.$SelectLinha['Vendidos'].'</td>
    <td id="TDPRECO">R$'.$SelectLinha['Preco'].'</td>
    <td id="TDPOSTADO">'.$this-> Postado.'</td>
    <td><a href="Alterar.php?id='.$SelectLinha['id'].'">Alterar</a></td>
 </tr>   
  </table>
  </section>
 ';
  
}
}
/*public function ChangeProduct(){
    include_once("Banco.php");
 
    $Id = $_GET['Alterar'];
    $SelectPrudutoId = $conecta->query("SELECT id,Produto, Quantidade, Categoria, Preco, Postado FROM produto WHERE id= $Id");
    while ($SelectId = $SelectPrudutoId->fetch(PDO::FETCH_ASSOC)) {

    echo '
    <tr>
    <th onmouseover="return EfeitoTabelaProduto();" onmouseout="return EfeitoTabelaProdutosTH();"><h3 title="Produto" id="THPRODUTO">Produto</h3></th>        
    <th onmouseover="return EfeitoTabelaQuantidade();" onmouseout="return EfeitoTabelaQuantidadeTH();"><h3 title="Quantidade" id="THQUANTIDADE" >Quantidade</h3></th>
    <th onmouseover="return EfeitoTabelaCategoria();" onmouseout="return EfeitoTabelaCategoriaTH();"><h3 title="Categoria" id="THCATEGORIA" >Categoria</h3></th>
    <th onmouseover="return EfeitoTabelaVendido();" onmouseout="return EfeitoTabelaVendidoTH();"><h3 title="Vendido" id="THVENDIDO">Vendido</h3></th>
    <th onmouseover="return EfeitoTabelaPreco();" onmouseout="return EfeitoTabelaPrecoTH();"><h3 title="Preço" id="THPRECO">Preço</h3></th>
    <th onmouseover="return EfeitoTabelaCodigo();" onmouseout="return EfeitoTabelaCodigoTH();"><h3 title="Código" id="THCODIGO">Código</h3></th>
    <th onmouseover="return EfeitoTabelaPostado();" onmouseout="return EfeitoTabelaPostadoTH();"><h3 title="Postado" id="THPOSTADO">Postado</h3></th>
</tr>
    <tr>
    <td id="TDPRODUTO">'.$SelectId['Produto'].'</td>
    <td id="TDQUANTIDADE" >'.$SelectId['Quantidade'].'</td>
    <td id="TDCATEGORIA">'.$SelectId['Categoria'].'</td>
    <td id="TDPRECO">R$'.$SelectId['Preco'].'</td>
    <td id="TDPOSTADO">'.$SelectId['Postado'].'</td>
    <td><a href="Estoque.php">Voltar</a><td/>
 </tr>   ';
   }
}*/ 
}
$ShowEstoque = new ShowEstoque();
?>