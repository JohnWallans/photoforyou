<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .grey {
        color: grey;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PhotoForYou</a>

        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuderoulant" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Photos</a>
                <div class="dropdown-menu" aria-labelledby="menuderoulant">
                    <a class="dropdown-item" href="#">Acheter</a>
                    <a class="dropdown-item" href="#">Vendre</a>
                    <a class="dropdown-item" href="#">Les plus populaires</a>
                    <a class="dropdown-item" href="#">Les nouveautés</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tarifs</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-2">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
        <li class="nav-item">
            <a class="grey" href="./inscription.php">S'inscrire</a>
        </li>

        <li class="nav-item">
            <a class="grey" href="./login.php">S'identifier</a>
        </li>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
</body>

</html>