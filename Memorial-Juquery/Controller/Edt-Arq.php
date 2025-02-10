<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

$id = addslashes($_POST['id']);
$titulo = addslashes($_POST['txttitulo']);
$idImagem = addslashes($_POST['txtimagem']);
$subtitulo = addslashes($_POST['txtsub']);
$linkArq = addslashes($_POST['txtlinkarq']);
$conteudo = addslashes($_POST['txtconteudo']);

$envia->alteraArq($id, $titulo, $idImagem, $subtitulo, $linkArq, $conteudo);

?>