<header class="site-navbar @if(Route::is('login') || Route::is('register')) d-none @endif" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="{{ route('home')}}" class="js-logo-clone">Shoppers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>

                  <li>
                    @auth
                    <a href="javascript:void(0)" class="text-decoration-none">{{ auth()->user()->name ?? ''}}</a>
                    @endauth
                    @guest
                    <a>{{ 'guest_'. uniqid()}}</a>
                    @endguest
                  </li>

                  @auth
          @if(auth()->user()->User_Type=='customer')
          <li><a href="#" class="text-decoration-none text-danger"><span class="icon icon-heart"></span></a></li>
          <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li>
          @endif
          @endauth

  <a type="button" class="dropdown-toggle p-1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="icon icon-person"></span>
  </a>
  <div class="dropdown-menu dropdown-menu-right" >
    @if(auth()->user())
    <button type="button" class="dropdown-item">
        <i class="fa-solid fa-user pr-2"></i>Profile
    </button>

    @if(auth()->user()->User_Type=='admin' || auth()->user()->User_Type=='moderator')
    <button type="button" class="dropdown-item" onclick="window.location.href='{{ route('dashboard') }}'">
    <i class="fas fa-tachometer-alt pr-2"></i> Dashboard
        </button>
@endif
<a class="d-block mx-auto" href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">
    <i class="fa-solid fa-arrow-right-from-bracket"></i>
    Log Out
    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: ">
        @csrf
    </form>
</a>
@else
<button class="dropdown-item" type="button" onclick="window.location.href='{{route('login')}}'">Login</button>
<button class="dropdown-item" type="button" onclick="window.location.href='{{route('register')}}'">Register</button>
@endif
  </div>
        </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children">
              <a href="{{ route('home')}}">Home</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-children active">
              <a href="{{ route('about')}}">About</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li><a href="{{ route('shop')}}">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="{{ route('contact')}}">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>