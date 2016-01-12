<!DOCTYPE html>
<html>
    <head>
        <title>Services</title>
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <link href="/css/all.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body class="@yield('background')">

<!--
        <nav class="navbar navbar-default" role="navigation-demo" id="demo-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.creative-tim.com">Creative Tim</a>
                </div>

                <div class="collapse navbar-collapse" id="navigation-example-2">
                    <ul class="nav navbar-nav navbar-right">
                        <a href="/paper-kit/components" class="btn btn-simple">Components</a>
                        <a href="/paper-kit/tutorial" class="btn btn-simple">Tutorial</a>
                        <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple"><i class="fa fa-facebook"></i></a>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="alert alert-danger landing-alert" style="display: none">
            <div class="container text-center">

            </div>
        </div>
        -->

        <!-- Fixed navbar -->

        <nav class="navbar navbar-default" id="demo-navbar" role="navigation-demo">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><i class="fa fa-map"></i></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <a class="{{ Request::is('/') ? 'active' : '' }} btn btn-simple" href="/">Home</a>
                        <a class="{{ Request::is('search') ? 'active' : '' }} btn btn-simple" href="/search">Search</a>
                        <a class="{{ Request::is('register') ? 'active' : '' }} btn btn-simple" href="/register">Sign Up</a>
                        @if (Auth::check() && Auth::user()->supplier)
                        <a class="{{ Request::is('profile') || Request::is('supplier/' . Auth::user()->supplier->id) ? 'active' : '' }} btn btn-simple" href="/profile">
                            Profile
                        </a>
                        @endif
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <a class="{{ Request::is('auth/logout') ? 'active' : '' }} pull-right btn btn-simple" href="/auth/logout"><i class="fa fa-lock"></i> Log Out</a>
                        @else
                            <a class="{{ Request::is('auth/login') ? 'active' : '' }} pull-right btn btn-simple" href="/auth/login"><i class="fa fa-lock"></i> Log In</a>
                        @endif
                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </nav>

        @yield('content')

        <footer class="footer-demo section-dark">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li class="copyright">All development: Matt Burgess</li>
                        <li>
                            <a href="https://github.com/myclientinfo">
                                <i class="fa fa-github"></i> Github
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/mattaugamer">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2015 Matt Burgess
                </div>
            </div>
        </footer>

    </body>

    <script src="/js/main.js"></script>

</html>
