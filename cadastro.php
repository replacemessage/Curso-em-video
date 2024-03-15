<?php

    //Dados dos formulário
    $pnome   = $_POST['nome'];
    $pemail  = $_POST['email'];
    $psenha  = $_POST['newpws'];

    //Dados de conecxão do DB
    $SERVER   = 'localhost';
    $USER     = 'root';
    $PASSWORD = '';
    $DB       = 'cadastro';

    //Coneção dom banco de dados
    $conect  = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);

    if ($conect->connect_error){
        die("Falha na coneção com banco de dados: ".$conect->connect_error);
    }

    $smtp = $conect->prepare("INSERT INTO usuario (nome,email,senha) VALUES (?,?,?)");
    $smtp->bind_param("sss",$pnome,$pemail,$psenha);
    
    if($smtp->execute()){
        echo"Cadastro enviado com sucesso!";
    }else{
        echo"Erro no envio do cadastro: ".$smtp->error;
    }
    $smtp->close();
    $conect->close();