<!DOCTYPE HTML>
<html>
<head>
@include('meta')

@include('styles')

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
<div class="banner wow bounceInRight" data-wow-delay="0.4s">
	<div class="container"> 
	   <div class="banner_right">
		   <h2>  {{ t('welcometo') }} <span class="text-primary">{{ s('title') }} </span></h2>
		   <h1> <FONT color=LemonChiffon> {{ t('welcomemessage') }} </FONT> </h1>
		   <ul class="button">
			 <li><a href="signin" class="btn1 btn2 btn-1 btn1-1b">Sign In</a></li>
		   </ul>
	   </div>
	</div>
</div>

<div class="profile_banner">
	<div class="container"> 
	   <h3>Register</h3>
	</div>
</div>
<br>
<br>
	<h1><center> What are you waiting for? Register now </center> </h1>
					
														<center>	<a href="{{ url('/facebook_login') }}" class="btn btn-primary btn-lg" /><i class="fa fa-facebook fa-2"></i> {{ t('signinwith') }} Facebook</a> </center>
								</div>
								</div>
								
								@include('home.forms.register_form')
								
						</div>
					</div>
					
<div class="content_top">
  <div class="profile_banner">
	<div class="container"> 
  <h3> <FONT COLUR=BLACK> Showoff, </FONT>, <FONT COLUR=Yellow> We love it </FONT> </h3>
   <h5> <FONT COLUR=BLUE> because of our following features, You always love us <h5>   

						<div class="row top-buffer">
						  <div class="col-md-4">
						
						  <img class="img-responsive" src="assets/images/matches.png" style="height:156px;width:156px;" />
				<br>
							<h4><FONT color=Black> Matches</h4>
							<p>Play our popular Encounters game to get matched with other users. It’s a great way to break the ice and start chatting!</p>
						  </div>
						  

						  <div class="col-md-4">
						
						  <img class="img-responsive" src="assets/images/mapicon.png" style="height:156px;width:156px;text-align:center;" />
					<br>
							<h4><FONT color=Black> People nearby</h4>
							<p>{{ s('title') }} won’t show your exact location, but will allow you to find people nearby who share common interests.</p>
						  </div>


						  <div class="col-md-4">
						
						  <img class="img-responsive" src="assets/images/interests.png" style="height:156px;width:156px;" />
						 <br>
							<h4><FONT color=Black> Share interests</h4>
							<p>Increase your chances of being discovered and meeting other people with similar interests.</p>
						  </div>
						</div><!-- .row -->
						
						<br>


 				 </div>
</div>
<div class="footer">
	<div class="container">
		<div class="cssmenu wow fadeInLeft" data-wow-delay="0.4s">
		  <ul>
			<li class="active"><a href="#">Home</a></li> 
			<li><a href="aboutus">About</a></li>
			<li><a href="privacy_policy">Privacy Policy</a></li>
			<li><a href="terms_conditions">Terms & Conditions</a></li>
		  </ul>
	    </div>
	    <div class="copy wow fadeInUp" data-wow-delay="0.4s">
			<p>{{ t('copyright') }} {{ s('title') }} &copy {{ date('Y') }}</a></p>
		</div>
	    <div class='clearfix'> </div>
	</div>
</div>

	 <script>
var geocoder;

	function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(setUserPosition);
    }
  else{

  	}
  }

function setUserPosition(position)
  {


  $("#lat").val(position.coords.latitude);
   $("#lng").val(position.coords.longitude);
   codeLatLng(position.coords.latitude, position.coords.longitude);

  }

   function geoCoderInitialize() {
    geocoder = new google.maps.Geocoder();


  }

  function codeLatLng(lat, lng) { 

    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {

        if (results[1]) {
         //formatted address
       
        //find country name
             for (var i=0; i<results[0].address_components.length; i++) {
            for (var b=0;b<results[0].address_components[i].types.length;b++) {

            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                if (results[0].address_components[i].types[b] == "locality") {
                    //this is the object you are looking for
                    city= results[0].address_components[i];

                   
                }

                 if (results[0].address_components[i].types[b] == "country") {
                    //this is the object you are looking for
                    country= results[0].address_components[i];

                   
                }
            }
        }
        //city data
        $("#city").val(city.long_name);
        $("#country").val(country.long_name);

        } else {
          //alert("No results found");
        }
      } else {
        //alert("Geocoder failed due to: " + status);
   

  }

});

}


function codeCity(city_name){

 geocoder.geocode({'address': city_name}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {


        if (results[0]) {
        		 
        	 $("#lat").val(results[0].geometry.location.lat())
        	 $("#lng").val(results[0].geometry.location.lng());
        		 

     }
     else{
     	   	$("#lat").val(results.geometry.location.lat())
        	 $("#lng").val(results.geometry.location.lng());
     } 

 }
 else{
 
 	console.log("Google Maps GeoCoder Not Reachable");
 
 }
});


}


