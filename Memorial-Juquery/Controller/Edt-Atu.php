<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

$id = addslashes($_POST['id']);
$descricao = addslashes($_POST['txtdescricao']);
$titulo = addslashes($_POST['txttitulo']);
$conteudo = addslashes($_POST['txtconteudo']);
$idImagem = addslashes($_POST['txtimagem']);
$dataAtua = addslashes($_POST['txtdata']);
$linkAtua = addslashes($_POST['txtlinkatua']);

$envia->alteraAtu($id, $titulo, $descricao, $conteudo,  $dataAtua, $idImagem, $linkAtua);

?>