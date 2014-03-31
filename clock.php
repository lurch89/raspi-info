<!DOCTYPE html>
<html>
  <head>
    <title>Clock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<META HTTP-EQUIV="refresh" CONTENT="1200">
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
	<div id="clock-wrapper" style="margin: 0 auto; width:350px" class="text-center">

  
	<h3>Local - <span id="currentDate"></span></h3>
	<div id="flipcountdownbox1" style="margin: 0 auto; padding-top:5px; width:100%"></div>
	<h3>UTC - <span id="currentDateUTC"></span></h3>
	<div id="flipcountdownbox2" style="margin: 0 auto; padding-top:5px; width:100%"></div>	
  
  </div>
  
  


  </div> <!-- end container -->
  
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jq.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.simpleWeather.js"></script>
	
	<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>

	<script language="Javascript">
	<!-- 

	function UTCDate()
	{
	var dNow = new Date();
	var utc = new Date(dNow.getTime() + dNow.getTimezoneOffset() * 60000)
	var utcdate= (utc.getMonth()+ 1) + '/' + utc.getDate() + '/' + utc.getFullYear();
	$('#currentDateUTC').html(utcdate)
	}
	
	function LocalDate()
	{
	var dNow = new Date();
	var utcdate= (dNow.getMonth()+ 1) + '/' + dNow.getDate() + '/' + dNow.getFullYear();
	$('#currentDate').html(utcdate)
	}

	$(function(){
	$('#flipcountdownbox1').flipcountdown({
		size:"lg"
	});
})

	$(function(){
	$('#flipcountdownbox2').flipcountdown({
		size:"lg",
		tzoneOffset:6
	});
})	
	
	
	
	// -->
	
	
	UTCDate();
	LocalDate();
	
	</script>
	<script src="js/jquery.cycle2.js"></script>
  </body>
</html>