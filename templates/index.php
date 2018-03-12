<?php include("header.php")?>

  <div class="mx-auto" style="width: 300px; margin-top: 15%;">
    <!-- form inscription -->
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Adresse email IMIE</label>
        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" id="InputPassword1" placeholder="Mot de passe">
      </div>
      <div class="row justify-content-around">
        <button type="submit" id="mdpoublie"class="btn btn-primary">Mot de passe oublié ?</button>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </form>
</div>

<?php include("footer.php")?>