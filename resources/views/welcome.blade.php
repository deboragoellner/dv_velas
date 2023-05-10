<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DV Velas</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
                  <a class="nav-link" href="register">Cadastrar</a>
                </li>
              </ul>
            </div>
        </nav>

        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-8 text-sm text-green-700 dark:text-gray-500 underline"></a>
                        @endif
                    @endauth
                </div>
            @endif

            <body>
                <div class="slideshow-container" style="text-align: center">
                  <div class="mySlides fade">
                    <img src="/storage/img/vela1.avif" style="width:60%">
                  </div>
                  <div class="mySlides fade">
                    <img src="/storage/img/vela2.avif" style="width:60%">
                  </div>
                  <div class="mySlides fade">
                    <img src="/storage/img/vela3.avif" style="width:60%">
                  </div>
                  </div>
                  <br>

                  <div style="text-align:center">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                  </div>

                  <script>
                  let slideIndex = 0;
                  showSlides();

                  function showSlides() {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}
                    for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 2000); // Change image every 2 seconds
                  }
                  </script>
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
                  }

                  .missao {
                    text-indent: 50px;
                    text-align: justify;
                    letter-spacing: 3px;
                  }
                </style>
                  <h1>Missão dv velas</h1>
                  <p class="missao">Nós da  DV velas prezamos por trazer aos nossos clientes, colaboradores e associados, a melhor experiência na aquisição de suas velas. Não apenas como itens decorativos, mas também como itens de valor para aqueles que se juntarem à família DV Velas.
                  <br>Estimando sempre a qualidade e elegância de nossos produtos. De forma consciente visando o cuidado com o meio ambiente.</p>
                </div>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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
            </div>
        </div>
    </body>
</html>
