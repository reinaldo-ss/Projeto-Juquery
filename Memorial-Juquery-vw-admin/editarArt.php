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

  <title>Memorial Juquery - Admin - Artistas</title>
   
 <!-- =============== Link CSS =============== -->
  <link rel="stylesheet" type="text/css" href="../Memorial-Juquery/view/css/styles.css">
</head>
<body id="overflowFixedAdm">
  <?php 
  /*================ ACESSO A FUNÇÃO PARA PREENCHER CAMPO ALTERAÇÃO ===========*/
  if (isset($_GET['id'])) {
    $idAltera = addslashes($_GET['id']);
    $retorno = $envia->editaVid($idAltera);
    $retorno2 = $envia->consultaImgArt($idAltera);
  }
  ?>

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
        <a href="./pagAdmin-artistas.php" class="btnMenu activeLink" onclick="topFunction(); menuShow(); actionAdm()"> ARTISTAS </a>
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

    <h2>Editar em "Artistas"</h2>

    <form method="post" enctype="multipart/form-data" action="../Memorial-Juquery/Controller/Edt-Art.php">
      <input type="text" name="id" value="<?php if(isset($retorno)){echo $retorno['idVid'];} ?>" required hidden>
    
      <label for="text_title">Título</label>
      <input type="text" name="txttitulo" id="text_title" placeholder="Inserir Título" required  value="<?php if(isset($retorno)){echo $retorno['titulo'];} ?>">

      <label for="img-select-atualidades">Imagem</label>
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


      <label for="text_subtitle">Compositor</label> <!-- nome do compositor-->
      <input type="text" name="txtautor" id="text_subtitle" placeholder="Inserir nome do compositor(es)" required value="<?php if(isset($retorno)){echo $retorno['autor'];} ?>">

      <label for="text_info">Link</label> <!-- Caminho p youtube-->
      <input type="text" name="txtcaminho" id="text_info" placeholder="Inserir link do video"  value="<?php if(isset($retorno)){echo $retorno['caminho'];} ?>">

      <div class="divEnviar">
        <a class="btnExcl" href="pagAdmin-artistas.php?id_ex=<?php echo $retorno['idVid']; ?>">
        <i class="fa fa-lg fa-trash-o"></i>
        </a>
        <input type="submit" value="Salvar">
      </div>
    </form>
  </div>
 

 
  <script type="text/javascript" src="../Memorial-Juquery/view/js/script.js"></script>
</body>
</html>