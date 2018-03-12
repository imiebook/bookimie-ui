<?php include("header.php")?>

<style>
.profil-img
{
	width: 200px;
	height: 200px;
  z-index:20;
}

.profil-block
{
  background-color:#CFF1FF;
  border-radius:5px;
  padding:20px 20px;
  margin-top:-100px;
  padding-top:110px;
}

</style>

<div class="container">
  <div class="row justify-content-center">

    <div class="row justify-content-center">
      <img src="img-temp/obama.jpg" class="profil-img rounded-circle border-secondary">
    </div>

    <div class="col-md-12 profil-block">

    <form>

      <div class="form-row justify-content-center">
        <div class="form-group col-xs-12 col-md-6">
          <label for="inputFirstName">Prénom</label>
          <input type="text" class="form-control" id="inputFirstName" placeholder="">
        </div>
        <div class="form-group col-xs-12 col-md-6">
          <label for="inputLestName">Nom</label>
          <input type="text" class="form-control" id="inputLastName" placeholder="">
        </div>
      </div>

      <div class="form-row justify-content-center">
        <div class="form-group col-xs-12 col-md-6">
          <label for="inputBirthday">Date de naissance</label>
          <input type="text" class="form-control" id="inputBirthday" placeholder="DD/MM/AAAA">
        </div>
        <div class="form-group col-xs-12 col-md-6">
          <label for="inputCallnumber">Téléphone</label>
          <input type="text" class="form-control" id="inputCallnumber" placeholder="">
        </div>
      </div>

      <div class="form-row justify-content-center">
        <div class="form-group col-xs-12 col-md-6">
          <label for="inputCountry">Pays</label>
          <select id="inputCountry" class="form-control">
            <option selected>France</option>
            <option>Angleterre</option>
            <option>Danemark</option>
          </select>
        </div>
        <div class="form-group col-xs-12 col-md-6">
          <label for="inputCity">Ville</label>
          <select id="inputCity" class="form-control">
            <option selected>Nantes</option>
            <option>Paris</option>
            <option>Angers</option>
          </select>
        </div>
      </div>

      <div class="form-row justify-content-center">
        <div class="form-group col-md-12">
          <label for="textareaBiography">Description / Biographie</label>
          <textarea class="form-control" id="textareaBiography" rows="3"></textarea>
        </div>
      </div>

      <div class="form-row justify-content-center">
        <div class="form-group col-md-12">
          <label for="textareaAccroche">Accroche</label>
          <textarea class="form-control" id="textareaAccroche" rows="2"></textarea>
        </div>
      </div>

      <div class="row justify-content-end">
        <div class="col-xs-12 col-md-3">
          <button type="button" class="btn btn-primary btn-block float-right">Enregistrer</button>
        </div>
        <div class="col-xs-12 col-md-2">
          <button type="button" class="btn btn-link btn-block">Annuler</button>
        </div>
      </div>

    </form>

    </div>
  </div>
</div>

<?php include("footer.php")?>
