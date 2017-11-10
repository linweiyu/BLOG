<!DOCTYPE html>
<html>
<head>
    <!-- Document Settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page Title -->
    <title>Soldo--Welcome to My Blog. </title>
    <link rel="stylesheet" href="{{url('css/front/font-awesome.min.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{url('css/front/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/front/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/front/style.css')}}">
    <link rel="stylesheet" href="{{url('css/front/responsive.css')}}">
</head>
<body>
<!-- pre-loader -->
<div id="st-preloader">
    <div class="st-preloader-circle"></div>
</div>
<!-- header -->
<header class="header">
    <div class="logo text-center">
        <h1><a href="{{url("/")}}"> <img src="{{url("assets/images/logo.png")}}" alt="SOLDO"></a></h1>
        <p>Welcome to My Blog. I am YOLO !</p>
    </div>
</header>
<!-- start main menu -->
<nav class="navbar main-menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="myNavbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="index-2.html" class="dropdown-toggle " data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">home</a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="{{url('/')}}">See Some Articles</a></li>
                    </ul>
                </li>
                {{--<li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button"--}}
                                        {{--aria-haspopup="true" aria-expanded="false">Gallery</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{url('/images')}}">See my Gallery</a></li>--}}

                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="{{url('/essays')}}" class="">Essays</a></li>--}}
                <li><a href="{{url('/about')}}">About </a></li>
                <li><a href="{{url('/contact')}}"> Contact</a></li>
            </ul>
            <div class="top-social-icons pull-right">
                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                {{--<a href="#"><i class="fa fa-instagram"></i></a>--}}
                {{--<a href="#"><i class="fa fa-pinterest"></i></a>--}}
                {{--<a href="#"><i class="fa fa-heart"></i></a>--}}
                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}

                <div class="top-search">
                    <a href="#" class="sactive"><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="show-search">
                <form method="get" id="search-form" action="{{url("/search")}}">
                    <input type="text" placeholder="Search and hit enter..." name="str" >
                </form>
            </div>
        </div>
    </div>
</nav>
<!-- end main menu -->
<!-- start main content -->
<div class="main-content">
    <div class="container">

        @yield('main')

    </div>
</div>
<!-- end main content -->
<!-- start footer area -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="footer-title text-uppercase">About Me</h3>
                    <div class="about-content">I am a software engineering in China.
                    </div>

                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-tag">
                    <h3 class="footer-title text-uppercase">Tags List</h3>
                    @foreach($tags as $tag)
                        {{link_to_action('TagController@show',$tag->name,$tag->name,['class'=>'']) }}
                    @endforeach
                </aside>
            </div>
            <div class="col-md-4">
                <div class="address">
                    <h4 class="text-uppercase">contact Info</h4>
                    <p><i class="fa fa-home"></i> Shenyang China</p>
                    {{--<p><i class="fa fa-phone"></i> Phone: +123 456 78900</p>--}}
                    <p><i class="fa fa-envelope"></i>linweiyu10@outlook.com</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="copyright-area">
                    <div class="copy-text pull-left">
                        <p>&copy; 2017 <a href="{{url('/')}}">SOLDO</a>
                    </div>
                    {{--<div class="pull-right social-share footer-social-icon">--}}
                        {{--<span>Follow Me: </span>--}}
                        {{--<ul class="">--}}
                            {{--<li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                            {{--<li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>--}}
                            {{--<li><a class="s-behance" href="#"><i class="fa fa-behance"></i></a></li>--}}
                            {{--<li><a class="s-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer area -->
<script src="{{url('js/front/jquery.min.js')}}"></script>
<script src="{{url('js/front/bootstrap.min.js')}}"></script>
<script src="{{url('js/front/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('js/front/jquery.scrollUp.min.js')}}"></script>
<script src="{{url('js/front/main.js')}}"></script>
@yield('script')
</body>

</html>