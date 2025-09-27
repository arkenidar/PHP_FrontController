<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="style.css">
<div>
<?php
function substr_startswith($haystack, $needle) {
    return substr($haystack, 0, strlen($needle)) === $needle;
}
// include php file with a security restriction
$path=realpath($_REQUEST["file"].".php");
if(substr_startswith($path,realpath("."))) include_once($path);
?>
</div>
