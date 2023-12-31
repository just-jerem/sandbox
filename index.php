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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- CSS
   ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/vendor.css">
	<link rel="stylesheet" href="css/main.css">


	<!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

	<!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header
   ================================================== -->
	<header class="short-header">

		<div class="gradient-block"></div>

		<div class="row header-content">

		<?php
    // Include the menu
    include 'menu.php';

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


	<!-- masonry
   ================================================== -->
	<section id="bricks">

		<div class="row masonry">
			<div class="container">

				<!-- brick-wrapper -->
				<div class="bricks-wrapper">

					<div class="grid-sizer"></div>

					<div class="brick entry featured-grid animate-this">
						<div class="entry-content">
							<div id="featured-post-slider" class="flexslider">
								<ul class="slides">

									<li>
										<div class="featured-post-slide">

											<div class="post-background"
												style="background-image:url('images/thumbs/featured/featured-1.jpg');">
											</div>

											<div class="overlay"></div>

											<div class="post-content">
												<ul class="entry-meta">
													<li>September 06, 2016</li>
													<li><a href="#">Naruto Uzumaki</a></li>
												</ul>

												<h1 class="slide-title"><a href="single-standard.php"
												title="">Minimalism Never Goes Out of Style</a></h1>
											</div>

										</div>
									</li> <!-- /slide -->

									<li>
										<div class="featured-post-slide">

											<div class="post-background"
												style="background-image:url('images/thumbs/featured/featured-2.jpg');">
											</div>

											<div class="overlay"></div>

											<div class="post-content">
												<ul class="entry-meta">
													<li>August 29, 2016</li>
													<li><a href="#">Sasuke Uchiha</a></li>
												</ul>

												<h1 class="slide-title"><a href="single-standard.php"
														title="">Enhancing Your Designs with Negative Space</a></h1>
											</div>

										</div>
									</li> <!-- /slide -->

									<li>
										<div class="featured-post-slide">

											<div class="post-background"
												style="background-image:url('images/thumbs/featured/featured-3.jpg');;">
											</div>

											<div class="overlay"></div>

											<div class="post-content">
												<ul class="entry-meta">
													<li>August 27, 2016</li>
													<li><a href="#" class="author">Naruto Uzumaki</a></li>
												</ul>

												<h1 class="slide-title"><a href="single-standard.php" title="">Music
														Album Cover Designs for Inspiration</a></h1>
											</div>

										</div>
									</li> <!-- end slide -->

								</ul> <!-- end slides -->
							</div> <!-- end featured-post-slider -->
						</div> <!-- end entry content -->
					</div>

					<article class="brick entry format-standard animate-this">

						<div class="entry-thumb">
							<a href="single-standard.php" class="thumb-link">
								<img src="images/thumbs/diagonal-building.jpg" alt="building">
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">JWST</a>
										<a href="#"></a></a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-standard.php">Just a Standard Format Post.</a>
								</h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

					<article class="brick entry format-standard animate-this">

						<div class="entry-thumb">
							<a href="single-standard.php" class="thumb-link">
								<img src="images/thumbs/ferris-wheel.jpg" alt="ferris wheel">
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Design</a>
										<a href="#">UI</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-standard.php">This Is Another Standard Format
										Post.</a></h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

					<!-- format audio here -->
					<article class="brick entry format-audio animate-this">

						<div class="entry-thumb">
							<a href="single-audio.php" class="thumb-link">
								<img src="images/thumbs/concert.jpg" alt="concert">
							</a>

							<div class="audio-wrap">
								<audio id="player" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%"
									height="42" controls="controls"></audio>
							</div>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Design</a>
										<a href="#">Music</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-audio.php">This Is a Audio Format Post.</a>
								</h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- /article -->

					<article class="brick entry animate-this">

						<div class="entry-thumb">
							<a href="single-standard.php" class="thumb-link">
								<img src="images/thumbs/shutterbug.jpg" alt="Shutterbug">
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Photography</a>
										<a href="#">html</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-standard.php">Photography Skills Can Improve
										Your Graphic Design.</a></h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

					<article class="brick entry animate-this">

						<div class="entry-thumb">
							<a href="single-standard.php" class="thumb-link">
								<img src="images/thumbs/usaf-rocket.jpg" alt="USAF rocket">
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Branding</a>
										<a href="#">Mockup</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-standard.php">The 10 Golden Rules of Clean
										Simple Design.</a></h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

					<article class="brick entry format-gallery group animate-this">

						<div class="entry-thumb">

							<div class="post-slider flexslider">
								<ul class="slides">
									<li>
										<img src="images/thumbs/gallery/work1.jpg">
									</li>
									<li>
										<img src="images/thumbs/gallery/work2.jpg">
									</li>
									<li>
										<img src="images/thumbs/gallery/work3.jpg">
									</li>
								</ul>
							</div>

						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Branding</a>
										<a href="#">Wordpress</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-gallery.php">Workspace Design Trends and
										Ideas.</a></h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

					<article class="brick entry format-link animate-this">

						<div class="entry-thumb">
							<div class="link-wrap">
								<p>Looking for affordable &amp; reliable web hosting? We recommend Dreamhost.</p>
								<cite>
									<a target="_blank"
										href="http://www.dreamhost.com/r.cgi?287326">http://www.dreamhost.com</a>
								</cite>
							</div>
						</div>

					</article> <!-- end article -->


					<article class="brick entry animate-this">

						<div class="entry-thumb">
							<a href="single-standard.php" class="thumb-link">
								<img src="images/thumbs/diagonal-pattern.jpg" alt="Pattern">
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Design</a>
										<a href="#">UI</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-standard.php">You Can See Patterns
										Everywhere.</a></h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

					<article class="brick entry format-video animate-this">

						<div class="entry-thumb video-image">
							<a href="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39"
								data-lity>
								<img src="images/thumbs/ottawa-bokeh.jpg" alt="bokeh">
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Design</a>
										<a href="#">Branding</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-video.php">This Is a Video Post Format.</a>
								</h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

					<article class="brick entry animate-this">

						<div class="entry-thumb">
							<a href="single-standard.php" class="thumb-link">
								<img src="images/thumbs/lighthouse.jpg" alt="Lighthouse">
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Photography</a>
										<a href="#">Design</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-standard.php">Breathtaking Photos of
										Lighthouses.</a></h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

					<article class="brick entry animate-this">

						<div class="entry-thumb">
							<a href="single-standard.php" class="thumb-link">
								<img src="images/thumbs/liberty.jpg" alt="Liberty">
							</a>
						</div>

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Branding</a>
										<a href="#">html</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="single-standard.php">Designing With Black and
										White.</a></h1>

							</div>
							<div class="entry-excerpt">
								Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
								proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
								incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
							</div>
						</div>

					</article> <!-- end article -->

				</div> <!-- end brick-wrapper -->
			</div>

		</div> <!-- end row -->

		<div class="row">

			<nav class="pagination">
				<div class="pagination-buttons">
					<button id="previous-page-button">&lt;</button>
					<div id="pagination-container" class="page-numbers"></div>
					<button id="next-page-button">&gt;</button>
				</div>
			</nav>


		</div>

	</section> <!-- end bricks -->


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
						<li><a href="about.php">A Propos de nous</a></li>
						<li><a href="team.php">L'équipe</a></li>
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
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/main.js"></script>
	<script src="js/pagination.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>


</body>

</html>