
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ route('product') }}">Perma-Farmer</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
    </button>            
    <div class="collapse navbar-collapse" id="navbarResponsive">   

        <?php
        $services = '#services';
        $portfolio = '#portfolio';
        $about = '#about';
        $team = '#team';
        $contact = '#contact';

        if ( $_SERVER['REQUEST_URI'] != '/perma_farmer/public/') 
        {
            $services = '';
            $portfolio = '';
            $about = '';
            $team = '';
            $contact = '';
        }
        ?>     
        <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php $services ?>">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php $portfolio ?>">Producteurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php $about ?>">Histoire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php $team ?>">Équipe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php $contact ?>">Contact</a>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
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
        </li>
        @endguest
    </ul>
</div>
</div>
</nav>