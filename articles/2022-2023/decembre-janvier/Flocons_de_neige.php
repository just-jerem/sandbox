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
						<div class="post-thumb" style="padding-left:12%; margin-right:5%; ">
							<img src="../../../images/articles/jan-dec2023/dessinflocon.png">
						</div>
					</div>

					<div class="primary-content">

						<h1 class="page-title">Les Flocons de Neige et leur Géométrie fascinante</h1>

						<ul class="entry-meta">
							<li class="date">Décembre-Janvier 2022-2023</li>
							<li class="cat"><a href="">Température</a><a href="">Phénomène</a></li>
						</ul>

						<p class="lead">La neige, vous en avez probablement déjà observé durant votre vie, mais avez
							vous vraiment vu
							à quoi ressemblent les flocons de neige ?</p>

						<p class="drop-cap">Ces petites structures cristallines fascinantes changent de forme en
							fonction de la
							température de l'air qui les enveloppe. En effet, si nous avons l'habitude de voir des
							flocons de cette forme
							il est important de noter qu'en réalité, il existe une infinité de formes de flocons de
							neige existant sur terre et ces formes varient en fonction de l'humidité ainsi que de la
							température de l'air mais globalement, on peut tous les rassembler en 7 catégories
							cristallines.</p>

						<ul>
							<p>Les formes de flocons <a href="#flocon" class="lienimg smoothscroll">les plus
									courantes</a> se forment à ces seuils :</p>
							<li>de 0 à -4 °C, les flocons ont la forme d'assiettes minces hexagonales ;</li>
							<li>de -4 à -6 °C, ils ressemblent à des aiguilles ;</li>
							<li>de -6 et -10 °C, ils prennent la forme de colonnes creuses ;</li>
							<li>de -10 à -12 °C, ils se présentent comme des flocons à six pointes ;</li>
							<li>de -12 à -16 °C enfin, les flocons ont la forme d'une dendrite (branches présentent sur
								les extrémités des neurones)</li>
						</ul>


						<p id="flocon" class="lead"><img
								src="../../../images/articles/jan-dec2023/zdenek-machacek-KFDyMiIrZUI-unsplash.jpg"
								style="width:392px;  float:left"><img
								src="../../../images/articles/jan-dec2023/zdenek-machacek-p-FxBUdHt-g-unsplash.jpg"
								style="width:359.5px;  float:right;"></p>

						<p class="drop-cap" style="position:relative; padding-top:55%;">Globalement, depuis la formation
							de la terre, 10<sup>34</sup> flocons de neige seraient tombés sur Terre et il est quasiment
							impossible de retrouver deux flocons de neige exactement identiques, peu importe l'endroit
							où l'on se trouve sur Terre. Lorsque les flocons se forment, leur parcours va être
							tumultueux. Ils sont tellement légers qu'ils vont se laisser transporter au gré des vents
							et, grâce à ce vent, les flocons n'auront pas exactement tous la même forme puisque certains
							se développeront plus vite car transportés par les vents et refroidis encore plus par
							ceux-ci et d'autres se développeront moins vite. </p>

						<p>Ils finiront fatalement par devenir indissociables du reste des flocons sur le sol. Lorsque
							les flocons entrent en contact les un avec les autres, ils viennent se combiner pour former
							de la neige (celle avec laquelle nous avons tous joué étant enfant ou plus grand) ou <a href="#amas" class="lienimg smoothscroll">un amas
							de glace cristallisée</a></p>

						
						<p id="amas" class="lead" ><center><img style="width:70%; position:relative; margin-top:-15%; transform: rotate(90deg);" src="../../../images/articles/jan-dec2023/kiwihug-7MXCrBV6y0A-unsplash.jpg"></center></p>

						<p class="drop-cap" style="margin-top:-20%;">Pour conclure, pour observer des flocons et aller jusqu'à les prendre en photo  il faut un objectif macrophotographique (capable de prendre des photos de très près) et il faut prendre la photo au bon moment pour admirer ces fractales  (objet mathématique qui présente une structure similaire à toutes les échelles) naturelles.  Le moment propice à leur photographie s'avère être lorsqu'ils flottent dans l'air au gré du vent. </p>

						<p class="tags">
							<span>Tags :</span>
							<a href="#">temperature</a><a href="#">phenomene</a>
						</p>

						<div class="author-profile">
							<img src="../../../images/avatars/jeremie.jpg" alt="">

							<div class="about">
								<h4><a href="#">Jérémie</a></h4>

								<p>A reseigner.</p>

								<ul class="author-social">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">GooglePlus</a></li>
									<li><a href="#">Instagram</i></a></li>
								</ul>
							</div>
						</div> <!-- end author-profile -->

					</div> <!-- end entry-primary -->

					<div class="pagenav group">
						<div class="prev-nav">
							<a href="Dessins_Naturalistes.php" rel="prev">
								<span>Précédent</span>
								Dessins Naturalistes
							</a>
						</div>
						<div class="next-nav">
							<a href="Les_rouleaux_de_neige.php" rel="next">
								<span>Suivant</span>
								Les Rouleaux de Neige
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