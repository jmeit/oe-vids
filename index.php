<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oncology Education - Private Videos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<link href='https://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
		
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class="wrap"><h1 class="page-title">Oncology Education - Private Videos</h1></div>
		
		<div class="vids-wrapper wrap clearfix">
		
			<?php
			$numBoxes = 7;
			
			
			for($i=0;$i<$numBoxes;$i++){
				?>
				<div class="player-module">
					<h2 class="vid-title">Title for video <?=rand(10000,99999)?></h2>
					<div class="player"></div>
				</div>
				<?php
			}
			?>
			
		</div>
    </body>
</html>