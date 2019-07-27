<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
</head>
<body>

<form method="GET">
    <input type="text" name="person"> 
    <button>SUBMIT</button>
</form>

<?php
    $name = $_GET['person'];
    echo $name." is a handsome fellow";
?>

</body>
</html>
