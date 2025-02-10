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

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
  <script src="./js/ajax.googleapis.com_ajax_libs_jquery_2.1.1_jquery.min.js"></script>

  <link rel="shortcut icon" type="image/x-icon" href="../Memorial-Juquery/view/images/favicon.ico">

  <title>Memorial Juquery - Admin - Eventos</title>
   
 <!-- =============== Link CSS =============== -->
  <link rel="stylesheet" type="text/css" href="../Memorial-Juquery/view/css/styles.css">
</head>
<body id="overflowFixedAdm">
 <!-- ========================= MENU ========================= -->
  <header class="headerAdm">
    <div class="logo"> 
      <div class="menu-btn">
        <i class="fa fa-bars fa-2x" onclick="menuShow(); actionAdm()"></i>
      </div>

      <img onclick="location.href='./pagAdmin.php'" src="../Memorial-Juquery/view/images/logo.png"> 
      <h2 onclick="location.href='./pagAdmin.php'">Memorial Juquery</h2>
    </div>

    <ul id="btnsMenu">
      <li>
        <a href="./pagAdmin.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> CONTA </a>
      </li>
      
      <li>
        <div class="dropdown">
          <span> <a class="btnMenu"> JUQUERY </a>  </span>
          <div class="dropdown-contentAdm">
            <p> <a href="./pagAdmin-historia.php" onclick="topFunction(); menuShow(); actionAdm()"> História </a> </p>
            <p> <a href="./pagAdmin-atualidades.php" onclick="topFunction(); menuShow(); actionAdm()"> Atualidades </a> </p>
            <p> <a href="./pagAdmin-arquitetura.php" onclick="topFunction(); menuShow(); actionAdm()"> Arquitetura </a> </p>
          </div>
        </div>
      </li>

      <li>
        <a href="./pagAdmin-artistas.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> ARTISTAS </a>
      </li>

      <li>
        <a href="./pagAdmin-eventos.php" class="btnMenu activeLink" onclick="topFunction(); menuShow(); actionAdm()"> EVENTOS </a>
      </li>

      <li>
        <a href="./pagAdmin-galeria-imagem.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> GALERIA </a> 
      </li>

    </ul>
  </header>
 <!-- ======================= FIM MENU ======================= -->


 <!-- ======================= CONTEUDO ======================= -->
  <div class="adm">
    <h1>Administrador</h1>

    <h2>Inserir em "Eventos"</h2>

    <form method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Eve.php">
      <p class="align-obj">Aqui poderá ser enviado EVENTOS, ao final terá a escolha de publica-lo ou não</p>

      <label for="img-select">Imagem</label>
      <div class="align-obj">
        <?php $id = $envia->retornaDadosGaleria();
        if (!isset($id[0]['id'])){
          ?>
          <select required id="img-input" name="txtimagem">
            <option value="">insira a imagem desejada na aba GALERIA</option>
          </select>
          <?php
        } else {
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
          <?php 
        }
        ?>
      </div>

      <label for="nameEvent">Evento</label>
      <input type="text" id="nameEvent" name="txtnomevento" placeholder="Inserir nome do evento" required>

      <label>Data</label>
      <div class="align-obj">
        Informe a data do evento
        <select name="txtdiasemana">
          <option value="Domingo"> Domingo </option>
          <option value="Segunda"> Segunda </option>
          <option value="Terça"> Terça </option>
          <option value="Quarta"> Quarta </option>
          <option value="Quinta"> Quinta </option>
          <option value="Sexta"> Sexta </option>
          <option value="Sábado"> Sábado </option>
        </select>

        <input type="text" class="text_dia" name="txtdiames" placeholder="Inserir dia do evento (ex. 01)" minlength="2"  maxlength="2" required>

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

        <input type="text" class="text_ano" name="txtano" placeholder="Inserir ano do evento (ex. 2023)" minlength="4"  maxlength="4" required>
      </div>

      <label for="horaEvent">Horário</label>
      <div class="align-obj">
        Hora do envento <input type="time" name="txthorario" id="horaEvent" required>
      </div>

      <label for="localEvent">Localização</label>
      <input type="text" id="localEvent" name="txtlocalizacao" placeholder="Inserir local do evento" required>

      <label for="desc">Descrição</label>
      <input type="text" id="desc" name="txtdescricao" placeholder="Inserir descrição" required>

      <label for="linkInfo">Link</label>
      <input type="text" id="linkInfo" name="txtlinkevento" placeholder="Inserir link para mais Informações (opcional)">

      <div class="divEnviar">
        <input type="submit" value="Publicar">
      </div>
    </form>
  </div>

  <?php
  if(isset($_GET['id_ex'])) {
    $idexclui = addslashes($_GET['id_ex']);
    $envia->excluirEve($idexclui);
  }
  ?>

  <div class="adm">
    <h1>Eventos Inseridos</h1>

    <h2>Publicar Eventos</h2>

    <div class="publiContent">
      <p class="align-obj">Ao publicar, será exibido no site</p>
      <!-- <p class="align-obj">Ao clicar no botão de publicar, a imagem será exibida na Galeria do site</p> -->

      <div class="divPubli">
        <?php $consult = $envia->retornaEventImg();
        for ($i=0; $i < count($consult); $i++) { 
          if ($consult[$i]['Extatus'] == 0) {
            if($i%6 == 0){
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Eve.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['idEvent'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Publicar</button>
                    <?php $idexclui = $consult[$i]['idEvent'];?>
                    <a class="btnExcl" href='editarEvent.php?id=<?php echo $consult[$i]['idEvent'];?>'><i class="fa fa-lg fa-edit"></i></a>
                  </div>
                </div>
              </form>
              <?php 
            } else { 
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Eve.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['idEvent'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Publicar</button>
                    <?php $idexclui = $consult[$i]['idEvent'];?>
                    <a class="btnExcl" href='editarEvent.php?id=<?php echo $consult[$i]['idEvent'];?>'><i class="fa fa-lg fa-edit"></i></a>
                  </div>
                </div>
              </form>
              <?php 
            }
          }

          if ($consult[$i]['Extatus'] == 1) {
            if($i%6 == 0){
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Eve.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['idEvent'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Tornar rascunho</button>
                  </div> 
                </div>
              </form>

              <?php
            } else { 
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Eve.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['idEvent'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Tornar rascunho</button>
                  </div>
                </div>
              </form>
              <?php
            }
          }
        }
        ?>
      </div>
    </div>
  </div>
 <!-- ===================== FIM CONTEUDO ===================== -->

  <script type="text/javascript" src="../Memorial-Juquery/view/js/script.js"></script>
  <script type="text/javascript" src="./js/scriptAdmNumber.js"></script>
</body>
</html>