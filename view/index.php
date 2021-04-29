<!DOCTYPE html>
<html lang="fr">

<?php require_once(__DIR__ . "./require/head.php") ?>

<body>
  <header>

    <?php require_once(__DIR__ . "./require/header.php") ?>

  </header>
  <main>

    <div class="container p-4">
      <?php while ($record = $req->fetch(PDO::FETCH_ASSOC)) : ?>

        <section>
          <div class="card p-2 my-4">
            <div class="card-body">
              <h2 class="card-title"><?= $record["title"] ?></h2>
              <p class="card-text"><?= $record["summary"] ?></p>
              <a class="btn btn-info stretched-link" href="/node/<?= $record["nid"] ?>">Voir</a>
            </div>
          </div>
        </section>

      <?php endwhile ?>
    </div>

  </main>
  <footer>

    <?php require_once(__DIR__ . "./require/footer.php") ?>

  </footer>
</body>

</html>