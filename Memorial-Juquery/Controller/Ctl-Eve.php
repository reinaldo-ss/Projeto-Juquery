<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");


if (isset($_POST['txtimagem']))
 {
	$diaSemana = addslashes($_POST['txtdiasemana']);
	$diaMes = addslashes($_POST['txtdiames']);
	$mes = addslashes($_POST['txtmes']);
	$ano = addslashes($_POST['txtano']);
	$horario = addslashes($_POST['txthorario']);
	$descricao = addslashes($_POST['txtdescricao']);
	$nomeEvento = addslashes($_POST['txtnomevento']);
	$localizacao = addslashes($_POST['txtlocalizacao']);
	$linkEvento = addslashes($_POST['txtlinkevento']);
	$idImagem = addslashes($_POST['txtimagem']);

	$envia->insereEvento($idImagem, $diaSemana, $diaMes, $mes, $horario, $nomeEvento, $ano, $localizacao, $linkEvento, $descricao);
}

if (isset($_POST['id']))
 {
	$id = addslashes($_POST['id']);
	$Extatus = addslashes($_POST['Extatus']);

	if ($Extatus == 0) {
		$retorno = $envia->publicarEve($id, $Extatus);
	}
	if ($Extatus == 1) {
		$retorno = $envia->rascunhoEve($id, $Extatus);
	}

	
}

	

	header('Location: ../../Memorial-Juquery-vw-admin/pagAdmin-eventos.php');
	echo "<script>alert('Arquivo enviado com sucesso');</script>";
?>