<?php 

	include_once('./includes/var.php');
	include_once('./includes/functions.php');
	
	
	if(checkForm($_POST, $formErrors)){
		include_once('./includes/success.php');
	}else{
		include_once('./includes/form.php');
	}

	var_dump($formErrors);

?>






