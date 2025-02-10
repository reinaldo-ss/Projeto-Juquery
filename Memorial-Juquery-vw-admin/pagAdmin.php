<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "asfBZcBqQ3");s.setAttribute("src", "../Memorial-Juquery/view/js/cdn.userway.org_widget.js");(d.body || d.head).appendChild(s);})(document)</script>
  <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

  <link rel="shortcut icon" type="image/x-icon" href="../Memorial-Juquery/view/images/favicon.ico">

  <title>Memorial Juquery - Admin</title>
   
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
        <a href="./pagAdmin.php" class="btnMenu activeLink" onclick="topFunction(); menuShow(); actionAdm()"> CONTA </a>
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
        <a href="./pagAdmin-galeria-imagem.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> GALERIA </a> 
      </li>

     
    </ul>
  </header>
 <!-- ======================= FIM MENU ======================= -->


 <!-- ======================= CONTEUDO ======================= -->
  <div class="adm">
    <div class="logoAdm">
      <img src="../Memorial-Juquery/view/images/logo.png">
    </div>  

    <h1>Administrador</h1>

    <div class="mensageLinks">
      <h2>Bem-vindo(a)</h2>
      <h3>Selecione a página que gostaria de inserir informações</h3>

      <div id="AdmContent">
        <ul>
          <div class="divLi">
          
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
        <a href="./pagAdmin-galeria-imagem.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> GALERIA </a> 
      </li>

      <li>
        <a href="./pagAdmin-sobre.php" class="btnMenu" onclick="topFunction(); menuShow(); actionAdm()"> SOBRE </a>
      </li>
          </div>
        </ul>
      </div>
    </div>
  </div>
 <!-- ===================== FIM CONTEUDO ===================== -->

  <script type="text/javascript" src="../Memorial-Juquery/view/js/script.js"></script>
  <script type="text/javascript" src="./js/scriptAdmPreView.js"></script>
</body>
</html>