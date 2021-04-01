<html>
<head>
	<link rel="stylesheet" href="w3.css">
	<link rel="stylesheet" href="style.css">
	<style>
		img{
			position:absolute;
			margin:auto;
			max-width:300%;
			left:-30%;
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
		<a href="index.php" class="w3-bar-item w3-button">Home</a>
		<a href="aboutme.php" class="w3-bar-item w3-button">About Me</a>
		<a href="music.php" class="w3-bar-item w3-button w3-blue">Music</a>
	</div>

	<div class="w3-main" style="margin-left:200px">
		<button class="w3-button w3-black w3-medium" onclick="w3_open()">&#9776</button>
		<b>Sing psalms to Jehovah, the Inhabitant of Zion; Declare His deeds among the peoples. - Psalm 9:11</b>
		<div class="w3-blue" style="width:100%">

			<div class="w3-container">
				<h1><b>Music</b></h1>
			</div>
		</div>

		<table style="width:100%" class="texts">
			<tr>
				<td style="width:200px">
					<div class="center-cropped">
						<img src="/images/musicpic.jpg" alt="Music"/>
					</div>
				</td>
				<td align="left">
					<p>
						I love singing with my heart to the Lord!</br></br>
						I have found that singing is a great way to <b>enjoy</b> the Lord and to get His word into me.
					</p>
				</td>
			</tr>
		</table>
	</div>
	<div class="bottoms">&copy 2017 Zion Park</div>
</body>
</html>
