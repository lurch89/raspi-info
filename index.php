<!DOCTYPE html>
<html>
  <head>
    <title>Maxwell - KD&#216;IOE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<META HTTP-EQUIV="refresh" CONTENT="600">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/arlinfo2.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/jquery.flipcountdown.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  
  
  
  </head>
  <body>
  
  <div class="container">


  
  <div class="row">
  <div class="col-xs-5">

  
  
  

  <div class="" id="weather">
  </div>

  
 
  
  
  
  
  
  </div>
  
  <div class="col-xs-7">
  <div style="height:190px; width:100%" class="text-left">
  <img src="http://sirocco.accuweather.com/nx_mosaic_234x175_public/sir/inmasirND_.gif" height="176px" style="margin-top:8px;">
  </div>
<div id="flipcountdownbox1" style="margin: 0 auto; padding-top:5px; width:100%"></div>
  </div>
  
  
  </div>

  </div> <!-- end container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jq.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.simpleWeather.js"></script>
	<script src="js/gauge.min.js"></script>

	<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>

	<script language="Javascript">
	<!-- 
	$.simpleWeather({
	zipcode: '58103',
	woeid: '',
	location: '',
	unit: 'f',
	success: function(weather) {
		html = '<div id="weather-content" class="text-center" style="width:100%;">';
		html += '<div id="weather-temp-content" class="text-right" style="background-image:url('+weather.image+'); background-position: left top; background-repeat:no-repeat; height:116px; line-height:170px; width:100%">';
		html += '<b>Now</b>: <span id="weather_temp">'+weather.temp+'&deg; '+weather.units.temp+'</span></div>';
		html += '<p>'+weather.currently+'';
		html += '<br>Humidity: '+weather.humidity+'&#37;<br>Wind: '+weather.wind.direction+' '+weather.wind.speed+' MPH</p>';
		html += '<p><b>Today</b><br><span id="weather_for">H: '+weather.high+'&deg; | L: '+weather.low+'&deg;<br>'+weather.forecast+'</span></p>';
		
		html += '</div>';
		
		
		$("#weather").html(html);

	},
	error: function(error) {
		$("#weather").html('<p>'+error+'</p>');
	}
});

	$(function(){
	$('#flipcountdownbox1').flipcountdown();
})

	
	
	
	
	// -->
	
	
	
	</script>
	
	<script lang="JavaScript">
  <!--
	$.ajaxSetup ({
		cache: false
	});


  
  
  // -->
  </script>


  </body>
</html>