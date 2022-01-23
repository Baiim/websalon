<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="name of web site">
<meta name="author" content="FriendsLaboratory">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>@yield('title')</title>

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

<!-- STYLES -->
@include('includes.style')
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

</head>

<body>


<!-- WRAPPER ALL -->
<div class="makeup_fl_wrapper_all">

    <!-- CONTENT -->
    <div class="makeup_fl_content">
    	<div class="container">



    			<!-- VERTICAL MENU -->
    			@include('includes.header')
    			<!-- /VERTICAL MENU -->


    			<!-- CONTENT IN -->
                @include('includes.header-mobile')
    			@yield('content')
    			<!-- /CONTENT IN -->

    	</div>
    </div>
    <!-- /CONTENT -->

</div>
<!-- /WRAPPER ALL -->



<!-- SCRIPTS -->
@include('includes.script')
<!-- /SCRIPTS -->

</body>
</html>
