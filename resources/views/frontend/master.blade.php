<!DOCTYPE html>
<html lang="en">
<head>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>COLORMAG - NEWS SITE</title>
		<link href="{{url('style_frontend/css/bootstrap.min.css')}}" rel="stylesheet"  />
		<link href="{{url('style_frontend/css/bootstrap-theme.min.css') }}" rel="stylesheet"/>
		<link href="{{ url('style_frontend/css/style.css') }}" rel="stylesheet" />
		<script src="{{ url('style_frontend/js/jquery.min.js') }}"></script>
		<script src="{{ url('style_frontend/js/bootstrap.min.js') }}"></script>
		<link href='https://fonts.googleapis.com/css?family=Nokora|Francois+One' rel='stylesheet'>
		</head>
</head>
<body>
	<div class="col-md-12 top" id="top">
		<div class="col-md-9 top-left">
			<div class="col-md-3">
				<span class="day">Saturday, December 24, 2016</span>
			</div>
			<div class="col-md-9">

			</div>
		</div>

	</div>

	<div class="col-md-12 brand">
		<div class="col-md-4 name">

            <span style="color:#c7241c";>CAMBO</span><span style="color:#035afc";>NEWS</span>
		</div>
		<div class="col-md-8">
			<img src="images/final-news-site_06.gif" width="100%" />
		</div>
	</div>

	<div class="col-md-12 main-menu">
		<div class="col-md-10 menu">
			<nav class="navbar">
				<div class="collapse navbar-collapse" id="mynavbar">
					<ul class="nav nav-justified" style="font-family: 'Nokora';font-size:20px;">
						<li><a href="#" class="active"><span class="glyphicon glyphicon-home"></span></a></li>
						<li><a href="#">ព័ត៍មានកម្សាន្ត</a></li>
						<li><a href="#">ព័ត៍មានបច្ចេកវិទ្យា</a></li>
						<li><a href="#">ព័ត៍មានកីឡា</a></li>
						<li><a href="#">ព័ត៍មានសង្គម</a></li>
						<li><a href="#">ព័ត៍មានសុខភាព</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col-md-2 search">
			<input type="search" class="form-control" /><span class="glyphicon glyphicon-search btn search-btn"></span>
		</div>
	</div>

    {{-- header --}}
    @yield('content')
    {{-- footer --}}

    <div class="col-md-12 bottom">
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">About Us</span></h3>
           <span class="name" style="color:#c7241c";>CAMBO</span><span class="name" style="color:#035afc";>NEWS</span>
            <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4">
            <div class="col-md-12">
                <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Quick Links</span></h3>
            </div>
            <div class="col-md-6">
                <div class="row">
                  <ul class="nav" style="font-family: 'Nokora';font-size:20px;">
                    <li><a href="#">ព័ត៍មានកម្សាន្ត</a></li>
                    <li><a href="#">ព័ត៍មានបច្ចេកវិទ្យា</a></li>
                    <li><a href="#">ព័ត៍មានកីឡា</a></li>
                    <li><a href="#">ព័ត៍មានសង្គម</a></li>
                    <li><a href="#">ព័ត៍មានសុខភាព</a></li>
                </ul>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Contact Us</span></h3>


            <a href="#top" class=" goto" ><span class="glyphicon glyphicon-chevron-up" ></span></a><br />
            Email : info@CamboNews.com
            <br>
            Phone Number:069865345
            <br>
            <br>
            <br>
            <br>
            <span class="name" style="color:#c7241c";>CAMBO</span><span class="name" style="color:#035afc";>NEWS</span>
        </div>
</div>

<div class="col-md-12 text-center copyright">
    Copyright &copy; 2016 <a href="#">COLORMAG</a> Powered by: <a href="#">DREAMTEAM</a>
</div>
<script>
	jQuery(document).ready(function() {
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > 500) {
				jQuery('.goto').fadeIn(duration);
			} else {
				jQuery('.goto').fadeOut(duration);
			}
		});

		jQuery('.goto').click(function(event) {
			event.preventDefault();
			jQuery('html').animate({scrollTop: 0}, duration);
			return false;
		})
	});
</script>
<script src="{{ url('style_frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ url('style_frontend/js/jquery.min.js') }}"></script>
</body>
</html>
