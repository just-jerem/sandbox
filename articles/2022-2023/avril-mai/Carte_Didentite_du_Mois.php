<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<!--- basic page needs
   ================================================== -->
	<meta charset="utf-8">
	<title>Zoom sur les Sciences</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
   ================================================== -->
	<link rel="stylesheet" href="../../../css/base.css">
	<link rel="stylesheet" href="../../../css/vendor.css">
	<link rel="stylesheet" href="../../../css/main.css">


	<!-- script
   ================================================== -->
	<script src="../../../js/modernizr.js"></script>
	<script src="../../../js/pace.min.js"></script>

	<!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../../../favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header
   ================================================== -->
	<header class="short-header">

		<div class="gradient-block"></div>

		<div class="row header-content">

		<?php
    // Include the menu
    include '../../../menu.php';

    // Get the current URL of the executing script
    $currentUrl = $_SERVER['PHP_SELF'];

    // Extract the directory path from the URL
    $menuDirectory = rtrim(dirname($currentUrl), '/'); // Remove trailing slashes

    // Function to convert relative URLs to absolute URLs based on the menu directory
    function makeAbsoluteUrl($url, $menuDir) {
        if (strpos($url, '/') === 0) {
            return $url; // URL is already absolute
        } else {
            return $menuDir . '/' . $url;
        }
    }
    ?>

    <!-- Modify the links in the menu using the $menuDirectory variable -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuLinks = document.querySelectorAll('#main-nav-wrap a');
            const menuDirectory = '<?php echo $menuDirectory; ?>';

            for (const link of menuLinks) {
                link.href = makeAbsoluteUrl(link.href, menuDirectory);
            }
        });
    </script>

			<div class="search-wrap">

				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s"
							title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->

		</div>

	</header> <!-- end header -->


	<!-- content
   ================================================== -->
	<section id="content-wrap" class="blog-single">
		<div class="row">
			<div class="col-twelve">

				<article class="format-standard">

					<div class="content-media">
						<div class="post-thumb">
							<img style="height:600px; float:left; margin-right:3em; padding-bottom:2%;"
								src="../../../images/articles/av-mai2023/ondrej-bocek-bbrwNK6YEag-unsplash.jpg">
						</div>
					</div>

					<div class="primary-content">

						<h1 class="page-title">Recréer une Espèce Disparue</h1>

						<ul class="entry-meta">
							<li class="date">Avril-Mai 2023</li>
							<li class="cat"><a href="">Mamifère</a></li>
						</ul>

						<p>
							<li style="list-style:none;"><strong>Nom commun :</strong> Aurochs de Heck (nom vernaculaire
								français) ou "Néo Aurochs" ou "Aurochs-reconstitués"</li>
							<li style="list-style:none;"><strong>Taille Moyenne :</strong> 170 cm</li>
							<li style="list-style:none;"><strong>Poids Moyen :</strong> 800 kg</li>
							<li style="list-style:none;"><strong>Espérance de Vie :</strong> de 20 à 25 ans</li>
							<li style="list-style:none;"><strong>Environnement :</strong> en Forêts ou en Marais</li>
							<li style="list-style:none;"><strong>Caractéristiques :</strong> Grande corne, il s'agit du
								plus grand des Bovidés</li>
						</p>

						<p class="lead">Spécificité : </p>

						<p class="drop-cap">L'Auroch est une espèce de bovidé, ancêtre des races actuelles de bovins domestiques et dont la descendance sauvage est désormais éteinte.
						</p>

						<p style="padding-top:3%;">L'Auroch de Heck	est issu d'une sélection de races bovines domestiques menée en Allemagne dans les années 20-30 par Heinz et Lutz Heck. Ce mélange visait à recréer le type originel sauvage des bovins domestiques, c’est-à-dire l'aurochs originel, Bos primigenius.
						</p>

						<div style="position : relative; padding-top:40%;">
							<p class="tags">
								<span>Tags :</span>
								<a href="#">mamifère</a><a href="#">carte d'identité du mois</a>
							</p>

							<div class="author-profile">
								<img src="../../../images/avatars/user-05.jpg" alt="">

								<div class="about">
									<h4><a href="#">Emma</a></h4>

									<p>A rajouter</p>

									<ul class="author-social">
										<li><a href="#">Facebook</a></li>
										<li><a href="#">Twitter</a></li>
										<li><a href="#">GooglePlus</a></li>
										<li><a href="#">Instagram</i></a></li>
									</ul>
								</div>
							</div> <!-- end author-profile -->
						</div>

					</div> <!-- end entry-primary -->

					<div class="pagenav group">
						<div class="next-nav">
							<a href="Chiffre_du_Mois.php" rel="next">
								<span>Suivant</span>
								Chiffre du Mois
							</a>
						</div>
					</div>


				</article>


			</div> <!-- end col-twelve -->
		</div> <!-- end row -->


		<!-- footer
   ================================================== -->
		<footer>

			<div class="footer-main">

				<div class="row">

					<div class="col-four tab-full mob-full footer-info">

						<h4>A Propos</h4>

						<p>
							Ce site est un projet ayant pour but de mettre en avant nos articles, nos parutions le plus
							possible sans avoir de pubs ni de dérangements particuliers,
							bonne lecture
						</p>

					</div> <!-- end footer-info -->

					<div class="col-two tab-1-3 mob-1-2 site-links">

						<h4>Liens autres</h4>

						<ul>
							<li><a href="http://lyceeernestperochon.cc-parthenay.fr/">Site du Lycée</a></li>
							<li><a href="../../../about.php">A Propos de nous</a></li>
							<li><a href="../../../team.php">L'équipe</a></li>
							<li><a href="https://fr.calameo.com/read/00697949092f1ebdab474">Dernière Parution (PDF) </a>
							</li>
							<li><a href="#"></a></li>
						</ul>

					</div> <!-- end site-links -->

					<div class="col-two tab-1-3 mob-1-2 social-links">

						<h4>Réseaux sociaux</h4>

						<ul>
							<li><a href="https://www.instagram.com/club_zoomsurlessciences/">Instagram</a></li>
							<li><a href="https://github.com/just-jerem/just-jerem">Github</a></li>
							<li><a href="#">Dribbble</a></li>
							<li><a href="#">Google+</a></li>
							<li><a href="#">Instagram</a></li>
						</ul>

					</div> <!-- end social links -->

				</div> <!-- end footer-main -->

				<div class="footer-bottom">
					<div class="row">

						<div class="col-twelve">
							<div class="copyright">
								<span>© Copyright Abstract 2016</span>
								<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
							</div>

							<div id="go-top">
								<a class="smoothscroll" title="Back to Top" href="#top"><i
										class="icon icon-arrow-up"></i></a>
							</div>
						</div>

					</div>
				</div> <!-- end footer-bottom -->

		</footer>

		<div id="preloader">
			<div id="loader"></div>
		</div>

		<!-- Java Script
   ================================================== -->
		<script src="../../../js/jquery-2.1.3.min.js"></script>
		<script src="../../../js/plugins.js"></script>
		<script src="../../../js/main.js"></script>

</body>

</html>