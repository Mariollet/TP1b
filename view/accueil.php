<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LearnWeb</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <header>

    <?php require_once(__DIR__ . "./require/header.php") ?>

  </header>
  <main>

    <div class="container p-4">
      <h1 class="text-center m-4">Bienvenue sur LEARNWEB</h1>
      <h2 class="h4 text-muted text-center m-4">
        Ce site web est un exercice Php/Html/Bootstrap pour la mise en place
        d'un back-office qui permet, en s'inpirant d'une architecture MVC,
        d'ajouter, de supprimer et modifier les données d'une BDD.
      </h2>

      <div class="card">
        <div class="card-header">
          <h3>Tous les articles :</h3>
        </div>
      </div>

      <hr>

      <?php if (isset($_POST["create_node"])) : ?>
        <div class="alert alert-success" role="alert">
          L'article <b class="text-uppercase"><?= $_POST["type"] ?></b> : "<i><?= $_POST["title"] ?></i>" à bien était créer !
        </div>
      <?php endif ?>
      <?php if (isset($_POST["nid"])) : ?>
        <div class="alert alert-success" role="alert">
          L'article <b class="text-uppercase"><?= $_POST["type"] ?></b> : "<i><?= $_POST["title"] ?></i>" à bien était modifié !
        </div>
      <?php endif ?>
      <?php if (isset($_GET["delete_node"])) : ?>
        <div class="alert alert-danger" role="alert">
          L'article <b class="text-uppercase"><?= $_GET["type"] ?></b> : "<i><?= $_GET["title"] ?></i>" à bien était supprimé !
        </div>
      <?php endif ?>


      <?php while ($record = $req->fetch(PDO::FETCH_ASSOC)) : ?>

        <section>
          <div class="card p-2 my-4">
            <div class="card-body">
              <h3 class="card-title h2"><?= $record["title"] ?><span class="badge badge-light float-right text-capitalize"><?= $record["type"] ?></span></h3>
              <p class="card-text"><?= $record["summary"] ?></p>
              <a class="btn btn-info stretched-link" href="/node/<?= $record["nid"] ?>">Voir</a>
            </div>
          </div>
        </section>

      <?php endwhile ?>

      <a href="/view/createnode.php" class="btn btn-block btn-lg btn-outline-success">Créer un Node</a>

    </div>

  </main>
  <footer>

    <?php require_once(__DIR__ . "./require/footer.php") ?>

  </footer>
</body>

</html>