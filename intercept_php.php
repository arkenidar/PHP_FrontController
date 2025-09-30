<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="style.css">
<div>
    <?php
    // include php file with a security restriction
    $path = realpath($_REQUEST["file"] . ".php");
    if (str_starts_with($path, realpath("."))) include_once($path);
    ?>
</div>