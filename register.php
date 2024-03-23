<!DOCTYPE html>
<html lang="en">

<head>
    <title>register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5eb8866ae7.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.css">
</head>

<body style="background-image:url('img/world_dots.png'); background-repeat:no-repeat; background-size:1500px 950px;">

    <section class="hero is-fullheight">

        <div class="hero-body">

            <div class="container">
                <div class="logo columns is-centered is-4">
                    <img src="img/globe_cagex.png" style="height: 200px;">
                </div>

                <div class="columns is-centered is-3-widescreen">

                    <form action="check_register.php" method="POST" class="box">

                        <h1 class="title is-9">Inscrivez-vous</h1>

                        <div class="field">
                            <label for="" class="label">Nom</label>
                            <div class="control has-icons-left">
                                <input class="input is-focused" type="text" name="nom" placeholder="Nom" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">Prenom</label>
                            <div class="control has-icons-left">
                                <input class="input is-focused" type="text" name="prenom" placeholder="Prenom" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">E-mail</label>
                            <div class="control has-icons-left">
                                <input class="input is-focused" type="mail" name="mail" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">Mot de passe</label>
                            <div class="control has-icons-left">
                                <input class="input is-focused" type="password" name="mdp" placeholder="Password" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">Type d'utilisateur</label>

                            <label class="radio">
                                <input type="radio" name="type" value="Particulier">
                                Particulier
                            </label>
                            <label class="radio">
                                <input type="radio" name="type" value="Société">
                                Société
                            </label>

                        </div>

                        <div class="field">
                            <input class="button is-success" type="submit" name="submit" value="S'inscrire">
                        </div>
                        <p>Vous avez deja un compte ? <a href="index_B.php"> Connectez-vous ici !</a></p>
                    </form>

                </div>

            </div>

        </div>

    </section>

</body>

</html>