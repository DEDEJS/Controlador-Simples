<?php 
ini_set('default_charset','UTF-8');
 $IdProduto = $UrlALterarProduto -> GetDadosUrlID();
 $DadoInput = $UrlALterarProduto -> GetDadosUrlAlterar();

  include_once("ValidaCadastro.php");

 class ShowInput{
  public function ShowInputExcluir($DadoInput, $Url, $Dados, $DBDADOS){
     if($DadoInput == "Excluir"){      
    echo ' 
         <h1>Deseja Mesmo Excluir?<h1><br>
         <button><a href="PHP/FunctionsDB/Excluir.php?id='.$Url.'">Excluir</a></button>
         <button><a href="">Não</a></button>
        ';
       
       }
  }
public function ShowDadosInputProduto($DadoInput, $CadastroValidado, $Produto){
if($DadoInput == "Produto"){
echo '
<div class="ProdutoForm" id="ProdutoForm">
<h3>Alterar Produto</h3>
<p>'; $CadastroValidado-> ValidaProduto($Produto); echo '</p>
<input type="text" placeholder="Produto" name="ProdutoAlterar" id="Produto" title="Produto" >
<input type="submit" name="SubmitProduto" value="Alterar">
</div>
';

}
    }
    public function ShowDadosInputQuantidade($DadoInput, $CadastroValidado, $Quantidade){
      if($DadoInput == "Quantidade"){
         echo ' 
      <div class="QuantidadeForm" id="QuantidadeForm">
      <h3>Alterar Quantidade</h3>
      <p>'; $CadastroValidado-> ValidaQuantidade($Quantidade); echo '</p>
      <input type="text" placeholder="Quantidade" name="QuantidadeAlterar" id="Quantidade" title="Quantidade" value="">
      <input type="submit" value="Alterar">
      </div>
         ';
      }
    }
    public function ShowDadosInputCategoria($DadoInput, $CadastroValidado, $Categoria){
      if($DadoInput == "Categoria"){
         echo '
       <div class="CategoriaForm" id="CategoriaForm">
       <h3>Alterar Categoria</h3>
       <p>'; $CadastroValidado-> ValidaCategoria($Categoria); echo '</p>
       <select name="Categoria" id="Categoria">
             <option>---</option>
             <option>Masculino</option>
             <option>Feminino</option>
             <option>Infantil</option>
        </select>
       <input type="submit" value="Alterar">
       </div>
         ';
       }
    }
    public function ShowDadosInputPreco($DadoInput, $CadastroValidado, $Preco){
      if($DadoInput == "Preco"){
         echo '
        <div class="PrecoForm" id="PrecoForm">
        <h3>Alterar Preço</h3>
        <p>'; echo $CadastroValidado-> ValidaPreco($Preco); echo '</p>
        <input type="number" placeholder="Preço" name="Preco" id="Preco" title="Preço" >
        <input type="submit" value="Alterar">
      
        </div>
        ';
      }
    }
    public function ShowDadosInputPostado($DadoInput, $CadastroValidado, $Postar){
    
            if($DadoInput == "Postado"){
         echo '
         <div class="PostadoForm" id="PostadoForm"> 
          <h3>Postar</h3>
          <p>'; echo $CadastroValidado-> ValidaPostar($Postar); echo'</p>
          <select name="Postar" id="Postar" title="Postar">
          <option>---</option>
          <option>Sim</option>
          <option>Não</option>
          <option>Apenas Cadastrar No Sistema</option>
          </select>
          <input type="submit" value="Alterar">
        </div>
         ';
      }
    }
 }
$ShowInput = new ShowInput();
?>