<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('2.png') }}" alt="Logo" />
          <span>
            AZALProCV
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/work') }}">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/category') }}">Category</a>
            </li>
          </ul>
          <div class="user_option">
            {{-- <a href="#">
              <span>
                Login
              </span>
            </a> --}}

            
            {{-- <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
          </form> --}}
          @auth
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
          </form> 
          @else
            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log in</a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</a>
            @endif
          @endauth
          </div>
        </div>
        <div>
          <div class="custom_menu-btn">
            <button>
              <span class="s-1"></span>
              <span class="s-2"></span>
              <span class="s-3"></span>
            </button>
          </div>
        </div>
      </nav>
    </div>
</header>