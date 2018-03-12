<?php include("header.php")?>

<div class="mx-auto" style="width: 300px; margin-top: 15%;">

	<!-- form inscription -->
	<form class="needs-validation" novalidate>
		<div class="form-group">
			<label for="validationCustom01">Adresse email IMIE</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
				</div>
				<input type="email" class="form-control" id="validationCustom01" placeholder="Adresse e-mail" aria-describedby="inputGroupPrepend" required>
				<div class="invalid-feedback">
					Veuillez taper une adresse mail valide.
				</div>
			</div>

			<div class="form-group">
				<label for="validationCustom02">Mot de passe</label>
				<input type="password" class="form-control" id="validationCustom02" placeholder="Mot de passe" required>
				<div class="invalid-feedback">
					Veuillez saisir un mot de passe.
				</div>
			</div>
			<div class="invalid-feedback-server">
				Votre e-mail ou mot de passe est incorrect.
			</div>

			<div class="row justify-content-around">
				<button type="submit" id="mdpoublie"class="btn btn-primary">Mot de passe oublié ?</button>
				<button type="submit" class="btn btn-primary">Envoyer</button>
			</div>

		</div>
	</form>
</div>
<script src="doNotSendForm.js"></script>    
<?php include("footer.php")?>