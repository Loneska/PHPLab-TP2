
		<p>
		    Tu aimerais intégrer le Cercle Infographie?<br />
		    Si tu le veux bien, remplis d'abord ce petit formulaire afin qu'on en sache un peu plus sur toi ;-)
		</p>

		<form method="post">
			<div class="form-group">
				<label for="firstname">Prénom</label>
		    	<input type="text" id="firstname" name="firstname" value="<?php fillValue($_POST, 'firstname') ?>" placeholder="Ton prenom"/>   
		    	<?php 
		    		if(isset($formErrors['firstnameError']))
		    			displayError($formErrors['firstnameError']);
		    	?> 
		    </div>

			<div class="form-group">
				<label for="lastname">Nom</label>
			    <input type="text" id="lastname" name="lastname" value="<?php fillValue($_POST, 'lastname') ?>" placeholder="Ton nom" />
			    <?php 
		    		if(isset($formErrors['lastnameError']))
		    			displayError($formErrors['lastnameError']);
		    	?> 
			</div>


			<div class="form-group">
				<label for="email">Email</label>
		    	<input type="email" name="email" id="email" value="<?php fillValue($_POST, 'email') ?>" placeholder="Ton adresse mail"/>
		    	<?php 
		    		if(isset($formErrors['emailError']))
		    			displayError($formErrors['emailError']);
		    	?> 
			</div>

			<div class="form-group">
				<label for="day">Date de naissance</label>

			    <select name="day" id="day">
			    	<option value="">Jour</option>
				   	<?php 
				   		for($i = 1; $i <= 31; $i++){
				   			echo '<option value="'.$i.'">'.$i.'</option>';
						}
				   	?>
				</select>


			    <select name="month" id="month">
			    	<option value="">Mois</option>
				   	<?php 
				   		for($i = 0; $i < count($months); $i++){
				   			echo '<option value="'.($i + 1).'">'.$months[$i].'</option>';
						}
				   	?>
				</select>


			    <select name="year" id="year">
			    	<option value="">Année</option>
				   	<?php 
				   		for($i = 0; $i <= 17; $i++){
				   			echo '<option value="'.(1980 + $i).'">'.(1980 + $i).'</option>';
						}
				   	?>
				</select>

				<?php 
				
					if(isset($formErrors['dayError']))
		    			displayError($formErrors['dayError']);
		    		else
		    			if(isset($formErrors['monthError']))
		    				displayError($formErrors['monthError']);
		    			else
		    				if(isset($formErrors['yearError']))
		    				displayError($formErrors['yearError']);
		    	?> 
			</div>

			<div class="form-group">
				<label for="address">Adresse</label>
			    <textarea name="address" rows="8" cols="45" id="address" placeholder="Ton adresse">
			    	<?php fillValue($_POST, 'address') ?>
			    </textarea>
			</div>

			<div class="form-group">
				<label for="city">Ville</label>
			    <input type="text" id="city" id="city" value="<?php fillValue($_POST, 'city') ?>" placeholder="Ta ville"/>
			</div>

			<div class="form-group">
				<label for="state">Commune</label>
			    <input type="text" name="state" id="state" value="<?php fillValue($_POST, 'state') ?>" placeholder="Ta commune"/>
			</div>

			<div class="form-group">
		    	<p>Pourquoi souhaites-tu devenir un bleu?</p>

		    	<?php 
		    		for($i = 0; $i < count($questions); $i++){
		    			?>
					    	<div class="radio-group">
					    		<input id="question-<?php echo $i; ?>" type="radio" name="becomeBlue" value="<?php echo $i; ?>">
					    		<label for="question-<?php echo $i; ?>"><?php echo $questions[$i]; ?></label>
					    	</div>
		    			<?php
		    		}

		    		if(isset($formErrors['reasonError']))
		    			displayError($formErrors['reasonError']);
		    	?>

		    </div>

		    <input type="hidden" name="fillMe" />

			<div class="form-group">
		    	<input type="submit" value="Valider" />
		    </div>
		</form>

	