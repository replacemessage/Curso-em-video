<?php

 //Dados de conecxão do DB
    $SERVER   = 'localhost';
    $USER     = 'root';
    $PASSWORD = '';
    $DB       = 'cadastro';

    //Coneção dom banco de dados
    $conect  = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
/*
    if ($conect->connect_error){
        die("Falha na coneção com banco de dados: ".$conect->connect_error);
    }else{
        die("Operação feita com sucesso");
    }*/
?>
