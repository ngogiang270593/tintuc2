<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style> 
         html{
         	background-image: url("{!! url('public') !!}/upload/1.jpg");
         }
    </style>
    <title>login</title>
      <!-- Bootstrap -->
    <link href="{!!url('public/admin/css/bootstrap.min.css')!!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{!!url('public/admin/css/font-awesome.min.css')!!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!!url('public/admin/css/nprogress.css')!!}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{!!url('public/admin/css/animate.min.css')!!}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{!!url('public/admin/css/custom.min.css')!!}" rel="stylesheet">
   
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <!-- <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
    
                    Collapsed Hamburger
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
    
                    Branding Image
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
    
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    Left Side Of Navbar
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
    
                    Right Side Of Navbar
                    <ul class="nav navbar-nav navbar-right">
                        Authentication Links
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
    
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    
        @yield('content')
    </div> -->
    @yield('content')
    <script src="/js/app.js"></script>
</body>
</html> 
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    Meta, title, CSS, favicons, etc.
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>login</title>

  
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
            <div class="animate form login_form">
              <section class="login_content">
                <form>
                  <h1>Login</h1>
                  <div>
                    <input type="text" class="form-control" placeholder="Username" required="" />
                  </div>
                  <div>
                    <input type="password" class="form-control" placeholder="Password" required="" />
                  </div>
                  <div>
                    <a class="btn btn-default submit" href="index.html">Log in</a>
                    
                  </div>

                  <div class="clearfix"></div>

               
                </form>
              </section>
            </div>    
      </div>
    </div>
  </body>
</html> -->
