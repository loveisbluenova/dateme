<!DOCTYPE HTML>
<html>
<head>
<style>
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
	
	</style>
	
@include('meta')

@include('styles')

				  <link rel="stylesheet" href="assets/css/bootstrap.css">
			  <link rel="stylesheet" href="assets/css/font-awesome.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--dropdown-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
<!-- FlexSlider -->
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
</head>
<body>
<div class="header wow fadeInUp" data-wow-delay="0.4s">
	<div class='container'>
		<div class="header_left">
			<img src="images/rate.png" alt=""/>
		</div>
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/>
				<span>{{ s('title') }}</span>
			</a>
		</div>
		<div class="header_right">
			<ul class="header_user_info">
			  <a class="login" href="signin">
				<li class="user_desc"><span class="m_1">Already user ? </span>Login</li>
 				<i class="user"> </i> 
				<div class="clearfix"> </div>
			  </a>
			  <div class="clearfix"> </div>
	    	</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="profile_banner">
	<div class="container"> 
	   <h3>Login</h3>
	</div>
</div>
<div class="container">
	
      <form class="form-signin" role="form" method="POST" action="{{ url('/signin') }}">
        <h2 class="form-signin-heading" style="text-align:center;color: #167edd;"><a href="{{ url('/') }}">{{ app_logo() }}</a></h2>
        	@if(Session::has('invalid_login'))
			<div class="alert alert-danger">{{ Session::get('invalid_login') }}</div>
		@endif
        	@if(Session::has('notverified'))
			<div class="alert alert-danger">{{ Session::get('notverified') }}, <a href="{{ url('/send_verification') }}">{{ t('clickheretosendverify') }}</a></div>
		@endif
				@if(Session::has('user_verified'))
					<div class="alert alert-success">{{ Session::get('user_verified') }}</div>
				@endif
				@if(Session::has('password_reset'))
					<div class="alert alert-success">{{ Session::get('password_reset') }}</div>
				@endif
        <input type="text" class="form-control" placeholder="{{ t('email') }}" name="email" required autofocus>
        <input type="password" class="form-control" placeholder="{{ t('password') }}" name="password" required>
        <label class="checkbox">
        </label>
        <p>
        <a href="{{ url('/forgot_password') }}">{{ t('forgotpassword') }}</a>
        </p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ t('signin') }}</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>