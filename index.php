<?php
if($_SERVER["REQUEST_URI"] != "/EasyBCD/")
{
	header("HTTP/1.0 301 Resource Moved");
	header("Location: http://neosmart.net/EasyBCD/");
	exit();
}

$html = file_get_contents("easybcd.html");
$search = array("\"i/", "\"j/", "\"c/");
$replace = array("\"//acf.neosmart.net/EasyBCD/i/", "\"//acf.neosmart.net/EasyBCD/j/", "\"//acf.neosmart.net/EasyBCD/c/");
$html = str_replace($search, $replace, $html);

echo $html;
file_put_contents("output", $html);
?>
