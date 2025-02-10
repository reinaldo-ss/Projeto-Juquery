<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

$id = addslashes($_POST['id']);
$idImagem = addslashes($_POST['txtimagem']);
$diaSemana = addslashes($_POST['txtdiasemana']);
$diaMes = addslashes($_POST['txtdiames']);
$mes = addslashes($_POST['txtmes']);
$ano = addslashes($_POST['txtano']);
$horario = addslashes($_POST['txthorario']);
$descricao = addslashes($_POST['txtdescricao']);
$nomeEvento = addslashes($_POST['txtnomevento']);
$localizacao = addslashes($_POST['txtlocalizacao']);
$linkEvento = addslashes($_POST['txtlinkevento']);

$envia->alteraEve($id, $idImagem, $diaSemana, $diaMes, $mes, $horario, $nomeEvento, $ano, $localizacao, $linkEvento, $descricao);

?>