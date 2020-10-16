<?php
$img_url = "http://www.google.com/images/icons/ui/doodle_plus/doodle_plus_google_logo_on_grey.gif";
$Headers = @get_headers($img_url);
if(preg_match("|200|", $Headers[0])) {
	$image = file_get_contents($img_url);
	file_put_contents(dirname(__FILE__)."/img/logo.gif", $image);
} else {
	echo "Not Found";
}
?>