$(function(){ 
			geoCoderInitialize();
			getLocation();
			var flag = 0;
    		var email_set = 0;


jQuery("#city").autocomplete({
			source: function (request, response) {
		
				jQuery("#city").addClass("spinner");
			 	jQuery.getJSON(
					"http://gd.geobytes.com/AutoCompleteCity?callback=?&q="+request.term,
					
					function (data) {
						jQuery("#city").removeClass("spinner");
					 	response(data);
					}
		 		);
		
			},
			
			minLength: 3,
			select: function (event, ui) {
		 		var selectedObj = ui.item;
		 		var city = selectedObj.value.split(',');
		 		var country = $.trim(city[2]);
		 		city = city[0];
		 		fcity = city +", "+country;
				jQuery("#city").val(city);
				jQuery("#country").val(country);
				codeCity(fcity);

				return false;
			},
			
			open: function () {
		 		jQuery(this).removeClass("ui-corner-all").addClass("ui-corner-top");
			},
			close: function () {
		 		jQuery(this).removeClass("ui-corner-top").addClass("ui-corner-all");
			}
	 	});
	 	
	 	jQuery("#city").autocomplete("option", "delay", 100);
	 	
	 	
	 	
	 	jQuery("#city").keyup(function(){
	 	
	 		if(jQuery("#city").val() == ""){
	 		jQuery("#lat").val("");
	 		jQuery("#lng").val("");
	 		jQuery("#country").val("");
	 		}

	 	
	 	});
	 	
	 	
	 	    $("#email").focusout(function(e){
	    	$("#register-form").find('.help-inline').remove();
	    	$("#control-email").removeClass("has-error");
	    	if($("#email").val()){
	 			if(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test($("#email").val())  ) {  
	    			$("#control-email").removeClass("has-error");
				    $.get("{{ URL::to('ajax/check_email') }}", { email: $("#email").val()}, function(data){
				    	
				    	if(data == 0) {
				    		email_set = 1;
			    			$("#control-email").addClass("has-error");
			    			$("#email").parent().append('<label for="fullname" class="help-inline help-small no-left-padding">{{ t("emailerror") }}</label>');
			    		} else {
			    			$("#email").parent().append('<label for="fullname" class="help-inline help-small no-left-padding" style="color:green;">{{ t("available") }}</label>');
			    			email_set = 0;
			    		}
    				});
    			}
    			else{
    				
    				$("#control-email").addClass("has-error");
	 				$("#email").parent().append('<label for="fullname" class="help-inline help-small no-left-padding">{{ t("invalidemail") }}</label>');
	 				email_set = 1;
    			
    			
    			}
    		}
    	});
	 	
	 	
	 	
	 		$("#register-submit-btn").click(function(e){
	 		
	 		flag = 0;
 		
	 		var label = '<label for="fullname" class="help-inline help-small no-left-padding">{{ t("fieldrequired") }}</label>';
	 		
	 		e.preventDefault();
			$("#register-form").find('.help-inline').remove();
	 	
	 		if($("#name").val()) {
	 			if(/^[a-zA-Z ]*$/.test($("#name").val())) {
	 				$("#control-name").removeClass("has-error");
	 			} else {
	 				$("#control-name").addClass("has-error");
	 				$("#name").parent().append('<label for="fullname" class="help-inline help-small no-left-padding">{{ t("nospecialcharacters") }}</label>');
	 				flag = 1;	
	 			}
	 		} else{
	 			$("#control-name").addClass("has-error");
	 			$("#name").parent().append(label);
				flag = 1;
	 		}
 		
	 		if($("#email").val()){
	 			if(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test($("#email").val())  ) {  
	 				$("#control-email").removeClass("has-error");
	 			} else {
	 				$("#control-email").addClass("has-error");
	 				$("#email").parent().append('<label for="fullname" class="help-inline help-small no-left-padding">{{ t("invalidemail") }}</label>');
	 				flag = 1;
	 			}
	 		} else{
	 			$("#control-email").addClass("has-error");
	 			$("#email").parent().append(label);
	 			flag = 1;
	 		}
	 		
	 		if($("#confirm_password").val()) {
	 			if($("#confirm_password").val() == $("#password").val()) {
	 				$("#control-confirm-password").removeClass("has-error");
	 			} else {
	 				$("#control-confirm-password").addClass("has-error");
	 				$("#confirm_password").parent().append('<label for="fullname" class="help-inline help-small no-left-padding">{{ t("passwordsnomatch") }}</label>');
	 				flag = 1;	
	 			}
	 		} else{
	 			$("#control-confirm-password").addClass("has-error");
	 			$("#confirm_password").parent().append(label);
	 			flag = 1;
	 		}

 		
	 		if($("#city").val()) {
	 			$("#control-city").removeClass("has-error");
	 		} else{
	 			$("#control-city").addClass("has-error");
	 			$("#city").parent().append(label);
	 			flag = 1;
	 		}
	 		

 		
	 		if($("#password").val()) {
	 			if($("#password").val().length >= 6){
	 				$("#control-password").removeClass("has-error");
	 			} else {
	 				$("#control-password").addClass("has-error");
	 				$("#password").parent().append('<label for="fullname" class="help-inline help-small no-left-padding">{{ t("passwordminimum") }}</label>');
	 				flag = 1;
	 			}
	 		} else{
	 			$("#control-password").addClass("has-error");
	 			$("#password").parent().append(label);
	 			flag = 1;
 			}
 		
 		
	 		if(flag == 0 && email_set == 0) {
	 			
	 			$("#register-form").submit();
	 		}
	 	
 		})
	 	
	
	 	
	 	

});
</script>
  
	</body>
</html>
</body>
</html>		