<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title></title>
    </head>
    <body>
        <?php
        $fichier = 'source.xml';
        $xml = simplexml_load_file($fichier);

        foreach ($xml->page as $pages) {
            echo 'Menu :' . utf8_decode($pages->menu) . '<br/>';
            echo 'Title :' . $pages->title . '<br/>';
            foreach ($pages->attributes() as $attribute => $valeur) {
                echo $attribute . ' = ' . $valeur;
            }
            echo 'Content : ' . $pages->content . '<br/>';
        }

        //Attribute;
        echo $xml->page->attributes();
        ?>
        <footer class="page-footer font-small stylish-color-dark pt-4 fcolor">
            <div class="container text-center text-md-left">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mx-auto ">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">E-Games</h5>
                        <p>E-Games, le spécialiste de la vente de jeux en ligne ! Achetez tout vos jeux au
                            meilleur prix et avec un service client garanti !<br /> Nous nous trouvons au 2 rue Dombasle,
                            au Havre, venez nous rendre visite !</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-lg-3 col-md-2 mx-auto ">
                        <!--Maps Google-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.0259523995096!2d0.13147335073038988!3d49.48401676430452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e02e55af007f11%3A0xcb679803210d6c5c!2s2+Rue+de+Dombasle%2C+76600+Le+Havre!5e0!3m2!1sfr!2sfr!4v1539862615583" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <!--Séparation-->
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-lg-1 col-md-2 mx-auto ">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Jeux</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Aventure</a>
                            </li>
                            <li>
                                <a href="#!">Action</a>
                            </li>
                            <li>
                                <a href="#!">RPG</a>
                            </li>
                            <li>
                                <a href="#!">FPS</a>
                            </li>
                            <li>
                                <a href="#!">Stratégie</a>
                            </li>
                        </ul>
                    </div>
                    <!--Séparation-->
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-lg-2 col-md-2 mx-auto ">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Mon compte</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Panier</a>
                            </li>
                            <li>
                                <a href="#!">Profil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Séparation-->
            <hr class="tcolor">
            <!--Bouton Newsletter-->
            <ul class="list-unstyled list-inline text-center py-2">
                <li class="list-inline-item">
                    <h5 class="mb-1">Inscrivez-vous à la newsletter !</h5>
                </li>
                <li class="list-inline-item">
                    <a href="#!" id="btnrad" class="btn btn-danger btn-rounded btncolor">Inscription</a>
                </li>
            </ul>
            <!--Séparation-->
            <hr class="tcolor">
            <!--Vignettes réseaux sociaux-->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a href="#">
                        <img src="assets/img/facebook.png">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <img src="assets/img/twitter.png">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <img src="assets/img/discord.png">
                    </a>
                </li>
            </ul>
            <p class="ptext">Made with &hearts; by team 14</p>
        </footer>
    </body>
</html>
