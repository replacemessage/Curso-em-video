<?php
$hostname ="localhost";
$bancodedados="cadastro";
$usuario="root";
$senha="";

$mysqli = new mysqli($hostname, $usuario,$senha, $bancodedados);
if ($mysqli -> connect_errno)
{
    echo "Falha na conexao: (". $mysqli->connect_errno . ")". $mysqli->connect_error;
}