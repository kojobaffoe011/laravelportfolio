<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kojo Baffoe</title>

        <!-- Fonts -->
        <link rel="shortcut icon" href="assets/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
        />
        <link rel="stylesheet" href="css/all.min.css" />
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@531&display=swap"
        rel="stylesheet"
        />
        <link rel="shortcut icon" href="assets/favicon.ico">


        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Kojo Baffoe is great
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
        <div class="section" id="banner">
      <header class="header">
        <h3>Kojo Baffoe</h3>
        <ul id="headerul">
          <li>
            <a href="#about">
              <h5>About</h5>
            </a>
          </li>
          <li>
            <a href="#contact">
              <h5>Contact</h5>
            </a>
          </li>
        </ul>
      </header>
      <div id="home">
        <div id="home-left"></div>
        <div id="home-right">
          <h1 id="intro">
            Hello! I am
            <span id="hello" class="animate__animated animate__headShake">
              Kojo Baffoe.
            </span>
          </h1>
          <p id="text">
            A balanced, highly capable and technically minded young university
            student who works well both on own initiative and in small groups
            and teams, within and outside academic and technical environments.
            Ready to put his very best in everything he does, learn and be
            taught new things to better himself to build a better world
          </p>

          <button
            onclick="window.location.href = '#contact';"
            type="button"
            class="btn btn-outline-success btn-lg"
          >
            Hire Me!
          </button>
        </div>
      </div>
    </div>
    <div class="section" id="about">
      <div id="rgba">
        <div id="rgbaleft">
          <h1>About Me</h1>
          <ul id="aboutul">
            <li>
              <div class="ul-id">1.</div>
              <div class="ul-paragraph">
                A Ghanaian, who had his secondary education in Presbyterian
                Boys' Scondary School and now level 400, computer engineering
                student in the University of Ghana.
              </div>
            </li>
            <li>
              <div class="ul-id">2.</div>
              <div class="ul-paragraph">
                Worked with Ghana Meteorological Agency as IT personel, network
                personel and was responsible for recording and updating weather
                forecast news.
              </div>
            </li>
            <li>
              <div class="ul-id">3.</div>
              <div class="ul-paragraph">
                Small scale business owner, I hold in high esteem the spirit of
                enteerpreneurship and believe everyone should be able to do
                something small as little as it may seem because it will go
                along way to help.
              </div>
            </li>
            <li>
              <div class="ul-id">4.</div>
              <div class="ul-paragraph">
                Major interest in web and mobile app development, knowledgeable
                when it comes to computer networking.
              </div>
            </li>
          </ul>
        </div>
        <div id="rgbaright">
          <div
            id="carouselExampleFade"
            class="carousel slide carousel-fade"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="assets/img1.jpg"
                  class="d-block w-100"
                  alt="..."
                  height="100%"
                />
              </div>
              <div class="carousel-item">
                <img src="assets/img2.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="assets/img3.jpg" class="d-block w-100" alt="..." />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleFade"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleFade"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section" id="contact">
      <header class="header">
        <h3>Contact Me</h3>
        <ul id="headerul1">
          <li>
            <a href="#banner">
              <h5>Back to top</h5>
            </a>
          </li>
        </ul>
      </header>
      <h1 id="email">
        <a href="mailto: kojobaffoe100@yahoo.com">Send me an email<i class="fab fa-envelope"></i
          >.</a>
      </h1>
      <h2 id="or">OR</h2>
      <h1 id="dm">
        <a href="https://twitter.com/kojobaffoe100" target="_blank"
          >Send me a direct message<i class="fab fa-twitter"></i
            ></i>.</a
        >
      </h1>
    </div>
    <div>
      <footer>
        <h3 style="font-weight: 900; text-align: center;">
          CREATED BY KOJO BAFFOE © 2020
        </h3>
        <p>
          <a href="https://instagram.com/k.baffs" target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="https://twitter.com/kojobaffoe100" target="_blank"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="https://github.com/kojobaffoe011" target="_blank"
            ><i class="fab fa-github"></i
          ></a>
        </p>
      </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
  </body>
    </body>
</html>
