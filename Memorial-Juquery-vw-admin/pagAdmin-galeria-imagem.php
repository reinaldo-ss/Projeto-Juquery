<?php
  require_once '../Memorial-Juquery/Model/conexao.php';
  $envia = new Conexao("juquery", "localhost","root", "");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "asfBZcBqQ3");s.setAttribute("src", "../Memorial-Juquery/view/js/cdn.userway.org_widget.js");(d.body || d.head).appendChild(s);})(document)</script>
  <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="../Memorial-Juquery/view/images/favicon.ico">

  <title>Memorial Juquery - Admin - Galeria - Imagem</title>
   
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
        <a href="./pagAdmin-eventos.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> EVENTOS </a>
      </li>

      <li>
        <a href="./pagAdmin-galeria-imagem.php" class="btnMenu activeLink" onclick="topFunction(); menuShow(); actionAdm()"> GALERIA </a> 
      </li>

    </ul>
  </header>
 <!-- ======================= FIM MENU ======================= -->


 <!-- ======================= CONTEUDO ======================= -->
  <div class="adm">
    <h1>Administrador</h1>

    <h2>Inserir IMAGENS</h2>

    <form method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Img.php">
      <p class="align-obj">Aqui poderá ser enviado qualquer imagem, ao final terá a escolha de publica-la ou não</p>
      <p class="align-obj-bold"> *** AS IMAGENS INSERIDAS NÃO PODERAM SER APAGADAS! *** </p>

      <!--<label for="categoria">Categoria</label>
      <div class="align-obj">
        Selecione a categoria da imagem
        <select id="categoria" >
          <option value=" "> Selecionar... </option>
        </select>
      </div>-->

      <label for="text_title">Título Imagem</label>
      <input type="text"  name="title_img" id="text_title" placeholder="Inserir Título" required>

      <label for="img-input">Imagem</label>
      <div class="align-obj">
        Inserir imagem <input id="img-input" type="file" name="img-input">
      </div>

      <label for="text_content">Legenda</label>
      <textarea type="text" id="text_content" name="text_descrition" placeholder="Inserir legenda para imagem" rows=6 cols=30 required></textarea>

      <div class="divEnviar">
        <input type="submit" value="Inserir">
      </div>
    </form>
  </div>


  <div class="adm">
    <h1>Imagens Inseridas</h1>

    <h2>Eviar para a GALERIA</h2>

    <div class="publiContent">
      <!-- <p class="align-obj">Ao publicar, será exibido no site</p> -->
      <p class="align-obj">Ao clicar no botão de publicar, a imagem será exibida na Galeria do site</p>

      <div class="divPubli">
        <?php $consult = $envia->retornaDadosGaleria();
        for ($i=0; $i < count($consult); $i++) { 
          if ($consult[$i]['Extatus'] == 0) {
            if($i%6 == 0){
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Img.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['id'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Publicar</button>
                    <a class="btnExcl" href="editarImg.php?id_up=<?php echo $consult[$i]['id'];?>"><i class="fa fa-lg fa-edit"></i></a>
                  </div>
                </div>
              </form>
              <?php 
            } else { 
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Img.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['id'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Publicar</button>
                    <a class="btnExcl" href="editarImg.php?id_up=<?php echo $consult[$i]['id'];?>"><i class="fa fa-lg fa-edit"></i></a>
                  </div>
                </div>
              </form>
              <?php 
            }
          }

          if ($consult[$i]['Extatus'] == 1) {
            if($i%6 == 0){
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Img.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['id'];?>">
                    <input hidden type="number" name="Extatus" value="<?php echo $consult[$i]['Extatus'];?>">
                    <button type="submit" class="btnPublicar">Tornar rascunho</button>
                  </div> 
                </div>
              </form>
              <?php 
            } else { 
              ?>
              <form class="formPubli" method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Ctl-Img.php">
                <div class="publicacao">
                  <div class="ImgPubli">
                    <img src="<?php echo $consult[$i]['endereco2'];?>">
                  </div>

                  <div class="btnPubli">
                    <input hidden type="number" name="id" value="<?php echo $consult[$i]['id'];?>">
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
</body>
</html>