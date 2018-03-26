<?php
require_once(__DIR__.'/src/functions.php');

 ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Classement</title>

    <!-- CSS Bootstrap 4 : https://getbootstrap.com/docs/4.0/getting-started/introduction/ -->
    <link defer rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS Font Awesome 5 : https://fontawesome.com/get-started -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link href="css/alphaseries.css" rel="stylesheet">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">AlphaSeries</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu principal -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-home"></i> Accueil
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="classement.php?slug=popularity">
                        <i class="fas fa-trophy"></i> Classement
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aleatoire.php">
                        <i class="fas fa-random"></i> Une série aléatoire
                    </a>
                </li>
            </ul>

            <!-- Formulaire de recherche -->
            <form action="recherche.php" method="post" class="form-inline my-2 my-lg-0">
                <input name="search" class="form-control mr-sm-2" type="text" placeholder="Rechercher une série" aria-label="Rechercher une série">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                    <i class="fa fa-search"></i> <span class="d-md-none">Rechercher</span>
                </button>
            </form>
        </div>
    </nav>

    <main role="main">

        <!-- Contenu -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="page-title">
                        <i class="fa fa-trophy"></i> Classement
                    </h2>
                    <p>
                        Séries les plus populaires :
                        <!-- OU Séries les mieux notées : -->
                    </p>

                    <!-- Tableau des résultats du classement -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Série</th>
                                <th scope="col">
                                    Note
                                    <a href="classement.php?slug=rating"><i class="fa fa-sort-down"></i></a>
                                </th>
                                <th scope="col">
                                    Nombre de personnes qui regardent
                                    <i class="fa fa-sort-down"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(0)['slug']?>"><?= MostPopularsFilms(0)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(0)['statistics']['rating']?>">
                                        <?= StarsInClassement(0)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(0)['statistics']['popularity']?></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(1)['slug']?>"><?= MostPopularsFilms(1)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(1)['statistics']['rating']?>">
                                        <?= StarsInClassement(1)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(1)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(2)['slug']?>"><?= MostPopularsFilms(2)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(2)['statistics']['rating']?>">
                                        <?= StarsInClassement(2)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(2)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(3)['slug']?>"><?= MostPopularsFilms(3)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(3)['statistics']['rating']?>">
                                        <?= StarsInClassement(3)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(3)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(4)['slug']?>"><?= MostPopularsFilms(4)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(4)['statistics']['rating']?>">
                                        <?= StarsInClassement(4)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(4)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(5)['slug']?>"><?= MostPopularsFilms(5)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(5)['statistics']['rating']?>">
                                        <?= StarsInClassement(5)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(5)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(6)['slug']?>"><?= MostPopularsFilms(6)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(6)['statistics']['rating']?>">
                                        <?= StarsInClassement(6)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(6)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(7)['slug']?>"><?= MostPopularsFilms(7)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(7)['statistics']['rating']?>">
                                        <?= StarsInClassement(7)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(7)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(8)['slug']?>"><?= MostPopularsFilms(8)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(8)['statistics']['rating']?>">
                                        <?= StarsInClassement(8)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(8)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(9)['slug']?>"><?= MostPopularsFilms(9)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(9)['statistics']['rating']?>">
                                        <?= StarsInClassement(9)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(9)['statistics']['popularity']?> </td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td><a href="serie.php?slug=<?=MostPopularsFilms(10)['slug']?>"><?= MostPopularsFilms(10)['name']?></a></td>
                                <td>
                                    <span class="stars text-info" data-toggle="tooltip" data-placement="top" title=" <?=TopRatedMovies(10)['statistics']['rating']?>">
                                        <?= StarsInClassement(10)?>
                                    </span>
                                </td>
                                <td><?= MostPopularsFilms(10)['statistics']['popularity']?> </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- BONUS Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="classement.php">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href="classement.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="classement.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="classement.php">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="classement.php">…</a></li>
                            <li class="page-item"><a class="page-link" href="classement.php">99</a></li>
                            <li class="page-item"><a class="page-link" href="classement.php">&raquo;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <hr>
        </main>

        <!-- Footer -->
        <footer class="container">
            <p>&copy; Les données proviennent du site <a target="_blank" href="https://www.betaseries.com">BetaSeries</a></p>
        </footer>

        <!-- JavaScript Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
        // activation des tooltips bootstrap de partout
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        </script>
    </body>
    </html>
