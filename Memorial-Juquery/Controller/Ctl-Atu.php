<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

if (isset($_POST['txtimagem']))
 {
$descricao = addslashes($_POST['txtdescricao']);
$titulo = addslashes($_POST['txttitulo']);
$conteudo = addslashes($_POST['txtconteudo']);
$linkAtua = addslashes($_POST['txtlinkatua']);
$idImagem = addslashes($_POST['txtimagem']);
$dataAtua = addslashes($_POST['txtdata']);

$envia->insereAtualidade($titulo, $descricao, $conteudo, $linkAtua, $dataAtua, $idImagem);
}

	if (isset($_POST['id']))
 {
	$id = addslashes($_POST['id']);
	$Extatus = addslashes($_POST['Extatus']);

	if ($Extatus == 0) {
		$retorno = $envia->publicarAtu($id, $Extatus);
	}
	if ($Extatus == 1) {
		$retorno = $envia->rascunhoAtu($id, $Extatus);
	}
}else{
	
}


	header('Location: ../../Memorial-Juquery-vw-admin/pagAdmin-atualidades.php');
	echo "<script>alert('Arquivo enviado com sucesso');</script>";
?>