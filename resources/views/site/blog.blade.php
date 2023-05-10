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
                <li><a href="/galeria">Galeria</a></li>
                <li><a href="#">Blog</a></li>
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

    <div class="container1">
        <br>
        <h1>DICAS PARA CONSTRUIR UM NEGÓCIO DE MUITO SUCESSO</h1>
        <br>
        <br>
            <div>
                <figure>
                    <img src="img/im05.jpg">
                </figure>
                <div class="border">
                    <h4>Este é um artigo com algumas dicas para que você possa começar na criação de canários.<br>
                        Primeiramente vou contar um pouco da minha história e como comecei a ingressar nesse meio<br>
                        tão bonito e cheio de desafios que é a canaricultura.
                        </h4><br>
                 </div>
            </div>
            <div>
                <figure>
                    <img src="img/im08.jpg">
                </figure>
                <div class="border">
                    <h4>Meu nome é Anderson, sou da cidade de Curvelo/MG, sempre gostei de criar animais<br> domésticos
                        e na casa dos meus pais sempre teve cachorro e pássaros. Tinha um, dois<br> até três canários
                        Após passado algum tempo e depois que casei e mudei de endereço,<br> senti falta do canto das
                        aves toda manhã para alegrar o dia. Após muito pensar, resolvi<br> criar um canário para preencher
                        a falta que eu sentia, porém não encontrava nenhum <br>criador que tinha o canário que eu queria, nessa
                        época, eu estava procurando um canário<br> de topete. Até que me indicaram um criador, Sidney, aqui da minha
                        cidade e quando cheguei<br> a sua casa fiquei encantado com o tão famoso "Canaril" e deparei com a evolução na criação.<br>
                        Não resistir e comprei 3 canários. Após a compra comecei a pesquisar sobre canaricultura. <br>Descobri outros criadores de
                        sucesso e assim decidi começar minha criação. Hoje atualmente<br> possuo nove casais de canários, mas isso é
                        matéria para um próximo post.
                        </h4><br>
                 </div>
            </div>
            <div>
            <h4>Comentários</h4>
                <br>
                <textarea type="text" class="textarea-swing-down" id="mensagem" name="mensagem" rows="3" placeholder="Comente aqui" autocomplete="off" required=""></textarea>
                <label for="mensagem"> <i class="icon icon-bubble-4"></i> </label>
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
            <li><a href="/sobre">Sobre</a></li>
            <li><a href="/galeria">Galeria</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="../contato">Contato</a></li>
        </ul>
      </footer>
</body>
</html>
