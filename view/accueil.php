<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CooperWeb</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <header role="banner">

    <?php require_once(__DIR__ . "./require/header.php") ?>

  </header>
  <main role="main">
    <br><br><br>
    <div class="container p-4">
      <h1 class="text-center m-4 animate__animated animate__bounceInDown">Bienvenue sur CooperWeb</h1>
      <h2 class="h4 text-muted text-center m-4  animate__animated animate__bounceInDown">
      Réussir son site web et ses applications de la conception à la réalisation !
      </h2>
      <h3 class="h5 text-muted text-center m-4  animate__animated animate__bounceInDown">Nous avons pour objectif de permettre aux développeurs web juniors d’acquérir ou de renforcer leurs compétences en conception de sites web (Html, Php) et en développement front-end (Css, Js)</h3>

      <div class="card  animate__animated animate__bounceInDown">
        <div class="card-header">
          <h3>Toutes les rubriques :
            <a href="/type/html" class="badge badge-primary">Html</a>
            <a href="/type/css" class="badge badge-primary">Css</a>
            <a href="/type/js" class="badge badge-primary">Js</a>
            <a href="/type/php" class="badge badge-primary">Php</a>
          </h3>
        </div>
      </div>

      <hr class="animate__animated animate__bounceInDown">

      <?php if (isset($_POST["create_node"])) : ?>
        <div class="alert alert-success animate__animated animate__bounceInLeft" role="alert">
          L'article <b class="text-uppercase"><?= $_POST["type"] ?></b> : "<i><?= $_POST["title"] ?></i>" à bien était créer !
        </div>
      <?php endif ?>
      <?php if (isset($_POST["nid"])) : ?>
        <div class="alert alert-success animate__animated animate__bounceInLeft" role="alert">
          L'article <b class="text-uppercase"><?= $_POST["type"] ?></b> : "<i><?= $_POST["title"] ?></i>" à bien était modifié !
        </div>
      <?php endif ?>
      <?php if (isset($_GET["nid"])) : ?>
        <div class="alert alert-danger animate__animated animate__bounceInLeft" role="alert">
          L'article <b class="text-uppercase"><?= $_GET["type"] ?></b> : "<i><?= $_GET["title"] ?></i>" à bien était supprimé !
        </div>
      <?php endif ?>


      <?php while ($record = $req->fetch(PDO::FETCH_ASSOC)) : ?>

        <section>
          <div class="card p-2 my-4 animate__animated animate__bounceInUp">
            <div class="card-body">
              <h3 class="card-title h2"><?= $record["title"] ?><span class="badge badge-light float-right text-capitalize"><?= $record["type"] ?></span></h3>
              <p class="card-text"><?= $record["summary"] ?></p>
              <a class="btn btn-outline-primary stretched-link" href="/node/<?= $record["nid"] ?>">Voir</a>
            </div>
          </div>
        </section>

      <?php endwhile ?>

      <a href="/view/createnode.php" class="btn btn-block btn-lg btn-outline-success">Créer un Article</a>

    </div>

  </main>
  <footer>

    <?php require_once(__DIR__ . "./require/footer.php") ?>

  </footer>
</body>

</html>