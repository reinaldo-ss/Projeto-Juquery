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
      s.setAttribute("src", "./js/cdn.userway.org_widget.js");
      (d.body || d.head).appendChild(s);
    })(document)
  </script>
  <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

  <title>Memorial Juquery - Sobre</title>

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
          <span> <a class="btnMenu"> JUQUERY </a> </span>
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
        <a href="./eventos.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> EVENTOS </a>
      </li>

      <li>
        <a href="./galeria.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> GALERIA </a>
      </li>
    </ul>
  </header>
  <!-- ======================= FIM MENU ======================= -->


  <!-- ==================== CONTEUDO SOBRE ==================== -->
  <div class="sobre">
    <h1>Sobre o Projeto</h1>

    <div class="container-sobre">
      <div class="align-container-sobre">
        <div class="textSobre">
          <p>
          O site conta com notícias que acontecem na cidade de Franco da Rocha, e diversos eventos que a cidade proporciona todo ano. História sobre a cidade e o Juquery, com imagens mostrando como era e o que mudou sobre a cidade que tem mais de 70 anos de história. Não só isso, mas o site mostra artistas que nasceram na cidade de Franco e diversas outras curiosidades.</p>
          <br>
          <p>
          O site foi desenvolvido pelos alunos da ETEC Dr. Emílio Hernandez Aguilar do 3° informática o projeto tomou iniciativa por parte do cantor e compositor (Nome do Ranunfo) e a professora (Nome da Débora), com o objetivo de divulgação sobre a cidade de Franco da Rocha e o Complexo Hospitalar do Juquery, sobre evento, atualidades e histórias que existem por parte da cidade de Franco da Rocha.
          </p>
        </div>

        <div class="imgLogo">
          <img src="./images/logo.png" alt="MJ">
          <h2>Memorial Juquery</h2>
        </div>
      </div>
      <br>
      <div class="textSobre02">
        <p>
        </p>
      </div>
    </div>


    <!-- ===================== ÁREA REDES ===================== -->
    <div class="containerRedes">
      <div id="sliderRedes">
        <div class="scroll-container">
          <img id="foto-1" src="./images/bem-vindos-insta.png" alt="FOTO 01">
          <img id="foto-2" src="./images/perfil-insta.png" alt="FOTO 02">
          <img id="foto-3" src="./images/bem-vindos-insta.png" alt="FOTO 03">
        </div>
      </div>

      <div class="redes">
        <p> Visite nossas redes!</p>
        <p>Conheça nossa história e esteja sempre por dentro das novidades de nossa cidade.</p>

        <button onclick="window.open('https://www.instagram.com/memorial.juquery/', '_blank')">
          <i class="fab fa-instagram gradient"></i>
          <p>@memorial.juquery</p>
        </button>
      </div>
    </div>
    <!-- =================== FIM ÁREA REDES =================== -->
  </div>
  <!-- ================== FIM CONTEUDO SOBRE ================== -->


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
        <li>
          <p> TELEFONE: 4444-4444 </p>
        </li>
        <li>
          <p> E-MAIL: memorialJuquery@gmail.com </p>
        </li>
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