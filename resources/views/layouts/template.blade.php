<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Import materialize.css and other framework-->
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/app.css') }}"  media="screen,projection"/>
        <link type="image/x-icon" rel="shortcut icon" href="{{ asset('favicon.png') }}">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


        <title>@yield('title')</title>
    </head>

    <body>

        <nav role="navigation">
            <div class="nav-wrapper container">
            <a id="logo-container" href="{{ route('home') }}" class="brand-logo">URL</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url('tour/') }}">Tour</a></li>
                    <li><a href="{{ url('about/') }}">About</a></li>
                    <li><a href="{{ url('contact/') }}">Contact</a></li>
                    <li><a href="{{ url('login/') }}" class="waves-effect waves-light btn red accent-1">Login</a></li>
                    <li><a href="{{ url('signup/') }}" class="waves-effect waves-light btn white red-text text-accent-1">Sign-Up</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="{{ url('tour/') }}">Tour</a></li>
            <li><a href="{{ url('about/') }}">About</a></li>
            <li><a href="{{ url('contact/') }}">Contact</a></li>
            <li><a href="{{ url('login/') }}" class="waves-effect waves-light btn red accent-1">Login</a></li>
            <li><a href="{{ url('signup/') }}" class="waves-effect waves-light btn white red-text text-accent-1">Sign-Up</a></li>
        </ul>
        @yield('content')

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">URL.sh</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="{{ url('tour/') }}">Tour</a></li>
                            <li><a class="grey-text text-lighten-3" href="{{ url('about/') }}">About</a></li>
                            <li><a class="grey-text text-lighten-3" href="{{ url('contact/') }}">Contact</a></li>
                            <li><a class="grey-text text-lighten-3" href="{{ url('login/') }}">Login</a></li>
                            <li><a class="grey-text text-lighten-3" href="{{ url('signup/') }}">Sign-Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright All Right Reserved
                    <a class="grey-text text-lighten-4 right" href="https://www.facebook.com/alladin.troumba">Facebook</a>
                </div>
            </div>
        </footer>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/materialize.min.js') }}"></script>
        <script>
        $(document).ready(function(){
            $('.parallax').parallax();
            $('.sidenav').sidenav();
            $('.preloader-wrapper.small.active').css({
                display : 'none'
            });
            $('.submit').click(function(){
                $('.helper-text').css({
                    display : 'none'
                });
                $('.preloader-wrapper.small.active').css({
                    display : 'inline-block'
                });
            });
        });
        </script>
    </body>
</html>
