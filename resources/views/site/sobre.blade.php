<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canaril Angels</title>
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}">
</head>
<body>
    {{-- partials do menu--}}

    <div class="topo">

        <header>
            <nav>
              <div class="logo">Canaril Angels</div>
              <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
              </div>
              <ul class="nav-list">
                <li><a href="/">Início</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="../galeria">Galeria</a></li>
                <li><a href="../blog">Blog</a></li>
                <li><a href="../contato">Contato</a></li>
                <li><a href="../contato"> <img src="img/mensagem3.png" alt="usuario"></a>
                <li><a href="#"> <img src="img/usuario2.png" alt="usuario"></a>
              </ul>
            </nav>
            <span class="target"></span>
          </header>
          <main>

                 <script src="js/mobile-navbar.js"></script>
                 {{-- <script src="js/target.js"></script> --}}
        </main>


    </div>

      {{-- partials do sobre-nos --}}

      <div class="sobre-nos" id="link1">
        <br><br><br><br>
        <h1>SOBRE</h1>
        <div class="descricao">

          <h2>  Somos o Canaril Angels, formadores de canários de alta qualidade. Fundada em 17 de setembro de 2022,
                o Canaril Angels conta com canários de cor e os SRD (canários sem raça definida). Atualmente nosso
                plantel é composto por canários cobre clássico intenso e nevado, vermelho mosaico, ágata vermelho
                intenso e nevado, brancos dominantes, cenoura e verde. Situado na cidade de Curvelo/MG, o Canaril Angels
                vêm trazer principalmente qualidade e excelência na criação de canários, através de estrutura e manejos
                específicos, a fim de obter sucesso e demonstrando todo o potencial da aves.
          </h2>
          <img src="{{ asset('img/canaril.png')}}">
          <br><br><br><br>
       </div>

    </div>

     {{-- partials do rodapé --}}
     <footer class="container-rodape">
        <br>
        <div> <h4> Canaril Angels<p>Direitos autorais © 2023 Todos os direitos reservados</p>
            <p>Desenvolvido Por<a href="#">AJCStyles</a> </p>
        </h4>
    </div>

        <ul class="nav-final">
            <li><a href="/">Início</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="../galeria">Galeria</a></li>
            <li><a href="../blog">Blog</a></li>
            <li><a href="../contato">Contato</a></li>
        </ul>
      </footer>
</body>
</html>
