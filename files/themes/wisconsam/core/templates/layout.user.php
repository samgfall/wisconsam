<!DOCTYPE html>
<html>
	<head>
		<title><?php echo isset($_['application']) && !empty($_['application'])?$_['application'].' | ':'' ?>Wisconsam <?php echo OC_User::getUser()?' ('.OC_User::getUser().') ':'' ?></title>
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

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="<?php echo image_path('', 'favicon.png'); ?>" /><link rel="apple-touch-icon-precomposed" href="<?php echo image_path('', 'favicon-touch.png'); ?>" />
		<?php foreach($_['cssfiles'] as $cssfile): ?>
			<link rel="stylesheet" href="<?php echo $cssfile; ?>" type="text/css" media="screen" />
		<?php endforeach; ?>
		<script type="text/javascript">
			var oc_webroot = '<?php echo OC::$WEBROOT; ?>';
			var oc_appswebroots = <?php echo $_['apps_paths'] ?>;
			var oc_current_user = '<?php echo OC_User::getUser() ?>';
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
		<link rel="stylesheet" type="text/css" href="http://wisconsam.com/style/standard.css" />
	</head>

	<body id="<?php echo $_['bodyid'];?>">
		<ul class="glossymenu">
			<li><a href="/"><b>Home</b></a></li>
			<li><a href="media.php"><b>Media</b></a></li>
			<li class="current"><a href=""><b>Files</b></a></li>	
			<li><a href=""><b>Mail</b></a></li>	
			<li><a href="/chat"><b>Chat</b></a></li>	
		</ul>
		<a class="header-right header-action" id="logout" href="<?php echo link_to('', 'index.php'); ?>?logout=true"><img class="svg" alt="<?php echo $l->t('Log out');?>" title="<?php echo $l->t('Log out');  echo OC_User::getUser()?' ('.OC_User::getUser().') ':'' ?>" src="<?php echo image_path('', 'actions/logout.svg'); ?>" /></a>
		<form class="searchbox header-right" action="#" method="post">
				<input id="searchbox" class="svg" type="search" name="query" value="<?php if(isset($_POST['query'])) {echo OC_Util::sanitizeHTML($_POST['query']);};?>" autocomplete="off" x-webkit-speech />
		</form>
		<div id="framecontentLeft;">
		</div>
		<div class="innertube" style="margin-left:-2px;">
		<nav><div id="navigation">
			<ul id="apps" class="svg">
				<?php foreach($_['navigation'] as $entry): ?>
					<li data-id="<?php echo $entry['id']; ?>"><a style="background-image:url(<?php echo $entry['icon']; ?>)" href="<?php echo $entry['href']; ?>" title="" <?php if( $entry['active'] ): ?> class="active"<?php endif; ?>><?php echo $entry['name']; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>

			<ul id="settings" class="svg">
				<img role=button tabindex=0 id="expand" class="svg" alt="<?php echo $l->t('Settings');?>" src="<?php echo image_path('', 'actions/settings.svg'); ?>" />
				<span><?php echo $l->t('Settings');?></span>
				<div id="expanddiv" <?php if($_['bodyid'] == 'body-user') echo 'style="display:none;"'; ?>>
				<?php foreach($_['settingsnavigation'] as $entry):?>
					<li><a style="background-image:url(<?php echo $entry['icon']; ?>)" href="<?php echo $entry['href']; ?>" title="" <?php if( $entry["active"] ): ?> class="active"<?php endif; ?>><?php echo $entry['name'] ?></a></li>
				<?php endforeach; ?>
				</div>
			</ul>
		</div></nav>

		<div id="content">
			<?php echo $_['content']; ?>
		</div>
		</div>
	</body>
</html>
