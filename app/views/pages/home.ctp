<?php echo $html->script('swfobject.js',false);

$jscode = <<<EOJAVASCRIPT
	
	swfobject.registerObject("myFlashContent", "10.0.0", "/js/expressInstall.swf");

EOJAVASCRIPT;

echo $html->scriptBlock($jscode, array('inline'=>false));
?>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="400" id="myFlashContent">
	<param name="movie" value="files/cakefestDemo2010.swf" />
	<!--[if !IE]>-->
	<object type="application/x-shockwave-flash" data="files/cakefestDemo2010.swf" width="100%" height="400">
	<!--<![endif]-->
		<a href="http://www.adobe.com/go/getflashplayer">
			<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
		</a>
	<!--[if !IE]>-->
	</object>
	<!--<![endif]-->
</object>