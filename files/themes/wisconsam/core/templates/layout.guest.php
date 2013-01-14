<!DOCTYPE html>
<html>
	<head>
		<title>Files | Wisconsam</title>
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-31847386-1']);
			_gaq.push(['_setDomainName', 'wisconsam.com']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>
		<link rel="stylesheet" type="text/css" href="http://wisconsam.com/style/standard.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="<?php echo image_path('', 'favicon.png'); ?>" /><link rel="apple-touch-icon-precomposed" href="<?php echo image_path('', 'favicon-touch.png'); ?>" />
		<?php foreach($_['cssfiles'] as $cssfile): ?>
			<link rel="stylesheet" href="<?php echo $cssfile; ?>" type="text/css" media="screen" />
		<?php endforeach; ?>
		<script type="text/javascript">
			var oc_webroot = '<?php echo OC::$WEBROOT; ?>';
			var oc_appswebroots = <?php echo $_['apps_paths'] ?>;
			var oc_requesttoken = '<?php echo $_['requesttoken']; ?>';
			var oc_requestlifespan = '<?php echo $_['requestlifespan']; ?>';
		</script>
		<?php foreach($_['jsfiles'] as $jsfile): ?>
			<script type="text/javascript" src="<?php echo $jsfile; ?>"></script>
		<?php endforeach; ?>
	
		<?php foreach($_['headers'] as $header): ?>
			<?php
				echo '<'.$header['tag'].' ';
				foreach($header['attributes'] as $name=>$value) {
					echo "$name='$value' ";
				};
				echo '/>';
			?>
		<?php endforeach; ?>
		<script type="text/javascript" src="https://www.dropbox.com/static/api/1/dropbox.js" id="dropboxjs" data-app-key="5tqdbx7vv55jfw6"></script>

	</head>

	<body id="body-login">
		<ul class="glossymenu">
			<li><a href="/"><b>Home</b></a></li>
			<li><a href="media.php"><b>Media</b></a></li>
			<li class="current"><a href=""><b>Files</b></a></li>	
			<li><a href=""><b>Mail</b></a></li>	
			<li><a href="/chat"><b>Chat</b></a></li>	
		</ul>
		<div id="framecontentLeft">
		</div>
			<div class="innertube">
			<!--Left content goes here-->

		<div id="login" style="margin-left:35px; background:#dfdfdf; height: 80px;">
			<?php echo $_['content']; ?>
		</div>
<!--		<footer><p class="info">powered by: <a href="http://owncloud.org/">ownCloud</a> &ndash; <?php echo $l->t( 'web services under your control' ); ?></p></footer> -->
		</div>
	</body>
</html>
