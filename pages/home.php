<header class="cabecalho" id="inicio">
  <div class="center">

    <div class="logo w100 txt-center anime-logo"><img src="images/logo-bem2.png" alt="Logotipo Code Idea" title="Code Idea"/></div>
    <div class="welcome w100 txt-center">
      <h1>Bem-vindo ao Code Idea</h1>
      <p>Tem alguma ideia? Envie seu código!<br>Colabore conosco nesse vasto mundo do open source.</p>
    </div><!--welcome-->
    <div class="btn"><a href="enviar">Enviar Código</a></div>
    <div class="clear"></div>
  </div><!--center-->
</header>

    <section class="slide w100">
      <div class="center">
        <h2>Adicionado Recentemente</h2>
        <div class="slide-single w33 left anime-slide">
          <h3>Full Menu</h3>
        </div>
        <div class="slide-single w33 left anime-slide2" style="background-image: url('gif/coracao-batendo.gif')">
          <h3>Heart Beating</h3>
        </div>
        <div class="slide-single w33 left anime-slide3" style="background-image: url('gif/loading.gif')">
          <h3>Loading Screen</h3>
        </div>
        <a href="ideias" class="right">Ver tudo</a>
        <div class="clear"></div>
      </div><!--center-->
    </section>

    <section class="info" id="info">
      <div class="center">
        <h2>Informações</h2>
        <div class="texto w50 left anime-info">
          <p>A ideia de construir um site onde qualquer um pudesse ter seu código publicado no mesmo, surgiu como um pensamento para praticar o que eu vinha aprendendo nos cursos de programação que eu faço.<br><br>

          É um site simples, onde a pessoa enviará a sua ideia através de um formulário. Ela informará alguns dados, para que tenha total reconhecimento do seu trabalho, da sua ideia compartilhada.<br><br>

          Conforme o tempo passa, irei aprender mais coisas atráves dos meus cursos e irei atualizar a plataforma, evoluindo para um site melhor e mais dinâmico.<br><br>

          Atualmente o Code Idea tem suporte apenas para ideias que contém HTML | CSS | JS.<br><br>

          Precisa de um website? Entre em contato!
          Conte-me o que você precisa, apresentarei uma solução e um orçamento!<br><br></p>

          <div class="btn"><a href="http://www.meuportfolio.ml" target="_blank">Visualizar Portfólio</a></div>
        </div>
        <div class="container-logo w50 left txt-center anime-info2">
          <img class="logo-info" src="images/logo-info.png" alt="Logotipo Code Idea" title="Code Idea">
        </div><!--container-logo-->
        <div class="clear"></div>
      </div><!--center-->
    </section><!--info-->

    <section class="sendcode" id="enviar">
      <div class="center">
        <h2>Enviar Código</h2>
        <p style="font-size: 12px;color: #f55f5f;">
          <b>ATENÇÃO!!!<br>Imagens que foram anexadas ao código, <br>
          substituam pelo link da mesma ou informe o link no html ou css.<br>
          Utilizem o <a href="https://unsplash.com/" target="_blank" style="color: #27b4fc;text-decoration: underline;">unsplash</a> para não terem problemas com copyright.</b><br><br>
        </p>
        <form action="contato" method="post">
          <div class="input-group w33 txt-center">
            <input type="text" name="nome" placeholder="Nome completo" required/>
          </div>
          <div class="input-group w33 txt-center">
            <input type="text" name="social" placeholder="Rede Social" required/>
          </div>
          <div class="input-group w33 txt-center">
            <input type="text" name="website" placeholder="Website(opcional)"/>
          </div>

          <div class="clear"></div>

          <div class="area-group txt-center">
            <textarea class="w100" name="html" cols="30" rows="10" placeholder="Insira o código HTML" required></textarea>
          </div><!--area-group-->
          <div class="area-group txt-center">
            <textarea class="w100" name="css" cols="30" rows="10" placeholder="Insira o código CSS" required></textarea>
          </div><!--area-group-->
          <div class="area-group txt-center">
            <textarea class="w100" name="js" cols="30" rows="10" placeholder="Insira o código JS"></textarea>
          </div><!--area-group-->

          <div class="input-group w33 txt-center">
            <input type="text" name="titulo" placeholder="Título da ideia" required/>
          </div>
          <input class="btn" type="submit" name="enviar" value="Enviar">

        </form>
      </div><!--center-->
    </section>
    <!--<form >
      <input type="text" name="name">
      <input type="email" name="_replyto">
      <input type="submit" value="Send">
    </form>-->
    <section></section>
