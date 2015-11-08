<html>
<head>
	<title>Ninja Gold with CI</title>
	<meta charset ="UTF-8">
	<meta name = "description" content = "Ninja Gold Game">
	<meta name = "author" comtent = "Daniel Cleaves">
	<meta name = "viewport" content = "width-device-width, initial-scale = 1.0">
	<style type = text/css>
	
		* {
			margin: 10px;
			padding: 10px; 
			width: auto;
		}


		#input h1 {
			display: inline-block;
		}

		#input h2 {
			display: inline-block;
			border: 2px solid black;
			height: 30px;
			width: 100px;
			text-align: center;
			vertical-align: top;

		}


		.select {
			width: 230px;
			vertical-align: top; 
			border: 2px solid black;
			display: inline-block;
			height: 200px;
		}

		.select h1 {
			font-size: 20px;
			text-align: center;
		}

		.select h2 {
			font-size: 16px;
			text-align: center;
		}

		.select input {
			width: 100px;
			margin-left: 50px;
		}


		#activities h1 {
			font-size: 20px;
		}

		#text_box {
			border: 2px solid black;
			width: 800px;
			height: 600px;
			overflow: scroll;

		}

		#text_box p {
			text-align: top;
			margin: 0px;
		}

	</style>
</head>
	<body>
		<div id = "input">
			<h1>Your Gold:</h1>
			<h2><?= $this->session->userdata('gold') ?></h2>
		</div>

		<div class = "select">
			<form action = '/main/process_money' method = "post">
				<h1>Farm</h1>
				<h2>(earns 10-20 golds)</h2>
				<input type = "hidden" name = "building" value = "farm" />
				<input type = "submit" value = "Find Gold"/>
			</form>
		</div>

		<div class = "select">
			<form action = '/main/process_money' method = "post">
				<h1>Cave</h1>
				<h2>(earns 5-10 golds)</h2>
				<input type = "hidden" name = "building" value = "cave" />
				<input type = "submit" value = "Find Gold"/>
			</form>
		</div>

		<div class = "select">
			<form action = '/main/process_money' method = "post">
				<h1>House</h1>
				<h2>(earns 2-5 golds)</h2>
				<input type = "hidden" name = "building" value = "house" />
				<input type = "submit" value = "Find Gold"/>
			</form>
		</div>

		<div class = "select">
			<form action = '/main/process_money' method = "post">
				<h1>Casino</h1>
				<h2>(takes 0-50 golds)</h2>
				<input type = "hidden" name = "building" value = "casino" />
				<input type = "submit" value = "Find Gold"/>
			</form>
		</div>

		<div id = "activities">
			<h1>Activities</h1>
			<div id = "text_box">
				<?php if ($this->session->userdata('messages'))
					{
						foreach ($this->session->userdata('messages') as $message){
						echo $message . "<br>";
					}
				} 
				?>
			</div>
		</div>

		
	</body>
</html>