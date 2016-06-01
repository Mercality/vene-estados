<nav class="blue darken-2">
    <a id="menu-btn" class="btn btn-flat hide-on-med-and-up">
        <i class="material-icons">menu</i>
    </a>
    <div class="nav-wrapper container">



      <a href="{{urlT('/')}}" class="brand-logo">VeneDatos</a>
      <ul id="nav-mobile" class="right hide-on-small-only">
        <li><a href="https://estados.venedatos.com.ve">VenEstados</a></li>
        <li><a href="https://rif.venedatos.com.ve">VenRIF</a></li>

        @if(!Auth::check())<li><a href="{{url('github_login')}}"><i  class="icon-github-circled social-icon"><span>Github Login</span></i></a></li> @endif
        @if(Auth::check())<li><a class="dropdown-button" data-activates="dropdown2" href="#"><img src="{{Auth::user()->avatar_url}}" alt=""><i class="material-icons right">arrow_drop_down</i></a></li> @endif
      </ul>

      <ul id="dropdown1" class="dropdown-content">

        <li><a href="{{urlT('user/keys')}}">API Key</a></li>
        <li><a href="{{urlT('user/logout')}}">Cerrar Sesion</a></li>
      </ul>

      <ul id="dropdown2" class="dropdown-content">
      <li><a class="disabled" href="#">Usuario: @if(Auth::check()) {{Auth::user()->login}} @endif</a></li>
        <li class="divider"></li>
        <li><a href="{{urlT('user/keys')}}">API Key</a></li>
        <li><a href="{{urlT('user/logout')}}">Cerrar Sesion</a></li>
      </ul>




      <ul id="slide-out" class="side-nav">
        @if(!Auth::check())<li><a href="github_login"><i class="icon-github-circled social-icon"><span>Github Login</span></i></a></li> @endif
        @if(Auth::check())<li><a class="dropdown-button" data-activates="dropdown1" href="#"><img src="{{Auth::user()->avatar_url}}" alt=""> <span>{{Auth::user()->login}}</span><i class="material-icons right">arrow_drop_down</i></a></li>@endif
        <li class="divider"></li>
        <li><a href="https://estados.venedatos.com.ve">VenEstados</a></li>
        <li><a href="https://rif.venedatos.com.ve">VenRIF</a></li>

      </ul>


    </div>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</nav>
