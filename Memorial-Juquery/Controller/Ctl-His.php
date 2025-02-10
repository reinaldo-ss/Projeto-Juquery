<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

if (isset($_POST['id']))
 {
	$id = addslashes($_POST['id']);
	$Extatus = addslashes($_POST['Extatus']);

	if ($Extatus == 0) {
		$retorno = $envia->publicarHis($id, $Extatus);
	}
	if ($Extatus == 1) {
		$retorno = $envia->rascunhoHis($id, $Extatus);
	}

	
}

if (isset($_POST['txtimagem']))
 {
	$titulo = addslashes($_POST['txttitulo']);
	$conteudo = addslashes($_POST['txtconteudo']);
	$ano = addslashes($_POST['txtano']);
	$idImagem = addslashes($_POST['txtimagem']);
	$envia->insereHistoria($idImagem, $titulo, $ano, $conteudo);
}


	header('Location: ../../Memorial-Juquery-vw-admin/pagAdmin-historia.php');
	echo "<script>alert('Arquivo enviado com sucesso');</script>";
?>