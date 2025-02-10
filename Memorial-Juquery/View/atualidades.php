<?php 
  require_once '../Model/conexao.php';
  $pdo = new Conexao("juquery", "localhost", "root", "");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "asfBZcBqQ3");s.setAttribute("src", "./js/cdn.userway.org_widget.js");(d.body || d.head).appendChild(s);})(document)</script>
  <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

  <title>Memorial Juquery - Atualidades</title>

 <!-- =============== Link CSS =============== -->
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body id="overflowFixed">
 <!-- ========================= MENU ========================= -->
  <header>
    <div class="logo"> 
      <div class="menu-btn">
        <i class="fa fa-bars fa-2x" onclick="menuShow(); action()"></i>
      </div>

      <img onclick="location.href='./index.php'" src="./images/logo.png"> 
    </div>

    <ul id="btnsMenu">
      <li>
        <a href="./index.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> HOME </a>
      </li>

      <li>
        <div id="dropdown" class="dropdown">
          <span> <a class="btnMenu activeLink"> JUQUERY </a>  </span>
          <div class="dropdown-content">
            <p> <a href="./historia.php" onclick="topFunction(); menuShow(); action()"> História </a> </p>
            <p> <a href="./atualidades.php" class="activeLink" onclick="topFunction(); menuShow(); action()"> Atualidades </a> </p>
            <p> <a href="./arquitetura.php" onclick="topFunction(); menuShow(); action()"> Arquitetura </a> </p>
          </div>
        </div>
      </li>

      <li>
        <a href="./artistas.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> ARTISTAS </a>
      </li>

      <li>
        <a href="./eventos.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> EVENTOS </a>
      </li>

      <li>
        <a href="./galeria.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> GALERIA </a>
      </li>
    </ul>
  </header>
 <!-- ======================= FIM MENU ======================= -->

 <!-- ======================= CONTEUDO ======================= -->
  <div class="atualidades">
    <h1>Atualidades</h1>

    <?php
    $consulta = $pdo ->retornaAtuaImg();
    if (count($consulta) > 0) {
      for($i = 0; $i < count($consulta); $i++) {
        if ($consulta[$i]['Extatus'] == 1) {
          foreach ($consulta[$i] as $key => $value) {
            if ($key == "titulo") {
              $titulo = $value;
            } else
            if ($key == "conteudo") {
              $texto = $value;
            } else
            if ($key == "dataAtua") {
              $data = $value;
            } else
            if ($key == "endereco") {
              $imagem = $value;
            } else
            if ($key == "descricao") {
              $desc = $value;
            }
            if ($key == "linkAtua"){
              $linkAtua = $value;
            }
          }
          ?>
          <div class="container-atualidade">
            <div class="imgAtuali">
              <img src="<?php echo $imagem ?>">
            </div>
            <div class="info-atualidade">
              <h2><?php echo $titulo ?></h2>
              <p class="infoTextAtuali"> <?php echo $desc ?> </p>
              <p class="dateTextAtuali"> <b>Data:</b> <?php echo $data ?></p>
              <p><?php echo $texto ?></p>
              <p class="fonte"> Fonte:
                <a href="<?php echo $linkAtua ?>"> <?php echo $linkAtua ?> </a>
              </p>
            </div>
          </div>
          <?php
        }
      }
    }
    ?>
  </div>


 <!-- ===================== FIM CONTEUDO ===================== -->


 <!-- ======================== RODAPÉ ======================== -->
  <footer>
    <div class="boxs">
      <h2>INÍCIO</h2>
      <ul>
        <li><a onclick="topFunction();" href="./index.php">HOME</a></li>
        <li><a onclick="topFunction();" href="./galeria.php">GALERIA</a></li>
      </ul>
    </div>
    
    <div class="boxs">
      <h2>INFORMAÇÕES</h2>
      <ul>
        <li> <p> TELEFONE: 4444-4444 </p></li>
        <li> <p> E-MAIL: memorialJuquery@gmail.com </p></li>
      </ul>
    </div>
    
    <div class="boxs">
      <h2>SOBRE NÓS</h2>
      <p> Este site tem intuito de divulgar e informar sobre a história do complexo hospitalar do juquery, assim como atualidades, artistas e eventos na cidade de Franco da Rocha - SP. clique aqui para <a onclick="topFunction();" href="./sobre.php" class="sobreRodape">saber mais</a>. </p>
    </div>
  </footer>

  <div class="footer">
    <h4>© 2023 TODOS OS DIREITOS RESERVADOS</h4>
    <div class="sociais">
      <div class="social">
        <a href="https://www.instagram.com/memorial.juquery/" target="_blank">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
 <!-- ====================== FIM RODAPÉ ====================== -->

  <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>