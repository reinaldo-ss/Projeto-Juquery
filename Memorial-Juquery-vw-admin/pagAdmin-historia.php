<?php
require_once '../Memorial-Juquery/Model/conexao.php';
$envia = new Conexao("juquery", "localhost","root", "");
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

  <title>Memorial Juquery - Admin - História</title>
   
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
          <span> <a class="btnMenu activeLink"> JUQUERY </a>  </span>
          <div class="dropdown-contentAdm">
            <p> <a class="btnMenu activeLink" href="./pagAdmin-historia.php" onclick="topFunction(); menuShow(); actionAdm()"> História </a> </p>
            <p> <a href="./pagAdmin-atualidades.php" onclick="topFunction(); menuShow(); actionAdm()"> Atualidades </a> </p>
            <p> <a href="./pagAdmin-arquitetura.php" onclick="topFunction(); menuShow(); actionAdm()"> Arquitetura </a> </p>
          </div>
        </div>
      </li>

      <li>
        <a href="./pagAdmin-artistas.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> ARTISTAS </a>
      </li>

      <li>
        <a href="./pagAdmin-eventos.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> EVENTOS </a>
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

    <h2>Inserir em "História"</h2>

    <form method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-His.php">
      <p class="align-obj">Aqui poderá ser enviado a HISTORIA do Juquery, ao final terá a escolha de publica-la ou não</p>

      <label for="img-select-historia">Imagem</label>
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

      <label for="text_ano">Ano</label>
      <input type="text" id="text_ano" name="txtano" class="text_ano" placeholder="Inserir Ano do Ocorrido (ex. 1898)" minlength="4"  maxlength="4" required>

      <label for="text_title">Título</label>
      <input type="text" id="text_title" name="txttitulo" placeholder="Inserir Título" required>

      <label for="text_content">Conteúdo</label>
      <textarea type="text" id="text_content" name="txtconteudo" placeholder="Inserir texto" rows=6 cols=30 required></textarea>

      <div class="divEnviar">
        <input type="submit" value="Publicar">
      </div>
    </form>
  </div>

  <?php
  if(isset($_GET['id_ex'])) {
    $idexclui = addslashes($_GET['id_ex']);
    $envia->excluirHistoria($idexclui);
  }
  ?>

  <div class="adm">
    <h1>Historias Inseridas</h1>

    <h2>Publicar Historia</h2>

    <div class="publiContent">
      <p class="align-obj">Ao publicar, será exibido no site.</p>
      <!-- <p class="align-obj">Ao clicar no botão publicar, a imagem será exibida na Galeria do site</p> -->

      <div class="divPubli">
        <?php $consult = $envia->retornaHistImg();
        for ($i=0; $i < count($consult); $i++) { 
          if ($consult[$i]['Extatus'] == 0) {
            if($i%6 == 0){
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-His.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['idHist'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Publicar</button>
                    <?php $idexclui = $consult[$i]['idHist'];?>
                    <a class="btnExcl" href="EditHist.php?id_up=<?php echo $consult[$i]['idHist'];?>"><i class="fa fa-lg fa-edit"></i></a>
                    <!--<a class="btnExcl" href='pagAdmin-historia.php'><i class="fa fa-lg fa-trash-o"></i> <?php  //$envia->excluirHistoria($idexclui);?></a>-->
                  </div>
                </div>
              </form>
              <?php
            } else { 
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-His.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['idHist'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Publicar</button>
                    <?php $idexclui = $consult[$i]['idHist'];?>
                    <a class="btnExcl" href="EditHist.php?id_up=<?php echo $consult[$i]['idHist'];?>"><i class="fa fa-lg fa-edit"></i></a>
                    <!--<a class="btnExcl" href='pagAdmin-historia.php'><i class="fa fa-lg fa-trash-o"></i> <?php  //$envia->excluirHistoria($idexclui);?></a>-->
                  </div>
                </div>
              </form>
              <?php 
            } 
          }

          if ($consult[$i]['Extatus'] == 1) {
            if($i%6 == 0){
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-His.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['idHist'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Tornar rascunho</button>
                  </div> 
                </div>
              </form>

              <?php 
            } else {
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-His.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['idHist'];?>">
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