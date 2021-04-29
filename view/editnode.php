<?php
// Récupération de l'instance de pdo
require_once($_SERVER["DOCUMENT_ROOT"] . "/model/Model.php");

// Récupération d'un node
$record = Model::getNode($_GET["nid"]);

?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once(__DIR__ . "./require/head.php") ?>

<body>
  <header>

    <?php require_once(__DIR__ . "./require/header.php") ?>

  </header>
  <main>
    <div class="container p-4">
      <div class="card">

        <div class="card-header">
          <h3>Modification du node <?= $_GET['nid'] ?></h3>
        </div>

        <div class="card-body col-10 align-self-center">
          <form action="./../index.php" method="POST" class="form d-flex flex-column">

            <label for="type">Type</label>
            <input list="types" value="<?= $record['type'] ?>" name="type" id="type">
            <datalist id="types">
              <option value="article">
            </datalist>

            <label for="title">Titre</label>
            <input type="text" value="<?= $record['title'] ?>" name="title">

            <label for="body">Corps</label>
            <textarea name="body"><?= $record['body'] ?></textarea>

            <label for="summary">Résumé</label>
            <textarea name="summary"><?= $record['summary'] ?></textarea>

            <label for="seo_title">Titre SEO</label>
            <input type="text" value="<?= $record['seo_title'] ?>" name="seo_title">

            <label for="path">Chemin</label>
            <input type="text" value="<?= $record['path'] ?>" name="path">

            <br>

            <input type="hidden" value="<?= $record['nid'] ?>" name="nid">
            <input type="submit" class="btn btn-outline-warning" value="Modifier">
            <br>
            <a href="./../index.php" class="btn btn-info">Retour</a>
          </form>
        </div>

      </div>
    </div>
    <footer>

      <?php require_once(__DIR__ . "./require/footer.php") ?>

    </footer>
  </main>
</body>

</html>