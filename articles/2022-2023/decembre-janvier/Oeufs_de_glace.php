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

                    <div class="content-media" style="position:relative;">
                        <div class="post-thumb" style="padding-left:12%; margin-right:5%; ">
                            <img
                                src="../../../images/articles/jan-dec2023/Jää_on_kulmunud_pallideks_(Looduse_veidrused)._05.jpg">
                        </div>
                        <div class="logocam">
                            <p><img style='margin-top:4px; height:18px; width:21px; position:relative; margin-left:12%;'
                                    src="../../../images/png-clipart-graphy-camera-logo-camera-text-photography.png"><span
                                    style="position:absolute; margin-left:10px; padding-top:6.5px;"><i><a
                                            href="https://commons.wikimedia.org/wiki/User:Aleksandr_Abrosimov#/media/File:J%C3%A4%C3%A4_on_kulmunud_pallideks_(Looduse_veidrused)._05.jpg"
                                            style="color:inherit;">Aleksandr Abrosimov</a></i></span></p>
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="page-title">Les Oeufs de glace</h1>

                        <ul class="entry-meta">
                            <li class="date">Décembre-Janvier 2022-2023</li>
                            <li class="cat"><a href="">Température</a><a href="">Phénomène</a></li>
                        </ul>

                        <p class="lead">En 2019, sur l'île finlandaise de Hailuoto, un couple a découvert des milliers
                            d'œufs de glace sur une plage. Ce phénomène rare, mais pas sans précédent, se produit
                            environ une fois par an sur la côte finlandaise.</p>

                        <p class="drop-cap"> Pour arriver à cette forme ovale, les œufs de glaces ont besoin de
                            <u>conditions météorologiques très particulières</u>. Tout d’abord il faut se trouver proche
                            d’une étendue d’eau libre telle une mer, dont la température de l'eau <a href=#solid
                                class="smoothscroll">avoisine le point de solidification</a>. Cette eau forme alors une
                            fine couche de glace boueuse qui peut alors être déposée sur une plage (elle doit avoir une
                            légère pente).</p>

                        <p class="drop-cap">À ce stade, la glace peut s'accumuler sur un <a href="#noyau"
                                class="smoothscroll">noyau glaçogène</a> comme un grain de sable et tout cela grâce au
                            va-et-vient des vagues. Selon James Carter, un professeur de géographie-géologie à
                            l'Illinois State, ces conditions sont surtout réunies en automne. Bien que peu communes, ces
                            formations restent magnifiques, et ce ne sont pas les seules chefs d’œuvres de la froide
                            nature. Regardez sur le net, ça vaut le coup d'oeil. </p>

                        <p id="solid" style="opacity:0.5;">1 / Le point de solidification correspond à la température
                            nécessaire à une substance pour qu'elle passe d'un état liquide à un état solide. Pour l'eau
                            il est à 0°c (un peu plus bas pour l'eau de mer). </p>
                        <p id="noyau" style="opacity:0.5;">2 / Un noyau glaçogène désigne tous grains de matière qui
                            favorise la formation de cristaux de glace. </p>

                        <ul style="list-style:none; font-size:small;">Sources :
                            <li><a
                                href="https://fr.wikipedia.org/wiki/%C5%92uf_de_glace" style="color:inherit;"><i style="font-size:small;">https://fr.wikipedia.org/wiki/%C5%92uf_de_glace</i></a></li>
                            <li><a
                                href="https://www.futura-sciences.com/planete/breves/meteorologie-milliers-oeufs-glace-retrouves-finlande-1476/" style="color:inherit;"><i style="font-size:small;">https://www.futura-sciences.com/planete/breves/meteorologie-milliers-oeufs-glace-retrouves-finlande-1476/</i></a></li>
                            <li><a
                                href="https://www.bfmtv.com/sciences/en-finlande-de-mysterieux-oeufs-de-glace-decouverts-sur-une-plage_AN-201911070089.php " style="color:inherit;"><i style="font-size:small;">https://www.bfmtv.com/sciences/en-finlande-de-mysterieux-oeufs-de-glace-decouverts-sur-une-plage_AN-201911070089.php </i></a></li>
                            <li><a
                                href="https://www.theguardian.com/world/2019/nov/07/couple-rare-ice-eggs-finnish-beach" style="color:inherit;"><i style="font-size:small;">https://www.theguardian.com/world/2019/nov/07/couple-rare-ice-eggs-finnish-beach</i></a></li>
                        </ul>

                        <p class="tags">
                            <span>Tags :</span>
                            <a href="#">temperature</a><a href="#">phenomene</a>
                        </p>

                        <div class="author-profile">
                            <img src="../../../images/avatars/simon.jpg" alt="">

                            <div class="about">
                                <h4><a href="#">Simon</a></h4>

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
                            <a href="Les_rouleaux_de_neige.php" rel="prev">
                                <span>Précédent</span>
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