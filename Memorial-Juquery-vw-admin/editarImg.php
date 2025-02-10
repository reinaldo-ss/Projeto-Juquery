<?php
require_once '../Memorial-Juquery/Model/conexao.php';
$envia = new Conexao("juquery", "localhost", "root", "");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>
    (function(d) {
      var s = d.createElement("script");
      s.setAttribute("data-account", "asfBZcBqQ3");
      s.setAttribute("src", "../Memorial-Juquery/view/js/cdn.userway.org_widget.js");
      (d.body || d.head).appendChild(s);
    })(document)
  </script>
  <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

  <link rel="shortcut icon" type="image/x-icon" href="../Memorial-Juquery/view/images/favicon.ico">

  <title>Memorial Juquery - Admin - Galeria</title>

  <!-- =============== Link CSS =============== -->
  <link rel="stylesheet" type="text/css" href="../Memorial-Juquery/view/css/styles.css">
</head>
<body id="overflowFixedAdm">

  <?php
  /*================ ACESSO A FUNÇÃO PARA PREENCHER CAMPO ALTERAÇÃO ===========*/

  if (isset($_GET['id_up'])) {
    $idAltera = addslashes($_GET['id_up']);
    $retorno = $envia->consultaUpdateImg($idAltera);
  }
  ?>


  <!-- ======================= CONTEUDO ======================= -->
  <div class="adm">
    <h1>Administrador</h1>

    <h2>Editar em "Galeria"</h2>
    <form method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Edt-Img.php">

      <p class="align-obj">Devido a politica do site, <b>poderam ser alterados título e legenda sem exclusão de imagens</b></p>

      <input type="text" name="txtid" value="
      <?php if (isset($retorno)) {
        echo $retorno['id'];
      } ?>" hidden>

      <label for="text_title">Título Imagem</label>
      <input type="text"  name="txttitulo" id="text_title"  value="
      <?php if (isset($retorno)) {
        echo $retorno['titulo'];
      } ?>" placeholder="Inserir Título" required>

      <label for="text_content">Legenda</label>
      <input type="text" id="text_content"  value="
      <?php if (isset($retorno)) {
        echo $retorno['legenda'];
      } ?>" name="txtdesc" placeholder="Inserir legenda para imagem" required>


      <div class="divEnviar">
        <input type="submit" value="Salvar">
      </div>
    </form>
  </div>


  <!-- ===================== FIM CONTEUDO ===================== -->

  <script type="text/javascript" src="../Memorial-Juquery/view/js/script.js"></script>
</body>

</html>