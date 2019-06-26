<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Code Idea</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="codigo,ideias,idea,code,codeidea,html,css,js,menu,slide,hover">
    <meta name="description" content="Code Idea - Códigos simples, ideias incríveis!">
    <meta name="author" content="Matheus Ferreira - Designer & Programador">
  </head>
  <body>

    <?php
      $url = isset($_GET['url']) ? $_GET['url'] : 'home';
      switch ($url) {
        case 'info':
          echo '<target target="info"/>';
          break;

        case 'enviar':
          echo '<target target="enviar"/>';
          break;
      }
    ?>

    <div class="container-principal">
      <?php
        if(file_exists('pages/'.$url.'.php')){
          include('pages/'.$url.'.php');
        }else{
          if($url != 'info' && $url != 'enviar'){
            $pagina404 = true;
            include('pages/404.php');
          }else{
            include('pages/home.php');
          }
        }
      ?>
    </div><!--container-principal-->

    <nav class="menu-header right">
      <input class="check-menu" id="check-menu" type="checkbox">
      <label for="check-menu">
        <div class="menu">
          <span class="burger"></span>
        </div>
      </label>
      <ul>
        <li class="one"><a href="home">Início</a></li>
        <li class="two"><a href="ideias">Ideias</a></li>
        <li class="three"><a href="info">Informação</a></li>
        <li class="four"><a href="enviar">Enviar Código</a></li>
      </ul>
    </nav>

  <footer>
    <div class="center">
      <div class="social-media w33">
        <i class="fas fa-globe w100"><a href="http://www.meuportfolio.ml/" target="_blank">www.meuportfolio.ml</a></i>
        <i class="fab fa-instagram w100"><a href="https://www.instagram.com/code_idea/" target="_blank">@code_idea</a></i>
        <i class="fab fa-github w100"><a href="https://github.com/iammatheus" target="_blank">iammatheus</a></i>
      </div><!--social-media-->

      <div class="copy w33 txt-center">
        <img src="images/logo-footer.png" alt="Logotipo Code Idea" title="Code Idea">
        <p>&copy Copyright 2019 Code Idea</p>
      </div><!--copy-->

      <div class="menu-footer w33">
        <nav class="menu-footer right">
          <ul>
            <li><a href="home">Início</a></li>
            <li><a href="ideias">Ideias</a></li>
            <li><a href="info">Informação</a></li>
            <li><a href="enviar">Enviar Código</a></li>
          </ul>
        </nav>
      </div><!--menu-footer-->
    </div><!--center-->
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/animation.js"></script>
  <script src="js/ideias.js"></script>
  </body>
</html>
