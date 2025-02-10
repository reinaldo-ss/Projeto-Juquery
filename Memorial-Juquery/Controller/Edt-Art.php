<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

$id = addslashes($_POST['id']);
$titulo = addslashes($_POST['txttitulo']);
$idImagem = addslashes($_POST['txtimagem']);
$autor = addslashes($_POST['txtautor']);
$caminho = addslashes($_POST['txtcaminho']);

$envia->alteraArt($id, $idImagem, $titulo, $autor, $caminho);

?>