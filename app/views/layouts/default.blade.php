<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Beacon Workshop</title>

<!--<link rel="stylesheet" type="text/css" href="css/screen.css">-->
{{ HTML::style('css/screen.css') }}


 {{ HTML::style("bower_components/owl.carousel/dist/assets/owl.carousel.min.css") }}
 {{ HTML::style("bower_components/owl.carousel/dist/assets/owl.theme.default.min.css") }}


<!--[if lt IE 9]>
    <script src="bower_components/html5shiv/html5shiv.js"></script>
<![endif]-->
</head>
<body>

<header class="header">
 
 <div class="container">
  <div id="bacon"><a href="/">{{ HTML::image("img/bacon.png", $alt="Bacon") }} </a></div>

  <div id="header-right">
	   <h1>Everything's better with Beacon</h1>
	   <h2>(World Tour 2014)</h2>
	
		<a href="https://www.decipherinc.com/n/">{{ HTML::image("img/beacon_logo.svg", $alt="Beacon") }}</a>

		<a href="/event/register" id="registerBtn">Register Now</a>

   </div>
	
</div><!-- /container --> 

</header>


<div class="wrapper">
  <div class="container">
	<nav role="navigation" class="main-nav clearfix">
		<a href="#" id="pull">Menu</a>
		<ul class="clearfix">
			<li><a href="/whyattend">Why Attend</a></li>
			<li><a href="/agenda">Agenda</a></li>
			<li><a href="/keynote">Keynote Speakers</a></li>
			<li><a href="/locations">Locations</a></li>
			<li><a href="/contact">Contact Us</a></li>
		</ul>


	</nav>

	  <div class="page-content">

	 @if (Session::get('flash_message'))
	   <div class="flash">
	   	{{ Session::get('flash_message') }}
	   </div>
      @endif
          
          @yield('content')

	  </div><!--/page-content-->
	</div><!-- /container -->
</div><!-- /wrapper -->


<script src="//localhost:35729/livereload.js"></script>
{{ HTML::script("bower_components/jquery/dist/jquery.js") }}
{{ HTML::script("bower_components/owl.carousel/dist/owl.carousel.min.js") }}
{{ HTML::script("js/site.js") }}
</body>
</html>