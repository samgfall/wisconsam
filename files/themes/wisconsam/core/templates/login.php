<!--[if IE 8]><style>input[type="checkbox"]{padding:0;}</style><![endif]-->
<form method="post">
	<script src="http://onepo.st/assets/js/widgets/op-smf-launcher.js" type="text/javascript"></script>
	<script type="text/javascript">
			OnepostSMFWidget.Launcher.init({loader: "simple", to: "dropbox", uid: "1198", fields: ["email"], g_folder: "null"});
	</script>

	<input type="dropbox-chooser" name="selected-file" id="db-chooser"/>
	<script type="text/javascript">
    	document.getElementById("db-chooser").addEventListener("DbxChooserSuccess",
        function(e) {
            alert("Here's the chosen file: " + e.files[0].link)
        }, false);
    </script>
	<fieldset>
		<?php if(!empty($_['redirect'])) { echo '<input type="hidden" name="redirect_url" value="'.$_['redirect'].'" />'; } ?>
		<?php if($_['display_lostpassword']): ?>
			<a href="./core/lostpassword/"><?php echo $l->t('Lost your password?'); ?></a>
		<?php endif; ?>
		<p class="infield">
			<label for="user" class="infield"><?php echo $l->t( 'Username' ); ?></label>
			<input type="text" name="user" id="user" value="<?php echo $_['username']; ?>"<?php echo $_['user_autofocus']?' autofocus':''; ?> autocomplete="on" required />
		</p>
		<p class="infield">
			<label for="password" class="infield"><?php echo $l->t( 'Password' ); ?></label>
			<input type="password" name="password" id="password" value="" required<?php echo $_['user_autofocus']?'':' autofocus'; ?> />
		</p>
		<input type="checkbox" name="remember_login" value="1" id="remember_login" /><label for="remember_login"><?php echo $l->t('remember'); ?></label>
		<input type="submit" id="submit" class="login" value="<?php echo $l->t( 'Login' ); ?>" />
	</fieldset>
		<a href="http://wisconsam.com/files/public.php?service=files&t=f39132f661419efa67586c65cd106bf2">Access Public Files</a>
</form>

