
<html>
<head>
	<link rel="stylesheet" href="w3.css">
	<style>
		.center-cropped{
			width: 200px;
			height: 300px;
			background-position: center center;
			background-repeat: no-repeat;
			overflow:hidden;
			position: relative;
		}
		img{
			position:absolute;
			margin:auto;
			max-width:300%;
			left:-100%;
			right:-100%;
			top:-100%;
			bottom:-100%;
		}
	</style>
	<Title>
		Zion in Zion
	</Title>
</head>
<body>

	<script>
	function w3_open(){
		document.getElementById("mySidebar").style.display="block";
	}
	function w3_close(){
		document.getElementById("mySidebar").style.display="none";
	}
	</script>
	<div class="w3-sidebar w3-bar-block w3-collapse w3-card-2" style="width:25%;" id="mySidebar">
		<button class="w3-bar-item w3-button w3-hide-large" onclick="w3_close()">Close &times;</button>
		<a href="aboutme.php" class="w3-bar-item w3-button">About Me</a>
	</div>

	<div class="w3-main">
		<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()&#9776;</button>
	<!--
	<div class="center-cropped">
		<img src="http://tinyurl.com/profilezpic" alt="Profile" />
	</div>
		<a href="aboutme.php">About Me</a>
	<p>
		This page was opened at <?php echo date('Y-m-d H:i:s'); ?> UTC
	</p>

	<form action="process.php" method="post">
		<input name = "name" type="text">
		<input type="submit" value="Submit">
	</form>
	//-->
	</div>
</body>
</html>
