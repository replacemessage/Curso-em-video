<?php
include 'conexao.php';

// Inicia sessões
session_start();

/* Recupera o login
    isset => Determina se uma variável está declarada passada pelo post e se é diferente de NULL
    addslashes => Retorna uma string com barras invertidas adicionadas antes dos caracteres que precisam ser escapados
    trim => Retira espaço (ou outros caracteres) do início e do final de uma string
*/
$Lusuario = isset($_POST["usuario"]) ? addslashes(trim($_POST["usuario"])) : FALSE;
// Recupera a senha, a criptografando em MD5
//$Lpwd = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; //md5

$Lpwd = isset($_POST["senha"]) ? addslashes(trim($_POST["senha"])) : FALSE; //md5

// Usuário não forneceu a senha ou o login
if(!$Lusuario || !$Lpwd)
{
	echo("Voce deve digitar sua senha e login!");
	exit;
}else{
    echo("Tudo ok");
    
}

/**
* Executa a consulta no banco de dados.
* Caso o número de linhas retornadas seja 1 o login é válido,
* caso 0, inválido.
*/
//$SQL = "SELECT id, nome, email,senha FROM usuario WHERE login = $usuario";
$SQL = "SELECT * FROM usuario WHERE nome = '$Lusuario' ";

$result_id = @mysqli_query($conect,$SQL,MYSQLI_STORE_RESULT) or 
die(" <br>Erro no banco de dados!<br>[ERROR]=>".$conect->error);
$total = @mysqli_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)
{
	// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
	$dados = @mysqli_fetch_array($result_id);

	// Agora verifica a senha
	if(!strcmp($Lpwd, $dados["senha"]))
	{
        echo"verificando a senha";
		// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
		$_SESSION["id_usuario"]= $dados["id"];
		$_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
		$_SESSION["permissao"]= $dados["postar"];
		header("Location: index.php");
		exit;
	}
	// Senha inválida
	else
	{
        echo "Senha inválida!";
	    exit;
	}
}
	// Login inválido
else
{
	echo "O login fornecido por você é inexistente!";
	exit;
}
//$conect->close();
?>