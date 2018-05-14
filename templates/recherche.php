<?php include("header.php")?>
<div class="container">
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
        <div class="navbar-header">
          <span class="visible-xs navbar-brand">FILTRES</span>
        </div>
        <div class="navbar-collapse">
          <div class="nav navbar-nav">
			  <form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Compétences" aria-label="Search">
				</form>
			  <form>
			  <div class="form-group">
				<label for="formControlRange">Selectionnez un rayon</label>
				<input type="range" class="form-control-range" id="formControlRange">
			  </div>		
			</form>
			  <form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Rechercher une entreprise" aria-label="Search">
				</form>
            <form>
			  <div class="form-group">
				<label for="formControlRange">Expérience</label>
				<input type="range" class="form-control-range" id="formControlRange">
			  </div>		
			</form>
			  <form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Recherchez une ville" aria-label="Search">
				</form>
          </div>
        </div><!--/.nav-collapse -->
    </div>
  </div>
  <section id="searchResults" class="col-sm-9">
	<article class="row">
		<img src="/src/assets/img/gabriel.jpg" alt="Photo de profil Gabriel Pied" class="img-fluid">
		<div class="col">
			<div class="name">Gabriel Pied</div>
			<div class="jobAndCompany"><span>Chef de projet</span> | <span>Le Phare</span></div>
			<div>Ceci est un texte de description du profil</div>
		</div>
		<div class="col">
			<div class="competences">
				<span>PHP</span>
				<span>Gestion de projet</span>
				<span>CSS</span>
			</div>
			<div class="button">
				<button type="button" class="btn btn-primary">Voir le profil</button>
				<button type="button" class="btn btn-primary bkdwhite">Contacter</button>
			</div>
		</div>
	</article>
	<article class="row">
		<img src="/src/assets/img/gabriel.jpg" alt="Photo de profil Gabriel Pied" class="img-fluid">
		<div class="col">
			<div class="name">Gabriel Pied</div>
			<div class="jobAndCompany"><span>Chef de projet</span> | <span>Le Phare</span></div>
			<div>Ceci est un texte de description du profil</div>
		</div>
		<div class="col">
			<div class="competences">
				<span>PHP</span>
				<span>Gestion de projet</span>
				<span>CSS</span>
			</div>
			<div class="button">
				<button type="button" class="btn btn-primary">Voir le profil</button>
				<button type="button" class="btn btn-primary bkdwhite">Contacter</button>
			</div>
		</div>
	</article>
	<article class="row">
		<img src="/src/assets/img/gabriel.jpg" alt="Photo de profil Gabriel Pied" class="img-fluid">
		<div class="col">
			<div class="name">Gabriel Pied</div>
			<div class="jobAndCompany"><span>Chef de projet</span> | <span>Le Phare</span></div>
			<div>Ceci est un texte de description du profil</div>
		</div>
		<div class="col">
			<div class="competences">
				<span>PHP</span>
				<span>Gestion de projet</span>
				<span>CSS</span>
			</div>
			<div class="button">
				<button type="button" class="btn btn-primary">Voir le profil</button>
				<button type="button" class="btn btn-primary bkdwhite">Contacter</button>
			</div>
		</div>
	</article>
	<article class="row">
		<img src="/src/assets/img/gabriel.jpg" alt="Photo de profil Gabriel Pied" class="img-fluid">
		<div class="col">
			<div class="name">Gabriel Pied</div>
			<div class="jobAndCompany"><span>Chef de projet</span> | <span>Le Phare</span></div>
			<div>Ceci est un texte de description du profil</div>
		</div>
		<div class="col">
			<div class="competences">
				<span>PHP</span>
				<span>Gestion de projet</span>
				<span>CSS</span>
			</div>
			<div class="button">
				<button type="button" class="btn btn-primary">Voir le profil</button>
				<button type="button" class="btn btn-primary bkdwhite">Contacter</button>
			</div>
		</div>
	</article>
</section>
  </div>
</div>
<nav id="pagination" aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>

<?php include("footer.php")?>