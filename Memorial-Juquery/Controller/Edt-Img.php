<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

	$titulo = addslashes($_POST['txttitulo']);
	$desc = addslashes($_POST['txtdesc']);
	$id = addslashes($_POST['txtid']);
	$envia->alteraImg($titulo, $desc, $id);

	?>