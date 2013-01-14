<script type="text/javascript">
	<?php if ( array_key_exists('publicListView', $_) && $_['publicListView'] == true ) {
		echo "var publicListView = true;";
	} else {
		echo "var publicListView = false;";
	}
	?>
</script>
<input type="hidden" name="dir" value="<?php echo $_['dir'] ?>" id="dir">
<input type="hidden" name="downloadURL" value="<?php echo $_['downloadURL'] ?>" id="downloadURL">
<input type="hidden" name="filename" value="<?php echo $_['filename'] ?>" id="filename">
<input type="hidden" name="mimetype" value="<?php echo $_['mimetype'] ?>" id="mimetype">
	<ul class="glossymenu">
		<li><a href="/"><b>Home</b></a></li>
		<li><a href="media.php"><b>Media</b></a></li>
		<li class="current"><a href="/files"><b>Files</b></a></li>	
		<li><a href=""><b>Mail</b></a></li>	
		<li><a href="/chat"><b>Chat</b></a></li>	
	</ul>
	<div class="header-right">
	<?php if (isset($_['folder'])): ?>
		<span id="details"><?php echo $l->t('%s shared the folder %s with you', array($_['uidOwner'], $_['filename'])) ?></span>
	<?php else: ?>
		<span id="details"><?php echo $l->t('%s shared the file %s with you', array($_['uidOwner'], $_['filename'])) ?></span>
	<?php endif; ?>
		<?php if (!isset($_['folder']) || $_['allowZipDownload']): ?>
			<a href="<?php echo $_['downloadURL']; ?>" class="button" id="download"><img class="svg" alt="Download" src="<?php echo OCP\image_path("core", "actions/download.svg"); ?>" /><?php echo $l->t('Download')?></a>
		<?php endif; ?>
	</div>
<div id="preview">
	<?php if (isset($_['folder'])): ?>
		<?php echo $_['folder']; ?>
	<?php else: ?>
		<?php if (substr($_['mimetype'], 0 , strpos($_['mimetype'], '/')) == 'image'): ?>
			<div id="imgframe">
				<img src="<?php echo $_['downloadURL']; ?>" />
			</div>
		<?php endif; ?>
		<ul id="noPreview">
			<li class="error">
				<?php echo $l->t('No preview available for').' '.$_['filename']; ?><br />
				<a href="<?php echo $_['downloadURL']; ?>" id="download"><img class="svg" alt="Download" src="<?php echo OCP\image_path("core", "actions/download.svg"); ?>" /><?php echo $l->t('Download')?></a>
			</li>
		</ul>
	<?php endif; ?>
</div>
