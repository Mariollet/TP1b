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
    <div class="card">
        <div class="card-header">
          <h3>Rubriques :</h3>
        </div>
      </div>
            <hr>
      <?php while ($record = $GLOBALS["data"]->fetch(PDO::FETCH_ASSOC)) : ?>
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
    </div>

  </main>
  <footer>

    <?php require_once(__DIR__ . "./require/footer.php") ?>

  </footer>
</body>

</html>