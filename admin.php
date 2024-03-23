<!DOCTYPE html>
<html lang="en" style="background-color:lightsteelblue ;" >
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5eb8866ae7.js" crossorigin="anonymous"></script>
    <link href="css/bulma.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="javascript.js"></script>

</head>

<body>

<br>

<div >

<nav class="level" style="background-color:limegreen ;">
  <p class="level-item has-text-centered">
    <a class="link is-info" style="color:black;" href="admin.php"><strong>ACCEUIL</strong></a>
  </p>
  <p class="level-item has-text-centered">
    <a href="add_news.php" class="link is-info" style="color:black;"><strong>Ajouter NEWS</strong></a>
  </p>
  <p class="level-item has-text-centered">
    <img src="img/globe_cagex.png" alt="" width="120px">
  </p>

  <p class="level-item has-text-centered"></a>

    <div class="dropdown is-hoverable">
  <div class="dropdown-trigger">
    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
      <span><strong>Liste Formulaire</strong></span>
      <span class="has-icon is-small">
        <i class="fas fa-angle-down" ></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu3" role="menu">
  <div class="dropdown-content">
            <a href="form1.php" class="dropdown-item">
              Souscription d’une nouvelle police d’assurance
            </a>
            <a href="form2.php" class="dropdown-item">
              Fonctionnement de la police d’Assurance Crédit
            </a>
            <a href="form3.php" class="dropdown-item">
              Indemnisation de la police d’Assurance Crédit
            </a>
          </div>
  </div>
</div>
  </p>

  <p class="level-item has-text-centered">
    <a href="add_admin.php" class="link is-info" style="color:black;"><strong>Ajouter ADMIN</strong></a>
  </p>
  
</nav>
<p class="level-item has-text-centered">
    <a class="button is-danger" href="log_admin.php" name="logout"><strong>Se Déconnecter</strong></a>
  </p>
</div>

    

<div class="section">
        <div class="hero is-medium">
            <div class="hero-body">
                
            </div>
        </div>
</div>

</body>
</html>