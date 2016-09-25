<html>
	<head>
		<title>Malala Yousafzai</title>
		<link rel="stylesheet" href="style.css">
<script>
	function myclock(){
	time=new Date();
	hours=time.getHours();
	mins=time.getMinutes();
	sec=time.getSeconds();
	
	if(sec<10){
		sec="0"+sec;
	}
	if(mins<10){
		mins="0"+mins;
	}
	}
</script>
	</head>

<body>
<!--This is Top bar-->
<div id="top"><p>Top bar</p></div>
<!--this is header area-->
<div><?php include("include/header.php");?></div>
<!--This is navigation area-->
<div><?php include("include/navigation.php");?></div>
<!--This is sidebar-->
<div class="side">
<div><?php include("include/sidebar.php");?></div>
<!--This is post content area-->
<div><?php include("include/product.php");?></div>
</div>
</div>
<!--this is footer -->
<div class="foot">
		
			<font color="#57b6cc">Copyright</font> @copy;2016
			Tyre House
		
</div>
</body>
</html>
