
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("card-login");
    var y = document.getElementById("card-cadastro");

    function login()
    {
        x.style.left = "4px";
    y.style.right="-520px";
    a.className +="white-btn";
    b.className = "btn";
    }
    function register()
    {
        x.style.left = "-510px";
    y.style.right="-5px";
    a.className +="btn";
    b.className = "white-btn";
    }

