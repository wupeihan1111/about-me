	<title>吳沛涵簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>
	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h1T").innerText= "資管導論";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h1T").innerText= "吳沛涵";
  			document.getElementById("h2text").innerText = "Wu-peihan";
		}
	</script>


</head>
<body>
	<?php echo date("Y-m-d") ?>

	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg"width="110%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>

			<td>
				<h1 id="h1T">吳沛涵<h1>
				<h2 id="h2text">Wu-Pei-Han<h2>
			</td>
		</tr>

	</table>
	<table width="70%"border="1">
		<tr>
			<td>
				學校網站：<a href="https://www.pu.edu.tw/">https://www.pu.edu.tw/</a><br>
				FB：<a href="https://www.facebook.com/profile.php?id=100022959528152"target="_blank">wupeihan fb個人網頁</a><br>
				Tel: <a href="04-26328001#18110">04-26328001#18110</a><br>
				E-Mail: <a href="wupeihan.1111@gmail.com">wupeihan.1111@gmail.com</a><br>
			</td>

			<td>
				大象席地而坐電影配樂<br>
				<audio controls>
						<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
			</td>

			<td>
				不要去臺灣<br>
				<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
			</td>
		</tr>
	</table>	

	<table width="70%"border="1">
		<tr>
			<td>
				<iframe
			    allow="microphone;"
			    width="350"
			    height="430"
			    src="https://console.dialogflow.com/api-client/demo/embedded/7357b545-82f0-4066-b854-5da374fb486c">
				</iframe>
			</td>
		</tr>

	</table>

	

</body>
</html>