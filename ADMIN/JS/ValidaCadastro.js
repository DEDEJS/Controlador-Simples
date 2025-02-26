function ProdutoValida(){
    Produto = document.getElementById('Produto');
    if(Produto.value.length <=2){
        Produto.style.border = '3px solid black';
        Produto.style.borderColor = 'red';
    }else if(Produto.value.match(/\d+/g)){
        Produto.style.border = '3px solid black';
        Produto.style.borderColor = 'red';
    }else{
        Produto.style.borderColor = 'black';
        Produto.style.border = 'none';
    }
}
function QuantidadeValida(){
     Quantidade = document.getElementById('Quantidade');
     if(Quantidade.value.length <=0){
        Quantidade.style.border = '3px solid black';
        Quantidade.style.borderColor = 'red';
    }else if(Quantidade.value.match(/\D/g)){
        Quantidade.style.border = '3px solid black';
        Quantidade.style.borderColor = 'red';
    }else{
        Quantidade.style.borderColor = 'black';
        Quantidade.style.border = 'none';
    }
}
function PrecoValida(){
    Preco = document.getElementById('Preco');
    if(Preco.value.length <=0){
        Preco.style.border = '3px solid black';
        Preco.style.borderColor = 'red';
   }else if(Preco.value.match(/\D/g)){
    Preco.style.border = '3px solid black';
    Preco.style.borderColor = 'red';
   }else{
        Preco.style.borderColor = 'black';
        Preco.style.border = 'none';
   }
}
function PostarValida(){
    Postar = document.getElementById('Postar');

    if(Postar.value == "---"){
        Postar.style.border = '3px solid black';
        Postar.style.borderColor = 'red';
   }else{
        Postar.style.borderColor = 'black';
        Postar.style.border = 'none';
   }
}
function CategoriaValida(){
    Categoria = document.getElementById('Categoria');
    if(Categoria.value == "---"){
        Categoria.style.border = "3px solid red";
    }else{
        Categoria.style.borderColor = 'black';
        Categoria.style.border = 'none';
    }
}
function InputCadastro(){
    var InputCadastro = [setInterval(ProdutoValida, 1000),
         setInterval(QuantidadeValida, 1000),
         setInterval(PrecoValida, 1000),
         setInterval(PostarValida, 1000),
         setInterval(CategoriaValida, 1000)];
    
    var Interval = function() {
   },InputCadastro;
    clearInterval(Interval);
   }
   