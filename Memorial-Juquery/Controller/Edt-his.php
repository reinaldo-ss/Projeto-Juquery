<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

    $id = addslashes($_POST['txtid']);
    $titulo = addslashes($_POST['txttitulo']);
	$conteudo = addslashes($_POST['txtconteudo']);
	$ano = addslashes($_POST['txtano']);
	$idImagem = addslashes($_POST['txtimagem']);
	$envia->alteraHis($id, $idImagem, $titulo, $ano, $conteudo);

?>