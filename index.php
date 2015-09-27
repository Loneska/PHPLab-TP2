<!DOCTYPE>
<html>
<head>
	<title>PHPLab-TP2</title>
	<?php 
		include_once('./includes/meta.php');
	?>
</head>

	<body>
		<?php 
	
			include_once('./includes/var.php');
			include_once('./includes/functions.php');
			
			
			if(checkForm($_POST, $formErrors)){
				include_once('./includes/success.php');
			}else{
				include_once('./includes/form.php');
			}
			
		?>

	</body>
</html>





