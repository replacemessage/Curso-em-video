<?php
include 'conexao.php';
    //Dados dos formulário
    $pnome   = $_POST['nome'];
    $pemail  = $_POST['email'];
    $psenha  = $_POST['newpws'];

    $smtp = $conect->prepare("INSERT INTO usuario (nome,email,senha) VALUES (?,?,?)");
    $smtp->bind_param("sss",$pnome,$pemail,$psenha);
    
    if($smtp->execute()){
        echo"Cadastro enviado com sucesso!";
    }else{
        echo"Erro no envio do cadastro: ".$smtp->error;
    }
    $smtp->close();
    $conect->close();
    ?>