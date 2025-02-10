<?php

	require_once '../Model/conexao.php';
	$envia = new Conexao("juquery", "localhost","root", "");

	if (isset($_FILES['img-input'])) {
		
		$arquivo = $_FILES['img-input'];
		
		if ($arquivo['size']>10485760) 
		die("Arquivo excedeu o limite, máximo de 10MB");

		if ($arquivo['error']) 
		die("falha ao carregar");


		$pasta = "../View/images/";
		$pasta2 = "../Memorial-Juquery/View/images/";

		$nomeArq = $arquivo['name'];
		$nomeCod = uniqid();
		$extensao = strtolower(pathinfo($nomeArq, PATHINFO_EXTENSION));
		$titulo = addslashes($_POST['title_img']);
		$desc = addslashes($_POST['text_descrition']);

		$path = $pasta.$nomeCod.".".$extensao;	
		$path2 = $pasta2.$nomeCod.".".$extensao;			

		if ($extensao != 'jpg' && $extensao != 'png') {
			die("arquivo inválido");}

			$arquivoUpload = move_uploaded_file($arquivo["tmp_name"],$path);
			$arquivoUpload2 = move_uploaded_file($arquivo["tmp_name"],$path2);

			$envia->insereGaleria($nomeCod, $nomeArq, $path, $path2, $titulo, $desc);

}
	
		//die("arquivo chegou na variével");

if (isset($_POST['id']))
 {
	$id = addslashes($_POST['id']);
	$Extatus = addslashes($_POST['Extatus']);

	if ($Extatus == 0) {

		$retorno = $envia->publicarImg($id, $Extatus);
	}
	if ($Extatus == 1) {
		$retorno = $envia->rascunhoImg($id, $Extatus);
	}
}
	
	
	header('Location: ../../Memorial-Juquery-vw-admin/pagAdmin-galeria-imagem.php');
	echo "<script>alert('Arquivo enviado com sucesso');</script>";
?>