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

  <title>Memorial Juquery - Admin - Eventos</title>

  <!-- =============== Link CSS =============== -->
  <link rel="stylesheet" type="text/css" href="../Memorial-Juquery/view/css/styles.css">
</head>
<body id="overflowFixedAdm">

  <?php
  /*================ ACESSO A FUNÇÃO PARA PREENCHER CAMPO ALTERAÇÃO ===========*/

  if (isset($_GET['id'])) {
    $idAltera = addslashes($_GET['id']);
    $retorno = $envia->editaEve($idAltera);
    $retorno2 = $envia->consultaImgEve($idAltera);
  }
  ?>


  <!-- ======================= CONTEUDO ======================= -->
  <div class="adm">
    <h1>Administrador</h1>
    <h2>Editar em "Eventos"</h2>

    <form method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Edt-Eve.php">
      <input type="text" name="id" value="
      <?php if (isset($retorno)) {
        echo $retorno['idEvent'];
      } ?>" required hidden>

      <label for="img-select">Imagem</label>
      <div class="align-obj">
        <p class="align-obj-bold"> *** A IMAGEM TERÁ QUE SER SELECIONADA NOVAMENTE *** </p>
        <p>
          Imagem atual: <?php echo $retorno2['titulo']; ?>

          <?php $id = $envia->retornaDadosGaleria();
          if (!isset($id[0]['id'])){
            ?>
            <select required id="img-input" name="txtimagem">
              <option value="">insira a imagem desejada na aba GALERIA</option>
            </select>
            <?php 
          } else{ 
            ?>
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
        </div>
        <?php
      }
      ?>

      <label for="nameEvent">Evento</label>
      <input type="text" id="nameEvent" name="txtnomevento" value="
      <?php if (isset($retorno)) {
        echo $retorno['nomeEvento'];
      } ?>" placeholder="Inserir nome do evento" required>

      <label>Data</label>
      <div class="align-obj">
        <p class="align-obj-bold"> *** O DIA E MÊS TERÁ QUE SER SELECIONADA NOVAMENTE *** </p><br> 
        Informe a data do evento<br>
        Dia atual: <?php echo $retorno['diaSemana']; ?>
        <select name="txtdiasemana">
          <option value="Domingo"> Domingo </option>
          <option value="Segunda"> Segunda </option>
          <option value="Terça"> Terça </option>
          <option value="Quarta"> Quarta </option>
          <option value="Quinta"> Quinta </option>
          <option value="Sexta"> Sexta </option>
          <option value="Sábado"> Sábado </option>
        </select>

        <input type="text" class="text_dia" name="txtdiames" value="
        <?php if (isset($retorno)) {
          echo $retorno['diaMes'];
        } ?>" placeholder="Inserir dia do evento (ex. 01)" minlength="2"  maxlength="2" required>

        Mês atual: <?php echo $retorno['mes']; ?>
        <select name="txtmes">
          <option value="JANEIRO"> Janeiro </option>
          <option value="FEVEREIRO"> Fevereiro </option>
          <option value="MARÇO"> Março </option>
          <option value="ABRRIL"> Abril </option>
          <option value="MAIO"> Maio </option>
          <option value="JUNHO"> Junho </option>
          <option value="JULHO"> Julho </option>
          <option value="AGOSTO"> Agosto </option>
          <option value="SETEMBRO"> Setembro </option>
          <option value="OUTUBRO"> Outubro </option>
          <option value="NOVEMBRO"> Novembro </option>
          <option value="DEZEMBRO"> Dezembro </option>
        </select>

        <input type="text" class="text_ano" value="
        <?php if (isset($retorno)) {
          echo $retorno['ano'];
        } ?>" name="txtano" placeholder="Inserir ano do evento (ex. 2023)" minlength="4"  maxlength="4" required>
      </div>

      <label for="horaEvent">Horário</label>
      <div class="align-obj">
        <p class="align-obj-bold"> *** O HORÁRIO TERÁ QUE SER SELECIONADA NOVAMENTE *** </p><br>
        Horáio atual: 
        <?php if (isset($retorno)) {
          echo $retorno['horario'];
        } ?><br>
        Hora do evento <input type="time" name="txthorario" id="horaEvent" required>
      </div>

      <label for="localEvent">Localização</label>
      <input type="text" id="localEvent" name="txtlocalizacao" value="
      <?php if (isset($retorno)) {
        echo $retorno['localizacao'];
      } ?>" placeholder="Inserir local do evento" required>

      <label for="desc">Descrição</label>
      <input type="text" id="desc" name="txtdescricao" value="
      <?php if (isset($retorno)) {
        echo $retorno['descricao'];
      } ?>" placeholder="Inserir descrição" required>

      <label for="linkInfo">Link</label>
      <input type="text" id="linkInfo" value="
      <?php if (isset($retorno)) {
        echo $retorno['linkEvento'];
      } ?>" name="txtlinkevento" placeholder="Inserir link para mais Informações (opcional)">

      <div class="divEnviar">
        <a class="btnExcl" href="pagAdmin-eventos.php?id_ex=<?php echo $retorno['idEvent']; ?>">
        <i class="fa fa-lg fa-trash-o"></i>
        </a>
        <input type="submit" value="Salvar">
      </div>
    </form>
  </div>


  <!-- ===================== FIM CONTEUDO ===================== -->

  <script type="text/javascript" src="../Memorial-Juquery/view/js/script.js"></script>
</body>

</html>