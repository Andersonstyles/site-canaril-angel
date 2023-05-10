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
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="#">Galeria</a></li>
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

 {{-- partials do galeria --}}
 <div class="conteudo" id="link2">
    <br>
    <br>
    <h1 id="galeria">GALERIA</h1>
    <br>
    <br>
    <div class="principal">
        <section class="galeria">
            <figure class="itemGaleria item01" id="foto1">
                <a href="#foto1">
                <img src="img/im01.jpg" alt="Imagem 01" class="imgGaleria">
                </a>
                <div class="detalhes">
                    Canário cobre intenso<br><a href="#fechar">Fechar</a>
                </div>
            </figure>

            <figure class="itemGaleria item02" id="foto2">
                <a href="#foto2">
                <img src="img/im02.jpg" alt="Imagem 02" class="imgGaleria">
                </a>
                <div class="detalhes">
                    Canário Agata vermelho nevado<br><a href="#fechar">Fechar</a>
                </div>
            </figure>

            <figure class="itemGaleria item03" id="foto3">
                <a href="#foto3">
                <img src="img/im03.jpg" alt="Imagem 03" class="imgGaleria">
                </a>
                <div class="detalhes">
                    Canário Vermelho Mosaico<br><a href="#fechar">Fechar</a>
                </div>
            </figure>

            <figure class="itemGaleria item04" id="foto4">
                <a href="#foto4">
                <img src="img/im07.jpg" alt="Imagem 07" class="imgGaleria">
                </a>
                <div class="detalhes">
                    Canário cobre nevado<br><a href="#fechar">Fechar</a>
                </div>
            </figure>

            <figure class="itemGaleria item05" id="foto5">
                <a href="#foto5">
                <img src="img/im06.jpg" alt="Imagem 05" class="imgGaleria">
                </a>
                <div class="detalhes">
                    Canaril Angels<br><a href="#fechar">Fechar</a>
                </div>
            </figure>

            <figure class="itemGaleria item06" id="foto6">
                <a href="#foto6">
                <img src="img/im08.jpg" alt="Imagem 06" class="imgGaleria">
                </a>
                <div class="detalhes">
                    Canaril Angels<br><a href="#fechar">Fechar</a>
                </div>
            </figure>

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
            <li><a href="/sobre">Sobre</a></li>
            <li><a href="#">Galeria</a></li>
            <li><a href="../blog">Blog</a></li>
            <li><a href="../contato">Contato</a></li>
        </ul>
      </footer>
</body>
</html>
