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
                <li><a href="../galeria">Galeria</a></li>
                <li><a href="../blog">Blog</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#"> <img src="img/mensagem3.png" alt="usuario"></a>
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
                <input type="hidden" name="_next" value="{{env('APP_URL')}}"/>
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
            <li><a href="/">Início</a></li>
            <li><a href="/sobre">Sobre</a></li>
            <li><a href="../galeria">Galeria</a></li>
            <li><a href="../blog">Blog</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
      </footer>
</body>
</html>
