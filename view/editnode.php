<?php
// Récupération de l'instance de pdo
require_once($_SERVER["DOCUMENT_ROOT"] . "/model/Model.php");

// Récupération d'un node
$record = Model::getNode($_GET["nid"]);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $record['seo_title'] ?> | Edit</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>

<body>
  <header>

    <?php require_once(__DIR__ . "./require/header.php") ?>

  </header>
  <main>
    <br><br><br>
    <div class="container p-4">
      <div class="card">

        <div class="card-header">
          <h3>Modification du node <?= $_GET['nid'] ?></h3>
        </div>

        <div class="card-body col-11 align-self-center">
          <form action="./../index.php" method="POST" class="form d-flex flex-column">
            <div class="row">
              <div class="col-4 d-flex flex-column">

                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">
                  <option value="html">Html</option>
                  <option value="css">Css</option>
                  <option value="js">Js</option>
                  <option value="php">Php</option>
                </select>
              </div>

              <div class="col-8 d-flex flex-column">

                <label for="title">Titre</label>
                <input type="text" value="<?= $record['title'] ?>" name="title">

              </div>
            </div>
            <div class="row">
              <div class="col d-flex flex-column">
                <label for="summary">Résumé</label>
                <textarea name="summary"><?= $record['summary'] ?></textarea>

                <label for="body">Corps</label>
                <textarea name="body" rows="20"><?= $record['body'] ?></textarea>

                <div class="row">
                  <div class="col-8 d-flex flex-column">

                    <label for="seo_title">Titre SEO</label>
                    <input type="text" value="<?= $record['seo_title'] ?>" name="seo_title">

                  </div>


                  <div class="col-4 d-flex flex-column">

                    <label for="path">Chemin</label>
                    <input type="text" value="<?= $record['path'] ?>" name="path">

                  </div>
                </div>

                <br>

                <input type="hidden" value="<?= $record['nid'] ?>" name="nid">
                <input type="submit" class="btn btn-outline-warning" value="Modifier">
                <br>
                <a href="./../index.php" class="btn btn-primary">Retour</a>

              </div>
            </div>
          </form>
        </div>

      </div>

    </div>
    </div>
    <footer>

      <?php require_once(__DIR__ . "./require/footer.php") ?>

    </footer>
  </main>
</body>

</html>