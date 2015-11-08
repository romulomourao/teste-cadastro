<!DOCTYPE html PUBLIC>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
 
<body>
<?php 
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
 
$host= 'localhost';
$bd= 'lineup';
$senhabd= '';
$userbd = 'root'; 
 
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$nCartao	= $_POST ["ncard"];	//atribuição do campo "email" vindo do formulário para variavel
$dataExp	= $_POST ["dataexp"];	//atribuição do campo "ddd" vindo do formulário para variavel
$cvc	= $_POST ["cvc"];	//atribuição do campo "telefone" vindo do formulário para variavel

//Gravando no banco de dados !
 
//conectando com o localhost - mysql
$conexao = new mysqli($host,$userbd, $senhabd, $bd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ");
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ");
 
 
 
$query = "INSERT INTO `cartao` ( `Nome` , `numeroDoCartao` , `DataExp` , `CVC`) 
VALUES ($nome, $nCartao, $dataExp, $cvc)";
 
mysql_query($query,$conexao);
 
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

?> 
</body>
</html>