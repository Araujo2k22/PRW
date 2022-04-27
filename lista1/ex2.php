<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="exercicio2.php" method="post">
Campo 1: <input type=number name=campo1><br> 
<input type=submit value="OK"></form>

</body>
</html>

<?php
	if(!empty($_POST["campo1"])){
	$a = $_POST["campo1"]; 
	
	$area = 3.14 * ($a*$a);
	
	echo 'A área do círculo é: ' . $area;
	}
?>