<!DOCTYPE html>
  <html>
    <head>
    <title>@yield('title')</title>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../css/sweetalert.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      @yield('header')
    </head>

    <body>
      <!-- narbar -->
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo" style="margin-left: 20px;"><i class="material-icons">cloud</i>Logo</a>
            <ul class="right hide-on-med-and-down">
              <li><a href="sass.html"><i class="material-icons">settings</i></a></li>
              <li><a href="/"><i class="material-icons">exit_to_app</i></a></li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- end navbar -->

      @yield('body')

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript" src="../js/sweetalert.min.js"></script>
      <script type="text/javascript">
        $('select').material_select();
      </script>
      @yield('footer')
    </body>
  </html>