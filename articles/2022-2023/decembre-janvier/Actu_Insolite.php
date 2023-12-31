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
							<img src="../../../images/articles/jan-dec2023/engin-akyurt-3ORoQEJY9LA-unsplash.jpg">
						</div>
					</div>

					<div class="primary-content">

						<h1 class="page-title">Une Mousse anti-secousses</h1>

						<ul class="entry-meta">
							<li class="date">Décembre-Janvier 2022-2023</li>
							<li class="cat"><a href="">noël</a><a href="">nourriture</a></li>
						</ul>

						<p class="lead">Vous êtes vous demandé pourquoi la bière (qu'elle soit de Noël ou non) ne
							déborde pas du verre ?</p>

						<p class="drop-cap">Même transportée au milieu d'une foule, la bière ne débordera pas,
							contrairement au café. Cela s'explique par la dissipation visqueuse 1 : les bulles de mousse
							deviennent collantes lorsqu’elles sont au contact d’un liquide qu’elles surplombent. Elles
							se fixent au rebord du verre et elles vont ainsi limiter les mouvements du liquide.
							Seulement 5 couches de bulles suffisent à amortir les oscillations.
						</p>

						<p>Les scientifiques ayant étudié ce phénomène, se demandent si cela ne pourrait pas faciliter
							le transport des liquides comme le carburant, un gaz liquéfié ou d’autres produits dangereux
							car en créant de la mousse à la surface de ces substances, les mouvements causés par le
							transport ou les arrêts brutaux pourraient être amortis.</p>

						<p class="tags">
							<span>Tagué dans :</span>
							<a href="#">noël</a><a href="#">nourriture</a>
						</p>

						<div class="author-profile">
							<img src="../../../images/avatars/user-05.jpg" alt="">

							<div class="about">
								<h4><a href="#">Julianne</a></h4>

								<p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit
									laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>

								<ul class="author-social">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">GooglePlus</a></li>
									<li><a href="#">Instagram</i></a></li>
								</ul>
							</div>
						</div> <!-- end author-profile -->

					</div> <!-- end entry-primary -->

				</article>

				<article class="format-standard">

					<div class="content-media" style="position:relative;">
						<div class="post-thumb">
							<img src="../../../images/articles/jan-dec2023/goatnoel.jpg">
						</div>
						<div class="logocam">
							<p><img style='margin-top:4px; height:18px; width:21px; margin-right:7px; position:relative;'
									src="../../../images/png-clipart-graphy-camera-logo-camera-text-photography.png"><i style="position:absolute; margin-left:2px; padding-top:6.5px;"><a style="color:inherit;" href="https://www.instagram.com/jerome.eno">Jerome
										Eno</i></a></p>
						</div>
					</div>

					<div class="primary-content">
						<ul class="entry-meta">
							<h1 class="page-title">Noël, pour les chèvres aussi c'est la fête</h1>
							<li class="cat"><a href="">noël</a><a href="">animaux</a></li>
						</ul>

						<p class="lead">Sapin de Noël naturel ou artificiel ? Que faites-vous de votre sapin usagé après
							les fêtes ? Une fois les décorations rangées, il est temps pour certains de se séparer de
							leur sapin.</p>

						<p class="drop-cap">Plutôt que de le jeter à la déchèterie ou dans la rue (ce qui est illégal),
							une solution bien plus écologique a été proposée par les agriculteurs : recycler ces mêmes
							sapins naturels qui auraient ordinairement été brûlés, en émettant du CO2... ce qui n'est
							pas très bon pour la planète… pour les donner à manger aux chèvres, de façon plus
							écoresponsable.
						</p>

						<p>Vous pouvez en effet en faire don à des fermes ou à des points de collectes. Ainsi, pas de
							gaspillage, et un joli cadeau post-Noël pour les chèvres. Les épines des sapins ont de
							nombreux bienfaits : elles servent de compléments alimentaires riches en oligo-éléments, en
							vitamines C et D (qui ont tendance à manquer aux chèvres l'hiver pour leur croissance) mais
							ont également des propriétés vermifuges. </p>

						<p class="drop-cap">Elles pallient par ailleurs le manque de foin et plus généralement de
							nourriture l'hiver. Un repas gastronomique, digne des plus grands restaurants ! Et surtout,
							plus sain que nos menus de fêtes. Cependant, leur consommation est interdite aux femelles en
							pleine gestation, car elle peut provoquer des fausses couches. Surtout, n'oubliez pas de
							retirer vos décorations de Noël. Pas sûr que le palais délicat des chèvres apprécie… La
							neige artificielle aussi est à éviter. À la fin, tout est mangé. Les chèvres font honneur au
							repas. Il n’y a pas de gaspillage. Il ne reste plus que le tronc, qui peut alors servir
							comme combustible pour se chauffer.</p>


						<p class="lead">L’année prochaine, c’est à vous de jouer ! Pourquoi ne pas offrir à votre tour
							votre sapin de Noël aux chèvres pour une transition écologique plus durable ?</p>

						<a
							href="https://ici.radio-canada.ca/nouvelle/1144951/recyclage-ecologie-sapin-chevre-noel-alternative" style="color:inherit;"><i style="font-size:small;">source
							:
							https://ici.radio-canada.ca/nouvelle/1144951/recyclage-ecologie-sapin-chevre-noel-alternative</i></a>

						<p class="tags">
							<span>Tags :</span>
							<a href="#">noël</a><a href="#">animaux</a>
						</p>



						<div class="author-profile">
							<img src="../../../images/avatars/user-05.jpg" alt="">

							<div class="about">
								<h4><a href="#">Elisa</a></h4>

								<p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit
									laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>

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
							<a href="Chiffre_du_Mois.php" rel="prev">
								<span>Précédent</span>
								Le Chiffre du Mois
							</a>
						</div>
						<div class="next-nav">
							<a href="Dessins_Naturalistes.php" rel="next">
								<span>Suivant</span>
								Dessins Naturalistes
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