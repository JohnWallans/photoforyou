<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Login Page - PhotoForYou</title>
</head>

<body>

    <?php
    include('./include/header.inc.php');
    include('./class/utilisateur.class.php');
    include('./class/utilisateurManager.class.php');
    ?>
    <br>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Connexion</h1>
            <p class="lead">Merci de vous identifier</p>
        </div>
        <form method="post" id="formId" novalidate>
            <div class="form-group row">
                <div class="col-md-4 mb-3">
                    <label for="email">Adresse électronique : </label>
                    <input type="text" class="form-control" name="mail" id="email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 mb-3">
                    <label for="motDePasse1">Mot de passe :</label>
                    <input type="password" class="form-control" name="motdepasse">
                </div>
                <div class="invalid-feedback">
                    Vous devez fournir un mot de passe.
                </div>
            </div>
            <input type="submit" value="Valider" class="btn btn-primary" name="identifier" />
        </form>
    </div>


</body>

</html>