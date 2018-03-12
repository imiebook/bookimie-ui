<?php include("header.php")?>

<div class="container">

<div class="row" style="margin-top:150px;">
  <img src="img-temp/obama.jpg" class="profil-img rounded-circle border-secondary align-middle">
  <div>
    <h1 class="text-primary">Barack Obama</h1>
  </div>
</div>

<h2 class="title-edit text-white bg-primary rounded-top display-4">Expériences</h2>

<div class="col-md-12 profil-block rounded-bottom bg-light">
  <form>

    <div class="form-row">
      <div class="form-group col-xs-12 col-md-12">
        <label for="inputJob">Title / Poste</label>
        <input type="text" class="form-control" id="inputJob" placeholder="">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-xs-12 col-md-12">
        <label for="inputCompanyName">Nom Entreprise</label>
        <input type="text" class="form-control" id="inputCompanyName">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-xs-12 col-md-6">
        <label for="inputCity">Ville</label>
        <select id="inputCity" class="form-control">
          <option selected>Nantes</option>
          <option>Angers</option>
          <option>Paris</option>
        </select>
      </div>
    </div>

    <div class="form-row justify-content-center">
      <div class="form-group col-md-12">
        <label for="textareaDescription">Description</label>
        <textarea class="form-control" id="textareaDescription" rows="3"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-12 border-top border-primary pt-4 mb-4 text-center">
        <button type="button" class="btn btn-outline-primary">+ Ajouter une expérience</button>
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

<?php include("footer.php")?>
