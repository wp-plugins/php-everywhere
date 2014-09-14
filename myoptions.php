<?php
/** Step 1. */
function php_everywhere_menu() {
	add_options_page( 'PHP Everywhere', 'PHP Everywhere', 'manage_options', 'php-everywhere-identifier', 'php_everywhere_options' );
}

/** Step 3. */
function php_everywhere_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
<div class="wrap">
<h1>PHP Everywhere</h1>
<p>Thanks for using PHP Everywhere. If you have any questions, feel free to ask <a href="mailto:alexandria96gmx.de">me</a>.<br />I created this plugin because I have not found a Wordpress PHP plugin which is simple to use and provides a good user experience while being able to use PHP or HTML in Posts, Pages or Widgets.</p>
<h1>Usage</h1>
<h3>Widgets</h3>
<p>Simply activate the <pre>PHP + HTML</pre> Widget. in your sidebar and paste your PHP code including the PHP Tags like this:
<pre>&lt;?php  Echo \"Hello, World!\"; ?&gt;</pre>
You code may contain HTML Elements or have multiple lines.</p>
<h3>Posts & Pages</h3>
<p>Edit or create a new post or page and simply put your PHP Code including the PHP Tags into the side options_box, which is labeled "PHP Everywhere". Then put the<pre>[php_everywhere]</pre> shortcode where you want the code to appear. Your code may contain multiple lines or HTML Tags.</p>
<h1>Changelog</h1>
<p>Go to <a href="http://www.alexander-fuchs.net/php-everywhere/" target="_blank">http://www.alexander-fuchs.net/php-everywhere/</a> to view the changelog and more informations.</p>
<h1>Like this Plugin? Support me :)</h1>
<h3>Follow me</h3>
<p><!-- Fügen Sie dieses Tag in den head-Abschnitt oder direkt vor dem schließenden body-Tag ein. -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'de'}
</script><!-- Fügen Sie dieses Tag an der Stelle ein, an der die Widget erscheinen soll. -->
<div class="g-person" data-href="//plus.google.com/u/0/114963560467924796169" data-layout="landscape" data-rel="author"></div>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FAlexander-Fuchs%2F211377875552443&amp;width=300&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=141996939194259" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:62px;" allowTransparency="true"></iframe></p>
<h3>Subscribe</h3>
<p>Please visit <a href="http://www.alexander-fuchs.net" target="_blank">http://www.alexander-fuchs.net</a> to subscribe to my newsletter.</p>
<h3>Donate</h3>
<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VXCVDFMDZCX78">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>
</p>
</div>
<?php
}
?>