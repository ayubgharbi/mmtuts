<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php


function newCalc($x) {
    $newnr = $x * 0.75;
    echo "Here is 75% of what you wrote: ".$newnr;
}

$x = 100;
newCalc($x);

echo "<br>";

$a = 10;
newCalc($a);

?>
</body>
</html>
