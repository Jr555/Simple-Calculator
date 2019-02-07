<!DOCTYPE>
<html>
<title>Result</title>
<head>
	<h1><center>Simple Calculator using HTML and PHP</center></h1>
</head>
<body>
	
	<?php
	 
	 $number1 = $_POST['number1'];
	 $number2 = $_POST['number2'];
	 $sum = $number1 + $number2;

	 ?>
	<center>
		<?php echo "The sum of ".$number1. " & " .$number2. " is "  . $sum;?>
	</center>	
	

</body>
</html>
