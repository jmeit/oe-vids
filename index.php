<?php require_once('video_list.php'); global $videos; ?>
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
		
		<link rel="stylesheet" href="//releases.flowplayer.org/6.0.5/skin/minimalist.css">
		
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		
		<!--[if lte IE 8]>
			<link rel="stylesheet" href="css/ie8.css">
        <![endif]-->
		
		<script src="js/vendor/flowplayer_desktop.js"></script>
    </head>
    <body>
        <!--[if lte IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class="wrap"><h1 class="page-title">Oncology Education - Private Videos</h1></div>
		
		<div class="vids-wrapper wrap clearfix">
		
			<?php
			foreach($videos as $i => $vid){
				?>
				<div class="player-module">
					<h2 class="vid-title"><?=$vid['title']?><br /><?=$vid['meta']?></h2>
					<div class="player">
						<video class="vid-player" preload="metadata" controls="true" poster="<?=$vid['poster']?>" >
							<?php
							foreach($vid['sources'] as $src){
								?>
								<source type="<?=$src['type']?>" src="<?=$src['src']?>" />
								<?php
							}
							
							/*
							* Fallback to Flowplayer
							*/
							?>
							<a href="<?=$src['src']?>"
								background="<?=$vid['poster']?>"
							    style="display:block;width:384px;height:216px;"
								class="fallback_player"
							    id="player<?=$i?>">
							</a>
						 
							<script language="JavaScript">
							  flowplayer("player<?=$i?>", "js/vendor/flowplayer-3.2.18.swf", {
								  clip:  {
									  autoPlay: false,
								  }
							  });
							</script>
						</video>
						<!--[if IE 9]>
							<div>
								<a href="<?=$src['src']?>"
									background="<?=$vid['poster']?>"
									style="display:block;width:384px;height:216px;"
									class="fallback_player"
									id="player<?=$i?>">
								</a>
							 
								<script language="JavaScript">
								  flowplayer("player<?=$i?>", "js/vendor/flowplayer-3.2.18.swf", {
									  clip:  {
										  autoPlay: false,
									  }
								  });
								</script>
							</div>
						<![endif]-->
					</div>
				</div>
				<?php
			}
			?>
			
		</div>
		
		
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
		<script src="js/main.js"></script>
		
		<!--[if IE 9]>
			<script language="JavaScript" type="text/javascript">
				jQuery('.vid-player').remove();
			</script>
			<style type="text/css">
				.vid-player{ display:none; }
			</style>
		<![endif]-->
		
		
    </body>
</html>