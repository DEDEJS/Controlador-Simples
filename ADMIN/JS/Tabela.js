
function Variaveis(){

    Product = [
        ProductTh = document.getElementById('THPRODUTO'), 
        ProductTd = document.getElementById('TDPRODUTO')
    ];
    Quantity = [
        Quantity = document.getElementById('THQUANTIDADE'), 
        Quantity = document.getElementById('TDQUANTIDADE')
    ];
    Category = [
        CategoryTh = document.getElementById('THCATEGORIA'), 
        CategoryTd = document.getElementById('TDCATEGORIA')
    ];
    Sold = [
        SoldTh = document.getElementById('THVENDIDO'), 
        SoldTd = document.getElementById('TDVENDIDO')
    ];
    Price = [
        PriceTh = document.getElementById('THPRECO'), 
        PriceTd = document.getElementById('TDPRECO')
    ];
    Code = [
        CodeTh = document.getElementById('THCODIGO'), 
        CodeTd = document.getElementById('TDCODIGO')
    ];
    Posted = [
        PostedTh = document.getElementById('THPOSTADO'), 
        PostedTd = document.getElementById('TDPOSTADO')
    ];
    Change = [
        ChangeTh = document.getElementById('THALTERAR'), 
        ChangeTd = document.getElementById('TDALTERAR')
    ];
    return Product, Quantity, Category, Sold, Price, Code, Posted, Change;
 }
 function EffectTableProduct(){
     let = Variaveis();
     if(Product[0]){
         return Product[1].style.color = 'red';
      }
 }
 function EffectTableProductTH(){
    let = Variaveis();
    if(Product[0]){
        return Product[1].style.color = 'black';
     }
}
 function EffectTableQuantity(){
     let = Variaveis();
     if(Quantity[0]){
         return Quantity[1].style.color = 'red';
      }
 }
 function EffectTableQuantityTH(){
    let = Variaveis();
    if(Quantity[0]){
       return Quantity[1].style.color = 'black';
    }
}
 function EffectTableCategory(){
    let = Variaveis();
    if(Category[0]){
        return Category[1].style.color = 'red';
     }
}

function EffectTableCategoryTH(){
    let = Variaveis();
    if(Category[0]){
       return Category[1].style.color = 'black';
    }
}
function EffectTableSold(){
    let = Variaveis();
    if(Sold[0]){
        return Sold[1].style.color = 'red';
     }
}
function EffectTableSoldTH(){
    let = Variaveis();
    if(Sold[0]){
       return Sold[1].style.color = 'black';
    }
}
 function EffectTablePrice(){
     let = Variaveis();
     if(Price[0]){
         return Price[1].style.color = 'red';
     }
 }
 function EffectTablePriceTH(){
    let = Variaveis();
     if(Price[0]){
        return Price[1].style.color = 'black';
     }
}
 function EffectTableCode(){
     let = Variaveis();
      if(Code[0]){
         return Code[1].style.color = 'red';
      }
 }
 function EffectTableCodeTH(){
    let = Variaveis();
     if(Code[0]){
        return Code[1].style.color = 'black';
     }
}
 function EffectTablePosted(){
     let = Variaveis();
      if(Posted[0]){
         return Posted[1].style.color = 'red';
      }
 }
 function EffectTablePostedTH(){
     let = Variaveis();
     if(Posted[0]){
         return Posted[1].style.color = 'black';
     }
 }
function EffectTableChange(){
    let = Variaveis();
    if(Change[0]){
         return Change[1].style.color = 'red';
    }
}
function EffectTableChangeTH(){
    let = Variaveis();
    if(Change[0]){
        return Change[1].style.color = 'black';
    }
}