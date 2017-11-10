<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrap-themes.github.io/dashboard/index-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 10:02:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>

        Soldo &middot; linweiyu &middot; YOLO

    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{url('css/admin/toolkit-light.css')}}" rel="stylesheet">
    <link href="{{url('css/admin/application.css')}}" rel="stylesheet">

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }
    </style>
</head>


<body>
<div class="bw">
    <div class="dh">
        <div class="en ble">
            <nav class="bll">
                <div class="blf">
                    <button class="bkb bkd blg" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
                        <span class="yz">Toggle nav</span>
                    </button>
                    <a class="blh bmh" href="#">
                        <span class="bv bch bli"></span>
                    </a>
                </div>

                <div class="collapse bki" id="nav-toggleable-md">
                    <form class="blj">
                        <input class="form-control" type="text" placeholder="Search...">
                        <button type="submit" class="ku">
                            <span class="bv bdb"></span>
                        </button>
                    </form>
                    <ul class="nav lq nav-stacked st">
                        <li class="asv">Dashboards</li>
                        <li class="lp">
                            <a class="ln active" href="{{route('home')}}">Overview</a>
                        </li>
                        <li class="lp">
                            <a class="ln " href="{{route('write')}}">Write</a>
                        </li>
                        <li class="lp">
                            <a class="ln "href="{{route('manage')}}">Manage</a>
                        </li>
                        <li class="lp">
                            <a class="ln " href="#">Upload Img</a>
                        </li>
                        <li class="lp">
                            <a class="ln " href="#">Manage Img</a>
                        </li>

                    </ul>
                    <hr class="bmi aah">
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
</div>

<div id="docsModal" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="bmp">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="ol">
                <h4 class="modal-title" id="myModalLabel">Example modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>You're looking at an example modal in the dashboard theme.</p>
            </div>
            <div class="om">
                <button type="button" class="ce kh" data-dismiss="modal">Cool, got it!</button>
            </div>
        </div>
    </div>
</div>


{{--<script src="../assets/js/jquery.min.js"></script>--}}
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="{{url('js/admin/popper.min.js')}}"></script>
<script src="{{url('js/admin/chart.js')}}"></script>
<script src="{{url('js/admin/tablesorter.min.js')}}"></script>
<script src="{{url('js/admin/toolkit.js')}}"></script>
<script src="{{url('js/admin/application.js')}}"></script>
@yield('footer')
<script>
    // execute/clear BS loaders for docs
    $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
</script>
</body>

<!-- Mirrored from bootstrap-themes.github.io/dashboard/index-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 10:02:44 GMT -->
</html>

