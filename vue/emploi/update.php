<?php 
$iddomaine = $_GET['id'];
$domaine = $domainedb->read($iddomaine);

 ?>
<section id="menu_module"> 
	<div class="titre">
		modifier un domaine
	</div>

	<div class="options">
		<a href="app.php?view=domaine">
			<button>Afficher la liste</button>
		</a>
	</div>
</section>
<section id="form_module">
	<form name="form_update" id="form_update" method="post" action="controleur/domainecontroller.php?action=update">
		<fieldset>
			<legend>Information sur le domaine</legend>

			<p class="champ">
				<label for="intitule">id domaine</label>
				<br>
				<input type="text" name="iddomaine" id="iddomaine" value="<?php echo $domaine->iddomaine; ?>">
			</p>
			<br>
			<p class="champ">
				<label for="intitule">intiuler</label>
				<br>
				<textarea type="text" name="intitule" id="intitule">
					<?php echo $domaine->intitule; ?>
				</textarea>
			</p>
			<br>
			<p class="boutons">
				<input type="submit" name="modifier" id="modifier" value="modifier">
			</p>

		</fieldset>
	</form>	
</section>