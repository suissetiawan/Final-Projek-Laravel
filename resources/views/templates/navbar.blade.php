
<nav class="main-header navbar navbar-expand navbar-white navbar-light ">
  <!-- Left navbar links -->
  <ul class="navbar-nav ">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
<<<<<<< HEAD
  <div class="nav-item dropdown ml-auto">
        <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-outline-secondary " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
=======
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
>>>>>>> cb23218b315a48a50e129fbb6dda658f391312ea
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a href="/profile" class="nav-link dropdown-item">Profil</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          <div class="dropdown-divider"></div>
        </div>
    </div>
</nav>