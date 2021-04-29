<!DOCTYPE html>
<html lang="fr">

<?php require_once(__DIR__ . "./require/head.php") ?>

<body>
  <header>

    <?php require_once(__DIR__ . "./require/header.php") ?>

  </header>
  <main>

    <div class="container p-4">
      <section class="card my-4">
        <div class="card-header">
          <h2>
            <?= $GLOBALS["data"]["title"] ?>
          </h2>
        </div>
        <div class="card-body">
          <p class="p-4"><?= $GLOBALS["data"]["body"] ?></p>
        </div>
        <div class="card-footer">
          <a class="btn btn-info m-1" href="/index.php">Retour</a>
          <a class="btn btn-outline-warning m-1" href="/view/editnode.php?nid=<?= $GLOBALS["data"]["nid"] ?>">Modifier</a>
          <a class="btn btn-outline-danger m-1" href="/index.php?nid=<?= $GLOBALS["data"]["nid"] ?>&delete_node=true">Supprimer</a>
        </div>
      </section>
    </div>

  </main>
  <footer>

    <?php require_once(__DIR__ . "./require/footer.php") ?>

  </footer>
</body>

</html>