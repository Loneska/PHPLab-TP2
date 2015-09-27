<?php 

	function checkForm($form, &$errors){

		$form = array_map("strip_tags", $form);
		$form = array_map("trim", $form);

		var_dump($form);

		if(empty($form)){
			return false;
		}

		if(isset($form['fillMe']) && trim($form['fillMe']) != ''){
			$_POST = [];
			return false;
		}
		

		if(!isset($form['firstname']) || $form['firstname'] == ''){

			$errors['firstnameError'] = "N'oublie pas ton prénom.";

		}

		if(!isset($form['lastname']) || $form['lastname'] == ''){

			$errors['lastnameError'] = "N'oublie pas ton nom.";

		}

		if(!isset($form['email']) || $form['email'] == ''){

			$errors['emailError'] = "N'oublie pas ton email s'il te plaît.";

		}else {
			if(!valideMail($form['email']))

				$errors['emailError'] = "Aie. Ton adresse email n'a pas l'air valide.";
		}

		if(!isset($form['day']) || $form['day'] == ''){

			$errors['dayError'] = "Le jour n'est pas rempli.";

		}else{

			if($form['day'] < 1 || $form['day'] > 31){

				$errors['dayError'] = "Ce jour n'existe pas.";

			}
		}

		if(!isset($form['month']) || $form['month'] == ''){

			$errors['monthError'] = "Le mois n'est pas rempli.";

		}else{

			if($form['month'] < 1 || $form['month'] > 12){

				$errors['monthError'] = "Ce mois n'existe pas.";
				
			}
		}

		if(!isset($form['year']) || $form['year'] == ''){

			$errors['yearError'] = "L'année n'est pas remplie.";

		}else{

			if($form['year'] < 1980 || $form['year'] > 1997){

				$errors['yearError'] = "Cette année là n'est pas proposée.";
				
			}
		}

		if(!isset($form['becomeBlue'])){
			$errors['reasonError'] = "N'oublie pas de choisir une raison.";
		}

		return empty($errors['reasonError']);
	}

	function valideMail($mail){
		return filter_var(trim($mail), FILTER_VALIDATE_EMAIL);
	}

	function displayError($error){

		echo '<span>'.$error.'</span>';

	}

	function fillValue($form, $key){
		if(isset($form[$key]))
			echo $form[$key];
	}

	function isSelected($form, $key, $value){
		if(isset($form[$key])){
			if($form[$key] == $value)
				return 'selected';
			else
				return '';
		}
	}

	function getMessage($form){
		$string = 'Nom : '.$form['firstname'].'<br />'.
	 	'Prénom : '.$form['lastname'].'<br />'.
		'Date de naissance : '.$form['day'].'/'.$form['month'].'/'.$form['year'].'<br />'.
		'Raison : '.$form['becomeBlue'].'<br />';

		if(isset($form['address']))	
			$string .= 'Adresse : '.$form['address'].'<br />';

		if(isset($form['city']))	
			$string .= 'Ville : '.$form['city'].'<br />';

		if(isset($form['state']))	
			$string .= 'Commune : '.$form['state'].'<br />';

		return $string;
	}
?>