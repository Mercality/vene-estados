<nav class="blue darken-2">
    <div class="nav-wrapper container">

    <a id="menu-btn" class="btn btn-flat hide-on-med-and-up">
        <i class="material-icons">menu</i>
    </a>

      <a href="#" class="brand-logo">VeneDatos</a>
      <ul id="nav-mobile" class="right hide-on-small-only">
        <li><a href="sass.html">VenEstados</a></li>
        <li><a href="badges.html">VenRIF</a></li>
        <li><a href="collapsible.html">Ven</a></li>
        @if(!Auth::check())<li><a href="github_login"><i  class="icon-github-circled social-icon"><span>Github Login</span></i></a></li> @endif
        @if(Auth::check())<li><a class="dropdown-button" data-activates="dropdown2" href="#">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>@endif
      </ul>

      <ul id="dropdown1" class="dropdown-content">
        <li><a href="user/keys">API Key</a></li>
        <li><a href="user/logout">Cerrar Sesion</a></li>
      </ul>

      <ul id="dropdown2" class="dropdown-content">
        <li><a href="user/keys">API Key</a></li>
        <li><a href="user/logout">Cerrar Sesion</a></li>
      </ul>




      <ul id="slide-out" class="side-nav">
        @if(!Auth::check())<li><a href="github_login"><i class="icon-github-circled social-icon"><span>Github Login</span></i></a></li> @endif
        @if(Auth::check())<li><a class="dropdown-button" data-activates="dropdown1" href="#">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>@endif
        <li class="divider"></li>
        <li><a href="sass.html">VenEstados</a></li>
        <li><a href="badges.html">VenRIF</a></li>
        <li><a href="collapsible.html">Ven</a></li>
         
      </ul>


    </div>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</nav>
