<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                 <h1 class="display-3">Creation d'un Protagoniste</h1>
                 <form action="/php7-Adeline/objet/resultat.php" method="POST">
                <div class="form-group">
                    <label for="nom">Nom du personnage</label>
                    <input name="nom" type="nom" class="form-control" id="nom" aria-describedby="nom" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="category">Type du personnage</label>
                    <select class="form-control" name="category">
                        <option value="Magicien">Magicien</option>
                        <option value="Chevalier">Chevalier</option>
                    </select>
                </div>
                    <label for="points">Points de vie du personnage </label>
                    <input name="point_vie" type="int" class="form-control" id="points" aria-describedby="points" placeholder="points">
                </div>

                <button type="creation" href"main.php" class="btn btn-primary">Creation</button>
            </form>


            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Bootstrap 2018</p>
    </footer>
</body>
</html>
