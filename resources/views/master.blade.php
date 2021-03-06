<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{url('css/materialize.min.css')}}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{url('css/styles.css')}}"/>
      <link type="text/css" rel="stylesheet" href="{{url('css/fontello.css')}}"/>
      <link type="text/css" rel="stylesheet" href="{{url('css/monokai-sublime.css')}}"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="grey lighten-3">
      @include('navbar')
      <div class="container">

        @yield('content')
      </div>

      @include('footer')






      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
      <script type="text/javascript" src="{{url('js/materialize.min.js')}}"></script>
      <script src="/js/highlight.js"></script>
      <script src="/js/clipboard.min.js"></script>
      <script src="/js/scripts.js"></script>
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <script>
        $(document).ready(function() {
            hljs.initHighlightingOnLoad();
          $(".button-collapse").sideNav();

          $("#menu-btn").click(function(e) {
            $('.button-collapse').sideNav('show');
          });

          $(".dropdown-button").dropdown({ hover: false });
        });

      </script>
    </body>
  </html>
