<?php

	if(mail("loneska@outlook.com", "Nouvelle condidature", getMessage($_POST))){
		?>
			<h2>Ton inscription a bien été prise en compte.</h2>
		<?php
	}else{
		?>
			<h2>Oups, une erreur est survenue.</h2>
		<?php
	}

?>