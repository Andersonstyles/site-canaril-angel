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

    <div class="topo" id="linkmenu">

        <header>
            <nav>
              <div class="logo">Canaril Angels</div>
              <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
              </div>
              <ul class="nav-list">
                <li><a href="#linkmenu">Início</a></li>
                <li><a href="#link1">Sobre</a></li>
                <li><a href="#link2">Galeria</a></li>
                <li><a href="#link3">Blog</a></li>
                <li><a href="#link5">Contato</a></li>
                <li><a href="#link5"> <img src="img/mensagem3.png" alt="usuario"></a>
                <li><a href="#"> <img src="img/usuario2.png" alt="usuario"></a>
              </ul>
            </nav>
            <span class="target"></span>
          </header>
          <main class="main">

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

    {{-- partials do blog --}}
    <div class="blog" id="link3">
        <br>
        <br>
        <h1>BLOG</h1>
        <br>
        <br>
            <div class="container">
               <figure class="imgBlog">
                 <img src="img/images.jpeg" alt="Imagem 11">
               </figure>
              <div class="border">
                 <a href="../blog">DICAS PARA CONSTRUIR UM NEGÓCIO <br> DE MUITO SUCESSO</a><br><br>
                 <h4>Como comecei na criação de canários</h4><br>
                 <a href="../blog">Leia Mais  ></a>
              </div>
            </div>
            <br><br><br><br><br><br>
    </div>


    {{-- partials do contato --}}
    <div class="box-formulario" id="link5">

        <div class="formulario">

            <div class="thirteen">
              <h1>Contato</h1>
            </div>
            <form action="https://formsubmit.co/canarilangels@gmail.com" method="post">

                <span>
                    <input type="text" class="input-swing-down" id="nome" name="nome" placeholder="Nome" autocomplete="off" required=""/>
                    <label for="nome"> <i class="icon icon-user-outline"></i> </label>
                </span>
                <span>
                    <input type="text" class="input-swing-down" id="email" name="email" placeholder="E-mail" autocomplete="off" required=""/>
                    <label for="email"> <i class="icon icon-mail-3"></i> </label>
                </span>
                <span>
                    <input type="text" class="input-swing-down" id="assunto" name="assunto" placeholder="Assunto" autocomplete="off" required=""/>
                    <label for="assunto"> <i class="icon icon-info"></i> </label>
                </span>
                <span>
                    <textarea type="text" class="textarea-swing-down" id="mensagem" name="mensagem" rows="3" placeholder="Mensagem" autocomplete="off" required=""></textarea>
                    <label for="mensagem"> <i class="icon icon-bubble-4"></i> </label>
                </span>
                <input type="hidden" name="_next" value="http://localhost:8000/"/>
                <div class="box-btn">

                    <button type="submit" class="btn-3d">
                        <i class="icon icon-forward-1"> Enviar</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!--Box Formulario-->



    {{-- partials do rodapé --}}
    <footer class="container-rodape">
        <br>
        <div> <h4> Canaril Angels<p>Direitos autorais © 2023 Todos os direitos reservados</p>
            <p>Desenvolvido Por<a href="#">AJCStyles</a> </p>
        </h4>
    </div>

        <ul class="nav-final">
          <li><a href="#linkmenu">Início</a></li>
          <li><a href="#link1">Sobre</a></li>
          <li><a href="#link2">Galeria</a></li>
          <li><a href="#link3">Blog</a></li>
          <li><a href="#link5">Contato</a></li>
        </ul>
      </footer>

</body>

</html>
