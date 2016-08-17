<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>tiririka.co.tz</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous"> -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        body {
	         padding-top:70px;
         }

        /*.navbar-header {
        float: none;
        }
        .navbar-toggle {
        display: block;
        }*/

        /*.navbar-collapse.collapse {
        display: none!important;
        }
        */
        /*.navbar-nav {
        float: none!important;
        }
        .navbar-nav>li {
        float: none;
        }*/


        /*
        .navbar-collapse.collapse.in{
        display:block !important;
        }*/

        .navbar-nav>li {
        float: left;
        /*text-align: center;*/
        }

        /*space between nav-tabs and cards*/
        .nav-tabs{
        margin-bottom: 15px;
        }

        /*styling for card*/

        .card {
        display: block;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        transition: box-shadow .25s;
      }

      .card-page-content {
        display: block;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
        transition: box-shadow .25s;

        min-height: 70vh;
      }

      .card:hover {
        box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      }

      .img-card {
        width: 100%;
        height:250px;
        border-top-left-radius:2px;
        border-top-right-radius:2px;
        display:block;
        overflow: hidden;
      }

      .img-card-view {
        width: 100%;
        height:auto;;
        border-top-left-radius:2px;
        border-top-right-radius:2px;
        display:block;
        overflow: hidden;
      }

      .img-card img{
        width: 100%;
        height: inherit;
        align: middle;
        margin-top: 15px;
        object-fit:cover;
        transition: all .25s ease;
      }

      .card-content {
        padding:5px;
        text-align:left;
      }

      .card-title {
        margin-top:0px;
        font-weight: 700;
        font-size: 1.65em;
      }

      .card-title a {
        color: #000;
        text-decoration: none !important;
      }

      .card-title-page {
        margin-top:0px;
      }

      .card-heading {
        font-weight: 700;
        font-size: 1.65em;
      }

      hr.line {
        background-color: #fff;
        border-top: 2px dotted #8c8b8b;
      }

      /*.card-read-more {
        border-top: 1px solid #D4D4D4;
      }

      .card-read-more a {
        text-decoration: none !important;
        padding:10px;
        font-weight:600;
        text-transform: uppercase;
      }*/

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                  tiririka
              </a>

              <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          </div>

        </div>


    </nav>
    <div class="container">
    <div class="navbar navbar-inverse collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      <li><a href="{{ url('/home') }}">#Home</a></li>
                      <li><a href="{{ url('/home') }}">#Utani</a></li>
                      <li><a href="{{ url('/home') }}">#Facts</a></li>
                      <li><a href="{{ url('/home') }}">#Teknolojia</a></li>

                  <!-- </ul> -->

                  <!-- Right Side Of Navbar -->
                  <!-- <ul class="nav navbar-nav "> -->
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ url('/login') }}">#Login</a></li>
                          <li><a href="{{ url('/register') }}">#Register</a></li>
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                              </ul>
                          </li>
                      @endif
                  </ul>
              </div>
    </div>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
