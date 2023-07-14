<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TéléInf</title>
    <link rel="stylesheet" href="../Assets/CSS/style.css">
</head>

<body>

    <?php include './Layout/header.php'; ?>


    <!-- Start Main content -->

    <main>
        <aside>
            <div class="content-container">
                <div class="trendin-header">
                    <h2 class="trending-title">Les Dernières Actualités de cette <span class="special-word">Semaine</span>. </h2>
                    <p> Retrouvez l'actualité sénégalaise et internationale sur <strong>TéléInf.</strong>, et toute l'information sur la politique, l'économie, la culture, les nouveautés high-tech.</p>

                </div>
            </div>

            <!-- Main article -->
            <!-- Mettre ici selon la dernière actualité en fonction de la date de publication -->

            <div class="main-article">
                <!--
                <div class="article-img">
                    <img src="../Assets/image.jpg" alt="actualite1">
                </div>
                -->
                <div class="article-content">

                    <h3 class="article-title">Le Sénégal enregistre 3 nouveaux décès liés au coronavirus</h3>
                    <p class="article-date">Publié le 12/05/2023 à 18:00</p>
                    <div class="article-label">
                        <p>Dernière news</p>
                    </div>
                    <p class="article-text">
                        Le Sénégal a enregistré trois nouveaux décès liés au coronavirus, ce qui porte le nombre total de décès à 1 135 depuis le début de la pandémie, a annoncé mercredi le ministère de la Santé et de l'Action sociale.
                        Ce département a également signalé 113 nouvelles infections, portant le nombre total de cas confirmés à 40 619. Les chiffres ont été enregistrés après la réalisation de 1 013 tests, soit un taux de positivité de 11,15 %.
                        Le gouvernement exhorte les citoyens à respecter les mesures de prévention, notamment le port du masque, le lavage des mains et la distanciation physique.

                    </p>
                    <!-- Lien vers le details de l'article. On pass en paramètre les données -->
                    
                    <a href="./detailsArticle.php" class="article-link">Lire la suite</a>
                </div>
            </div>

        </aside>
        <section>
            <div class="headline">
                <h2>À découvrir</h2>
            </div>

            <!-- Search article by category -->
            <div class="search-bar">
                <form action="" method="post">
                    <input type="text" name="search" id="search" placeholder="Rechercher une actualité...">
                </form>
            </div>

            <!-- Listing categories -->
            <div class="list-categories">
                <ul class="categories">
                    <li><a href="#" class="categorie">Politique</a></li>
                    <li><a href="#" class="categorie">Economie</a></li>
                    <li><a href="#" class="categorie">Culture</a></li>
                    <li><a href="#" class="categorie">Plus...</a></li>
                </ul>
            </div>

            <!-- Listing articles secondaire (autre que derniers créer) -->
            <div class="mini-articles">


                <div class="mini-article">
                    <!--
                    <div class="article-img">
                        <img src="../Assets/image.jpg" alt="actualite1">
                    </div> -->
                    <div class="article-content">
                        <h3 class="mini-article-title">Sadio Mané Sacré ballon d'or 2025. L'attaquant Sénégalais a son apogé ! </h3>
                        <p class="mini-article-date">Publié le 12/05/2023 à 16:00</p>
                        <div class="mini-article-label">
                            <p>Sport</p>
                        </div>
                        <a href="./detailsArticle.php" class="mini-article-link">Voir plus</a>
                    </div>
                </div>

                <div class="mini-article">
                    <!--
                    <div class="article-img">
                        <img src="../Assets/image.jpg" alt="actualite1">
                    </div>-->
                    <div class="article-content">
                        <h3 class="mini-article-title">[REPORTAGE]
                            À MBOUR, LE RÊVE OBSÉDANT DES JEUNES POUR L'ELDORADO EUROPÉEN</h3>
                        <p class="mini-article-date">Publié le 09/05/2023 à 16:00</p>
                        <div class="mini-article-label">
                            <p>Sport</p>
                        </div>
                        <a href="./detailsArticle.php" class="mini-article-link">Voir plus</a>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="pagination">
                <ul class="pages">
                    <li><a href="#" class="page">Précedent</a></li>
                    <li><a href="#" class="page">2</a></li>
                    <li><a href="#" class="page">3</a></li>
                    <li><a href="#" class="page">...</a></li>
                    <li><a href="#" class="page">Suivant</a></li>
                </ul>
        </section>

    </main>

    <!-- End Main content -->

    <?php include './Layout/footer.php'; ?>



</body>

</html>