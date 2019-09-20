<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perma-Farmer</title>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
    <div class="content">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Perma-Farmer</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Producteurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Histoire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team">Équipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Admin ou account -->
        @auth
        <div class="flex-center position-ref full-height">            
            @if (Auth::user()->isAdmin())           
            <a class="nav-link js-scroll-trigger" href="{{ route('admin.dashboard') }}">
                Admin
            </a>
            @endif

            @if (!Auth::user()->isAdmin())
            <a class="nav-link js-scroll-trigger" href="{{ route('admin.dashboard') }}">
                Gérer mon abonnement
            </a>
            @endif
        </div>
        @endauth

        <!-- Authentication Links -->
        <div class="flex-center position-ref full-height">            
            @guest
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
            @else

            <!-- Logout -->
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endguest
    </div>
</nav>

<!-- Header -->
<header class="masthead" id="page-top" style="background-image: url('{{ asset('/images/header-bg.jpg')}}');
">
<div class="container">
    <div class="intro-text">
        <div class="intro-lead-in">Bienvenue chez Perma-Farmer !</div>
        <div class="intro-heading text-uppercase">C'est un plaisir !</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">S'abonner</a>
    </div>
</div>
</header>

<!-- Services -->
<section class="page-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nos services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Des fruits et des légumes locaux et de saison</h4>
            <p class="text-muted">Ils sont bons mes melons, ils sont ronds mes potirons, mes tomates sont délicates et mes poireaux sont très beaux.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Sans produits phytosanitaires</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
        quam architecto quo inventore harum ex magni, dicta impedit.</p>
    </div>
    <div class="col-md-4">
      <span class="fa-stack fa-4x">
        <i class="fas fa-circle fa-stack-2x text-primary"></i>
        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
    </span>
    <h4 class="service-heading">Commander en ligne, retirer en magasin</h4>
    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime
    quam architecto quo inventore harum ex magni, dicta impedit.</p>
</div>
</div>
</div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nos produits</h2>
                <h3 class="section-subheading text-muted">Voici quelques exemples de fruits et légumes que nous proposons. </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('../resources/img/portfolio/01-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Tomates</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('../resources/img/portfolio/02-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Carottes</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('../resources/img/portfolio/03-thumbnail.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Raisins</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Notre histoire</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset('../resources/img/about/1.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Septembre 2017</h4>
                                    <h4 class="subheading">Lancement du projet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                        recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                    consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset('../resources/img/about/2.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mars 2018</h4>
                                    <h4 class="subheading">Ouverture du premier magasin Perma-Farmer</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                        recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                    consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset('../resources/img/about/3.jpg')}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Septembre 2019</h4>
                                    <h4 class="subheading">Lancement du site web</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                        recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                    consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>
                                    Vers<br> 
                                    un futur<br>
                                    radieux !<br>
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-light page-section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">L'équipe</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('../resources/img/team/1.jpg')}}" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Owner</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('../resources/img/team/2.jpg')}}" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('../resources/img/team/3.jpg')}}" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Farmer</p>                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                    laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="{{asset('../resources/img/logos/envato.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="{{asset('../resources/img/logos/designmodo.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="{{asset('../resources/img/logos/themeforest.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="{{asset('../resources/img/logos/creative-market.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="page-section" id="contact" style="background-image: url('{{ asset('/images/legumes.jpg')}}');
    ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nous contacter</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Nom *"
                                required="required"
                                data-validation-required-message="Nom requis.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Email *"
                                required="required"
                                data-validation-required-message="Adresse Email requis.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Téléphone *"
                                required="required"
                                data-validation-required-message="Numéro de téléphone requis.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Votre Message *"
                                required="required"
                                data-validation-required-message="Message requis."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
                            type="submit">Envoyer le message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; A9DEV 2019</span>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Politique de confidentialité</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Condition d'utilisation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<!-- Portfolio Modals -->

<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2 class="text-uppercase">Tomates</h2>
            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-fluid d-block mx-auto" src="{{asset('../resources/img/portfolio/01-thumbnail.jpg')}}" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
            <ul class="list-inline">
              <li>Disponibilité : Juillet - Août - Septembre - Octobre</li>
          </ul>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2 class="text-uppercase">Carottes</h2>
            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-fluid d-block mx-auto" src="{{asset('../resources/img/portfolio/02-thumbnail.jpg')}}" alt="">
            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
            <ul class="list-inline">
              <li>Disponibilité : Toute l'année</li>
          </ul>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2 class="text-uppercase">Raisins</h2>
            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
            <img class="img-fluid d-block mx-auto" src="{{asset('../resources/img/portfolio/03-thumbnail.jpg')}}" alt="">
            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
            <ul class="list-inline">
              <li>Disponibilité : Septembre - Octobre</li>
          </ul>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<!-- Custom scripts for this template -->
<script src="{{asset('js/app.js')}}"></script>
</body>

</html>
