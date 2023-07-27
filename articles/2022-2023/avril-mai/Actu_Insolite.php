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
							<img src="../../../images/thumbs/single/single-01.jpg">
						</div>
					</div>

					<div class="primary-content">

						<h1 class="page-title">Hey, This Is A Standard Format Post.</h1>

						<ul class="entry-meta">
							<li class="date">September 06, 2016</li>
							<li class="cat"><a href="">Wordpress</a><a href="">Design</a></li>
						</ul>

						<p class="lead">Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat
							dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat
							enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna
							amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum
							adipisicing aliqua ea nisi sint.</p>

						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt
							sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit
							amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna
							cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea
							nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim
							cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut
							nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
						</p>

						<p><img src="../../../images/shutterbug.jpg" alt=""></p>

						<h2>Large Heading</h2>

						<p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
							est eligendi optio cumque nihil impedit quo minus <a href="http://#">omnis voluptas
								assumenda est</a> id quod maxime placeat facere possimus, omnis dolor repellendus.
							Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
							et.</p>

						<blockquote>
							<p>This is a simple example of a styled blockquote. A blockquote tag typically specifies a
								section that is quoted from another source of some sort, or highlighting text in your
								post.</p>
						</blockquote>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
							dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt
							in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
							Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate
							enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim
							aliqua laborum mollit quis nostrud sed sed..</p>

						<h3>Smaller Heading</h3>

						<p>Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
							eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
							voluptas assumenda est, omnis dolor repellendus.</p>

						<p>Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
							eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
							voluptas assumenda est, omnis dolor repellendus.</p>

						<pre><code>
code {
   font-size: 1.4rem;
   margin: 0 .2rem;
   padding: .2rem .6rem;
   white-space: nowrap;
   background: #F1F1F1;
   border: 1px solid #E1E1E1;
   border-radius: 3px;
}
</code></pre>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
							dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt
							in culpa.</p>

						<ul>
							<li>Donec nulla non metus auctor fringilla.
								<ul>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet.</li>
								</ul>
							</li>
							<li>Donec nulla non metus auctor fringilla.</li>
							<li>Donec nulla non metus auctor fringilla.</li>
						</ul>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
							dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt
							in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
							Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate
							enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim
							aliqua laborum mollit quis nostrud sed sed..</p>

						<p class="tags">
							<span>Tagged in :</span>
							<a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a>
						</p>

						<div class="author-profile">
							<img src="../../../images/avatars/user-05.jpg" alt="">

							<div class="about">
								<h4><a href="#">Jonathan Smith</a></h4>

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
							<a href="#" rel="prev">
								<span>Previous</span>
								Tips on Minimalist Design
							</a>
						</div>
						<div class="next-nav">
							<a href="#" rel="next">
								<span>Next</span>
								Less Is More
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