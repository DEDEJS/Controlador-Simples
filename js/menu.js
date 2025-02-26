function Menu(){
var MenuIcon = document.getElementById('MenuCelular');
var Carrinho = document.getElementById('carrinho');
var Logar = document.getElementById('Logar');
var Cadastrar = document.getElementById('Cadastrar');
var IconFechar = document.getElementById('FecharMenuCelular');
if(MenuIcon.onclick){
    MenuIcon.style.display = "none";
    Carrinho.style.display = "block";
    Logar.style.display = "block" ;
    Cadastrar.style.display = "block"  ;
    IconFechar.style.display = "block";
}
}
function FecharMenu(){
    var MenuFechar = document.getElementById('FecharMenuCelular');
    var MenuIcon = document.getElementById('MenuCelular');

    var Logo = document.getElementById('logo');
var Carrinho = document.getElementById('carrinho');
var Logar = document.getElementById('Logar');
var Cadastrar = document.getElementById('Cadastrar');
var IconFechar = document.getElementById('FecharMenuCelular');
if(MenuFechar.onclick){
MenuIcon.style.display = "block";
    Logo.style.display = "none";
    Carrinho.style.display = "none";
    Logar.style.display = "none" ;
    Cadastrar.style.display = "none"  ;
    IconFechar.style.display = "none";
}
}