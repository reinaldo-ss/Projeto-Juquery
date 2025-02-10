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

  <title>Memorial Juquery - Eventos</title>

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
          <span> <a class="btnMenu"> JUQUERY </a>  </span>
          <div class="dropdown-content">
            <p> <a href="./historia.php" onclick="topFunction(); menuShow(); action()"> História </a> </p>
            <p> <a href="./atualidades.php" onclick="topFunction(); menuShow(); action()"> Atualidades </a> </p>
            <p> <a href="./arquitetura.php" onclick="topFunction(); menuShow(); action()"> Arquitetura </a> </p>
          </div>
        </div>
      </li>

      <li>
        <a href="./artistas.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> ARTISTAS </a>
      </li>

      <li>
        <a href="./eventos.php" class="btnMenu activeLink" onclick="topFunction(); menuShow(); action()"> EVENTOS </a>
      </li>

      <li>
        <a href="./galeria.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> GALERIA </a>
      </li>
    </ul>
  </header>
 <!-- ======================= FIM MENU ======================= -->


 <!-- ======================= CONTEUDO ======================= -->
  <div class="eventos">
    <h1>Calendário de Eventos</h1>
    <div class='aling-eventos'>
      <div class='eventos_timeline'>

        <?php $consulta = $pdo ->retornaEventImg();
        for($i = 0; $i < count($consulta); $i++){
          if ($consulta[$i]['Extatus'] == 1) {
            foreach ($consulta[$i] as $key => $value) {
              if ($key == "nomeEvento") { 
                $titulo = $value;
              } else if ($key == "diaSemana") {
                $ds = $value;
              } else if ($key == "diaMes") {
                $dm = $value;
              } else if ($key == "mes") {
                $mes = $value;
              } else if ($key == "horario") {
                $ho = $value;
              } else if ($key == "ano") {
                $ano = $value;
              } else if ($key == "localizacao") {
                $loc = $value;
              } else if ($key == "linkEvento") {
                $le = $value;
              } else if ($key == "endereco") {
                $imagem = $value;
              }
            }
            ?>
            <div class='evento'>
              <div class='img-evento'>
                <img src='<?php echo $imagem ?>'>
              </div>

              <div class='content-eventos'>
                <div class='info-eventos data-hora'>
                  <div class='dia_semana'> <p> <?php echo $ds ?> </p> </div>
                  <div class='dia_mes'> <p> <?php echo $dm ?> </p> </div>
                  <div class='mes'> <p> <?php echo $mes ?> </p> </div>
                  <div class='horario'> <p> <?php echo $ho ?> </p> </div>
                </div>

                <div class='info-eventos dados-evento'>
                  <div class='nome_evento'> <p> <?php echo $titulo ?> </p> </div>
                  <div class='ano'> <p> <?php echo $ano ?>  </p> </div>

                  <div class='localizacao'>
                    <i class='fa fa-map-marked-alt'></i>
                    <p> <?php echo $loc ?> </p>
                  </div>
                </div>
              </div>

              <div class='btnEvento'>
                <a href='<?php echo $le ?>' target='_blank'> Saiba Mais </a>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>
    </div>
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

  <script src="./js/script.js"></script>
</body>
</html>