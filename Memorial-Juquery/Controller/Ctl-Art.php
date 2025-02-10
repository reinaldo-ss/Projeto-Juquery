<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

	


if (isset($_POST['txtimagem'])) {
	
$titulo = addslashes($_POST['text_title']);
$compositor = addslashes($_POST['text_subtitle']);
$Informacao = addslashes($_POST['text_info']);
$idImagem = addslashes($_POST['txtimagem']);


$envia->insereArtistas($titulo, $compositor, $Informacao, $idImagem);
}

    
if (isset($_POST['id']))
 {
	$id = addslashes($_POST['id']);
	$Extatus = addslashes($_POST['Extatus']);

	if ($Extatus == 0) {
		$retorno = $envia->publicarArt($id, $Extatus);
	}
	if ($Extatus == 1) {
		$retorno = $envia->rascunhoArt($id, $Extatus);
	}
}
header('Location: ../../Memorial-Juquery-vw-admin/pagAdmin-artistas.php');
echo "<script>alert('Arquivo enviado com sucesso');</script>";


?>
