/*Pega a identificação dos botões*/
//var a = document.getElementById("loginBtn");
//var b = document.getElementById("registerBtn");
    /*Pega a identificação das div's "card-"*/
var x = document.getElementById("k-login");
var y = document.getElementById("k-cadastro");
var password = document.getElementById("senha");

var iconpwd = document.getElementById("olho");
function login() {
     x.style.left = "55px";        
     y.style.right = "-520px";

   //  a.className += "white-btn";
    // b.className = "btn";
}
function register() {   
     x.style.left = "-520px"; 
     y.style.right = "20px";

    // a.className += "btn";
    // b.className = "white-btn";
}
function showpwd(){
    if (password.type === 'password'){
        password.setAttribute('type','text');
        iconpwd.classList.replace('bi-eye-slash-fill','bi-eye-fill');    
    }else{
        password.setAttribute('type', 'password');
        iconpwd.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');  
    }
}
