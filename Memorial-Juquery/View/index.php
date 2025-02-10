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

  <title>Memorial Juquery</title>

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
        <a href="./index.php" class="btnMenu activeLink" onclick="topFunction(); menuShow(); action()"> HOME </a>
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
        <a href="./eventos.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> EVENTOS </a>
      </li>

      <li>
        <a href="./galeria.php" class="btnMenu" onclick="topFunction(); menuShow(); action()"> GALERIA </a>
      </li>
    </ul>
  </header>
 <!-- ======================= FIM MENU ======================= -->


 <!-- ==================== ÁREA CARROSSEL ==================== -->
  <div id="slider">
    <div class="scroll-container">
      <img id="page-1" src="./images/BEM-VINDOS.png" alt="BEM-VINDOS">
      <img id="page-2" src="./images/INSTAGRAM.png" alt="INSTAGRAM">
      <img id="page-3" src="./images/BEM-VINDOS.png" alt="BEM-VINDOS">
    </div>
  </div>
 <!-- ================== FIM ÁREA CARROSSEL ================== -->


 <!-- ===================== HISTÓRIA HOME ===================== -->
  <?php
  $consulta = $pdo ->retornaHistImg();
  if (count($consulta) > 0) {
    for($i = 0; $i < 1; $i++) { 
      if ($consulta[$i]['Extatus'] == 1) {
        foreach ($consulta[$i] as $key => $value) {
          if ($key == "titulo") {
            $titulo = $value;
          } else 
          if ($key == "conteudo") {
            $texto = $value;
          } else 
          if ($key == "ano") {
            $data = $value;
          } else
          if ($key == "endereco") {
            $imagem = $value;
          }
        }
        ?>
        <div class="historia_home container-historia_home">
          <div class="info-historia_home">
            <h1> <?php echo $data ?> </h1>
            <p class="title-Hist"> <?php echo $titulo ?> </p>
            <p> <?php echo $texto ?> </p>
            <button class="verHistoria" onclick="topFunction(); location.href='./historia.php'"> Ver história </button>
          </div>

          <div class="img_historia_home">
            <img src="<?php echo $imagem ?>">
          </div>
        </div>
      <?php
      }
    }
  }
  ?>
 <!-- =================== FIM HISTÓRIA HOME =================== -->


 <!-- ======================= NOTICIAS ======================= -->
  <div class="noticias_home">
    <h1> Notícias </h1>

    <div class="noticias_timeline">
      <div data-date="Setembro de 2014" class="noticia" onclick="window.open('https://www.cps.sp.gov.br/alunos-da-etec-de-franco-da-rocha-criam-jogo-para-criancas-com-tod/', '_blank');" title="Alunos da Etec de Franco da Rocha criam jogo para crianças com TOD">
        <img src="./images/estudantes.jpg" width="100%">
  
        <h2> Alunos da Etec de Franco da Rocha criam jogo para crianças com TOD </h2>
        <h3> Batizado de Piratas das Emoções, game foi desenvolvido a partir do treinamento de atenção e paciência para auxiliar crianças com Transtorno de Oposição Desafiante </h3>
        <p>

        </p>
      </div>

      <div data-date="Setembro de 2014" class="noticia" onclick="window.open('https://www.francodarocha.sp.gov.br/franco/artigo/noticia/11964', '_blank');" title="Desenvolvimento econômico 25/10/2023">
        <img src="./images/economico.jpg" width="100%">

        <h2> Desenvolvimento econômico 25/10/2023 </h2>
        <h3> Prefeitura realiza 1ª Feira das Profissões de Franco da Rocha </h3>
        <p> 

        </p>
      </div>

      <div data-date="September 2015 – September 2016" class="noticia" onclick="window.open('https://www.band.uol.com.br/videos/chuvas-causam-desabamentos-e-alagamentos-em-franco-da-rocha-17197620', '_blank');" title="Chuvas causam desabamentos e alagamentos em Franco da Rocha">
        <img src="./images/desabamento.jpg" width="100%">

        <h2> Chuvas causam desabamentos e alagamentos em Franco da Rocha</h2>
        <h3> Chuvas causam desabamentos e alagamentos em FRANCO DA ROCHA O prefeito de Franco da Rocha é entrevistado na Rádio Bandeirantes. Nivaldo Santos fala sobre os estragos causados pelas chuvas, principalmente na região central. </h3>
        <p> 
          
        </p>
      </div>
        
      <div data-date="September 2015 – September 2016" class="noticia" onclick="window.open('https://g1.globo.com/sp/sao-paulo/noticia/2023/09/28/motorista-de-onibus-perde-controle-da-direcao-e-atinge-duas-casas-em-franco-da-rocha-na-grande-sp.ghtml', '_blank');" ti>
        <img src="./images/onibus.jpg" width="100%">
          
        <h2> Motorista de ônibus perde controle da direção e atinge duas casas em Franco da Rocha, na Grande SP </h2>
        <h3> Acidente foi registrado por volta das 5h desta quinta-feira (28); motorista seguia pelo bairro, quando invadiu o canteiro central da rua Manoel Pereira Sobrinho e foi em direção aos imóveis. </h3>
        <p> 

        </p>
      </div>

    </div>
  </div>
 <!-- ===================== FIM NOTICIAS ===================== -->


 <!-- ===================== EVENTOS HOME ===================== -->
  <?php $consulta = $pdo ->retornaEventImg();?>
  <div class="eventos_home-Princiapal">
    <div class="slideshow-container">
      <div class="eventos_home">
        <h1> Eventos </h1>
        <?php
        for($i = 0; $i < 3; $i++){ 
          if ($consulta[$i]['Extatus'] == 1) {
            foreach ($consulta[$i] as $key => $value) {
              if ($key == "nomeEvento") {
                $titulo = $value;
              } else
              if ($key == "diaSemana") {
                $ds = $value;
              } else
              if ($key == "diaMes") {
                $dm = $value;
              } else
              if ($key == "mes") {
                $mes = $value;
              } else
              if ($key == "horario") {
                $ho = $value;
              } else
              if ($key == "ano") {
                $ano = $value;
              } else
              if ($key == "localizacao") {
                $loc = $value;
              } else
              if ($key == "linkEvento") {
                $le = $value;
              } else
              if ($key == "endereco") {
                $imagem = $value;
              }
            }
          ?>
          <div class="mySlides fade">
            <div class="container-eventos_home">

              <div class="img_materia">
                <img src="<?php echo $imagem ?>">
                <h1><?php echo $mes.' '.$dm ?></h1>
              </div>

              <div class="info-eventos_home">
                <h2> <?php echo $titulo ?> </h2>
                <p> <?php echo $loc ?> </p>
                <p> Às <?php echo $ho ?> </p>
                <h3 onclick="topFunction(); window.open('<?php echo $le?>', '_blank');"> Saiba mais </h3> 
                <button class="verCalendario" onclick="topFunction(); location.href='./eventos.php'"> Ver calendário </button>
              </div>

            </div>
          </div>
          <?php
          }
        }
        ?>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

    </div>

    <div class="divDot">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
  </div>
 <!-- =================== FIM EVENTOS HOME =================== -->


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