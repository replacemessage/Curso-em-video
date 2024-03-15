
    /*Pega a identificação dos botões*/
//var a = document.getElementById("loginBtn");
//var b = document.getElementById("registerBtn");
    /*Pega a identificação das div's "card-"*/
var x = document.getElementById("k-login");
var y = document.getElementById("k-cadastro");
    
function login() {
     x.style.left = "20px";        
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

