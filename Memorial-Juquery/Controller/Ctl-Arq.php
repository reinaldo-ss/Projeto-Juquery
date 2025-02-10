<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

if (isset($_POST['txtimagem']))
 {
$titulo = addslashes($_POST['txttitulo']);
$idImagem = addslashes($_POST['txtimagem']);
$subtitulo = addslashes($_POST['txtsub']);
$linkArq = addslashes($_POST['txtlinkarq']);
$conteudo = addslashes($_POST['txtconteudo']);

$envia->insereArquitetura($idImagem, $titulo, $conteudo, $subtitulo, $linkArq);

}

	if (isset($_POST['id']))
 {
	$id = addslashes($_POST['id']);
	$Extatus = addslashes($_POST['Extatus']);

	if ($Extatus == 0) {
		$retorno = $envia->publicarArq($id, $Extatus);
	}
	if ($Extatus == 1) {
		$retorno = $envia->rascunhoArq($id, $Extatus);
	}
}


	header('Location: ../../Memorial-Juquery-vw-admin/pagAdmin-arquitetura.php');
	echo "<script>alert('Arquivo enviado com sucesso');</script>";
?>