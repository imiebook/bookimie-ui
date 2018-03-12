<?php include("header.php")?>

<section class="searchResults">
	Résultats de recherche
	<article class="row">
		<img src="/src/assets/img/gabriel.jpg" alt="Photo de profil Gabriel Pied" class="img-fluid">
		<div class="col">
			<span id="name">Gabriel Pied</span>
			<span><span >Chef de projet</span> | <span>Le Phare</span></span>
			<span>Ceci est un texte de description du profil</span>
		</div>
		<div class="col">
			<span>PHP</span>
			<span>Gestion de projet</span>
			<span>CSS</span>
			<button type="button" class="btn btn-primary">Voir le profil</button>
			<button type="button" class="btn btn-primary">Contacter</button>
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