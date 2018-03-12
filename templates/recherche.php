<?php include("header.php")?>

<section id="searchResults">
	Résultats de recherche
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
			<button type="button" class="btn btn-primary">Voir le profil</button>
			<button type="button" class="btn btn-primary bkdwhite">Contacter</button>
		</div>
	</article>
</section>

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