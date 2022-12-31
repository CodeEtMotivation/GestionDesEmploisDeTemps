<?php 

$iduser = $_GET['id_users'];
$user = $usersdb->read($iduser);

 ?>
<span style="width: 02px;">
<section class="panel" style="margin-top: 10px;">  
<section id="menu_module"> 
	<div class="titre">
		modifier un utilisateur
	</div>

	<div  >
		<a href="app.php?view=acceuil" class="btn btn-success mr-1 mt-3 float-right">
			Afficher la liste
		</a>
	</div>
</section>
<section id="form_module">
	<form name="form_update" id="form_update" method="post" action="controler/userscontroler.php?action=update">
		<fieldset>
			<legend>Information sur l'utilisateur</legend>

			<p class="champ">
				
				<input type="hidden" name="iduser" id="iduser" value="<?php echo $iduser; ?>">
			</p>
			<br>
			<p class="champ">
				<label for="nom">nom</label>
				<br>
				<input type="text" name="nom" id="nom" value="<?php echo $user->nom; ?>" class="form-control">
			</p>
			<br>
			<p class="champ">
				<label for="nom">prenom</label>
				<br>
				<input type="text" name="prenom" id="nom" value="<?php echo $user->prenom; ?>"  class="form-control">
			</p>
			<br>
			<p class="champ">
				<label for="telephone">login</label>
				<br>
				<input type="text" name="login" id="telephone" value="<?php echo $user->login; ?>"  class="form-control">
			</p>
			<br>
			<p class="champ">
				<label for="password">password</label>
				<br>
				<input type="password" name="password" id="password" value="<?php echo $user->password; ?>"  class="form-control">
			</p>
			<br>
			<p class="champ">
				<label for="role">role</label>
				<br>
				<select name="role" id=""  class="form-control">
				<option><?=$user->role; ?></option>
                             <?php 
                                $datas=$usersdb->readAll();
                                foreach ($datas as $lignes) {
                              ?>
                              <option><?=$lignes->role ?></option>
                              <?php 
                                  }
                               ?>
				</select>
				
			</p>
			<br>
			<p class="boutons">
				<input type="submit" name="modifier" id="modifier" value="modifier" class="btn btn-success">
			</p>

		</fieldset>
	</form>	
</section>
</section>
								</span>
