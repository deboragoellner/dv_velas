<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DV Velas</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">DV Velas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login"></a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="register">Cadastrar</a>
                </li>
              </ul>
            </div>
        </nav>

        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                    @else
                        <a href="{{ route('login') }}">

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-8 text-sm text-green-700 dark:text-gray-500 underline"></a>
                        @endif
                    @endauth
                </div>
            @endif
            <div>
                <style>
                    .imgmenu {
                      width: 50%;
                      margin-left: 25%;
                      margin-right: 15%;
                    }
                </style>
                <img class="imgmenu" src="/storage/img/vela1.avif">
            </div>
            <br>
            <div class="valores">
            <style>
                .valores {
                border: 1px solid gray;
                padding: 8px;
                }

                h1 {
                text-align: center;
                text-transform: uppercase;
                color: tan;
                font-size: 50px;
                font-family: Aboreto;
                }

                .missao {
                text-indent: 50px;
                text-align: justify;
                letter-spacing: 3px;
                margin-left: 2%;
                margin-right: 2%;
                }
            </style>
                <h1>Missão dv velas <br></h1>
                <p class="missao"><br>  Nós da  DV velas prezamos por trazer aos nossos clientes, colaboradores e associados, a melhor experiência na aquisição de suas velas. Não apenas como itens decorativos, mas também como itens de valor para aqueles que se juntarem à família DV Velas.
                <br>    Estimando sempre a qualidade e elegância de nossos produtos. De forma consciente visando o cuidado com o meio ambiente. <br> <br></p>
            </div>
        </div>
        <br>
    </body>
    <footer>
        <style>
            footer {
                text-align: center;
                padding: 3px;
                font-family: Aboreto;
                background-color: Tan;
                color: white;
            }
        </style>
        <p><strong>Autoras: Débora Goellner e Vitória Welter</strong><br>
        <p>&copy 2023 Todos os direitos reservados</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
