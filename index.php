<?php
if($_SERVER["REQUEST_URI"] != "/EasyBCD/")
{
	header("HTTP/1.0 301 Resource Moved");
	header("Location: http://neosmart.net/EasyBCD/");
	exit();
}

$prefix = "//neosmart.nststatic.com";

$html = file_get_contents("easybcd.html");
$search = array("\"i/", "\"j/", "\"c/");
$replace = array("\"$prefix/i/", "\"//$prefix/EasyBCD/j/", "\"//$prefix/EasyBCD/c/");
$html = str_replace($search, $replace, $html);

echo $html;

?>
