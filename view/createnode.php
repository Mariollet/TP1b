<?php
// Récupération de l'instance de pdo
require_once($_SERVER["DOCUMENT_ROOT"] . "/model/Model.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modification d'un node</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <header role="banner">

    <?php require_once(__DIR__ . "./require/header.php") ?>

  </header>
  <main role="main">
    <br><br><br>
    <div class="container p-4">
      <div class="card">

        <div class="card-header">
          <h3>Création d'un node</h3>
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
                <input type="text" name="title">

              </div>
            </div>
            <div class="row">
              <div class="col d-flex flex-column">
                <label for="summary">Résumé</label>
                <textarea name="summary"></textarea>

                <label for="body">Corps</label>
                <textarea name="body" rows="20"></textarea>

                <div class="row">
                  <div class="col-8 d-flex flex-column">

                    <label for="seo_title">Titre SEO</label>
                    <input type="text" name="seo_title">

                  </div>
                  <div class="col-4 d-flex flex-column">

                    <label for="path">Chemin</label>
                    <input type="text" name="path">

                  </div>
                </div>

                <br>

                <input type="hidden" value="create_node" name="create_node">
                <input type="submit" class="btn btn-outline-success" value="Créer">
                <br>
                <a href="./../index.php" class="btn btn-primary">Retour</a>

              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </main>
  <footer>

    <?php require_once(__DIR__ . "./require/footer.php") ?>

  </footer>
</body>

</html>