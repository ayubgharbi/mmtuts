<?php 
    include 'functions/user-functions.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

echo $_GET['name'];

?>

<form method="GET">
    <input type="hidden" name="name" value="Daniel">
    <button type="submit">PRESS ME!</button>
</form>

</body>
</html>
