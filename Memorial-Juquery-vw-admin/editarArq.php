<?php
  require_once '../Memorial-Juquery/Model/conexao.php';
  $envia = new Conexao("juquery","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "asfBZcBqQ3");s.setAttribute("src", "../Memorial-Juquery/view/js/cdn.userway.org_widget.js");(d.body || d.head).appendChild(s);})(document)</script>
  <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

  <link rel="shortcut icon" type="image/x-icon" href="../Memorial-Juquery/view/images/favicon.ico">

  <title>Memorial Juquery - Admin - Arquitetura</title>
   
 <!-- =============== Link CSS =============== -->
  <link rel="stylesheet" type="text/css" href="../Memorial-Juquery/view/css/styles.css">
</head>
<body id="overflowFixedAdm">
    
 <!-- ======================= CONTEUDO ======================= -->

  <?php
  /*================ ACESSO A FUNÇÃO PARA PREENCHER CAMPO ALTERAÇÃO ===========*/
  if (isset($_GET['id'])) {
    $idAltera = addslashes($_GET['id']);
    $retorno = $envia->editaArq($idAltera);
    $retorno2 = $envia->consultaImgArq($idAltera);
  }
  ?>

  <div class="adm">
    <h1>Administrador</h1>
    <h2>Editar em "Arquitetura"</h2>

    <form method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Edt-Arq.php">
      <input type="text" name="id" value="<?php if(isset($retorno)){echo $retorno['idArq'];} ?>" required hidden>

      <label for="text_title">Título</label>
      <input type="text" id="text_title" name="txttitulo" value="<?php if(isset($retorno)){echo $retorno['titulo'];} ?>" placeholder="Inserir Título" required>

      <label for="img-select-arquitetura">Imagem</label>
      <div class="align-obj">
        <p class="align-obj-bold"> *** A IMAGEM TERÁ QUE SER SELECIONADA NOVAMENTE *** </p>
        <?php $id = $envia->retornaDadosGaleria();
        if (!isset($id[0]['id'])){
          ?>
          <select required id="img-input" name="txtimagem">
            <option value="">Insira a imagem desejada na aba GALERIA</option>
          </select>
          <?php
        } else {
          ?>
          <p>
            Imagem atual: <?php echo $retorno2['titulo'];?>
            <select id="img-input" name="txtimagem">
          
              <option value="<?php echo $id[0]['id'];?>">
                <?php echo $id[0]['titulo'];?>
              </option>
              <?php for($i = 1; $i < count($id); $i++){
                ?>
                <option value = "<?php echo $id[$i]['id'];?>">
                  <?php echo $id[$i]['titulo'];?>
                </option>
                <?php 
              }
              ?> 
            </select>
          </p>
          <?php 
        }
        ?>
      </div>

      <label for="text_subtitle">Subtitulo</label>
      <input type="text" id="text_subtitle" name="txtsub" value="<?php if(isset($retorno)){echo $retorno['subtitulo'];} ?>" placeholder="Inserir subtitulo" required>

      <label for="text_content">Conteúdo</label>
      <input type="text" id="text_content" name="txtconteudo" value="<?php if(isset($retorno)){echo $retorno['conteudo'];} ?>" placeholder="Inserir texto" rows=6 cols=30 required></input>

      <label for="text_Font">Fonte / Link</label>
      <input type="text" id="text_Font" name="txtlinkarq"  value="<?php if(isset($retorno)){echo $retorno['linkArq'];} ?>" placeholder="Inserir fonte / link da informação" required>

      <div class="divEnviar">
        <a class="btnExcl" href="pagAdmin-arquitetura.php?id_ex=<?php echo $retorno['idArq']; ?>">
        <i class="fa fa-lg fa-trash-o"></i>
        </a>
        <input type="submit" value="Salvar">
      </div>
    </form>
  </div>

  <script type="text/javascript" src="../Memorial-Juquery/view/js/script.js"></script>
</body>
</html>