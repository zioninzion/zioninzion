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

	<div class="w3-sidebar w3-bar-block w3-collapse w3-card-2" style="width:200px;" id="mySidebar">
		<button class="w3-bar-item w3-button w3-hide-large" onclick="w3_close()" fond="bold">Close &times;</button>
		<a href="aboutme.php" class="w3-bar-item w3-button">About Me</a>
		<a href="music.php" class="w3-bar-item w3-button">Music</a>
	</div>

	<div class="w3-main" style="margin-left:200px">
			<button class="w3-button w3-black w3-medium" onclick="w3_open()">Menu</button>
		<div class="w3-blue" style="width:100%">

			<div class="w3-container">
				<h1>Zion in Zion</h1>
			</div>
		</div>

		<table style="width:100%">
			<tr>
				<td>
					<div class="center-cropped">
						<img src="http://tinyurl.com/profilezpic" alt="Profile"/>
					</div>
				</td>
				<td>
					<p>
						Hello there. Welcome to my website.
					</p>

					<p>
						It's good to see you here.
					</p>
				</td>
			</tr>
	</div>
</body>
</html>
