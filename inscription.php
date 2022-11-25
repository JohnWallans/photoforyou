<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Inscription Page - PhotoForYou</title>
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
            <h1 class="display-4">Inscription</h1>
            <p class="lead">Merci de vous inscrire</p>
        </div>
        <form method="post" action="" id="form" novalidate>
            <div class="form-row">
                <div class="form-control-group col-md-3">
                    <label for="email">Adresse électronique :</label>
                    <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" name="email"
                        id="email" placeholder="Ex : example@gmail.com" required>
                    <div class="invalid-feedback">
                        L'adresse email doit être de 2 à 30 caractères.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-control-group col-md-3">
                    <label for="mdp">Mot de passe :</label>
                    <input pattern="[A-Za-zéèà. ]{8,30}" class="form-control" name="mdp" id="mdp"
                        placeholder="Ex : !(F4r58?7g" required>
                    <div class="invalid-feedback">
                        Le mot de passe doit être entre
                    </div>
                </div>
            </div>
            <br>
            <div class="form-row">
                <button class="btn btn-primary" value="submit" name="valider">Inscription</button>
            </div>
        </form>

        <?php


        if (isset($_POST['valider'])) {

            $email = $_POST['email'];
            $pwdHash = hash('sha256', $_POST['mdp']);

            $user1 = new Utilisateur(['EmailUser' => $email, 'MdpUser' => $pwdHash]);

            $manager->add($user1);
        }
        ?>

        <script>
            (function () {
                "use strict"
                window.addEventListener("load", function () {
                    var form = document.getElementById("form")
                    form.addEventListener("submit", function (event) {
                        if (form.checkValidity() == false) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add("was-validated")
                    }, false)
                }, false)
            }())
        </script>

</body>

</html>