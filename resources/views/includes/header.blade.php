<!--Barra de navegacao-->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">
        <!--Link da imagem do logo do caravan-->
        <a href="index.html" class="navbar-brand">
            <!--A imagem-->
            <img src="img/caravan.svg" alt="Caravan">
        </a>
        <!--Botao de menu-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Tudo o que estiver nessa div vamos esconder -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Lista de links da navegacao-->
            <!--Margem a esquerda sera auto e a direita fixa-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <!--Link do botao que vai encolher-se ao longo da exibicao-->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="local.html">California</a>
                        <a class="dropdown-item" href="local.html">Paris</a>
                        <a class="dropdown-item" href="local.html">Dublin</a>
                    </div>
                </li>
                <!--Elementos do menu-->
                <li class="nav-item">
                    <a class="nav-link" href="planos.html">Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contato.html">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary ml-md-2" href="inscricao.html">Inscreva-se</a>
                </li>
            </ul>
        </div>
    </nav>
