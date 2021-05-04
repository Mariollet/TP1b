<!DOCTYPE html>
<html lang="fr">

<?php require_once(__DIR__ . "./require/head.php") ?>

<body>
  <header>

    <?php require_once(__DIR__ . "./require/header.php") ?>

  </header>
  <main>
  <br><br><br>
    <div class="container my-4">
      <section class="card">
        <div class="card-header">
          <h2>
            <?= $GLOBALS["data"]["title"] ?>
            <a href="/type/<?= $GLOBALS["data"]["type"] ?>" class="badge badge-light float-right text-capitalize"><?= $GLOBALS["data"]["type"] ?></a>
          </h2>
        </div>
        <div class="card-body">
          <?= $GLOBALS["data"]["body"] ?>
        </div>
        <div class="card-footer">
          <a class="btn btn-primary m-1" href="/index.php">Retour</a>
          <a class="btn btn-outline-warning m-1" href="/view/editnode.php?nid=<?= $GLOBALS["data"]["nid"] ?>">Modifier</a>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-danger m-1" data-toggle="modal" data-target="#exampleModal">
            Supprimer
          </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p class="modal-title h4" id="exampleModalLabel">Attention !</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Voulez-vous vraiment supprimer l'article <b><?= $GLOBALS["data"]['type'] ?></b> : <i>"<?= $GLOBALS["data"]['title'] ?>"</i> ?
                </div>
                <div class="modal-footer">
                  <a class="btn btn-danger m-1" href="/index.php?nid=<?= $GLOBALS["data"]["nid"] ?>&type=<?= $GLOBALS["data"]["type"] ?>&title=<?= $GLOBALS["data"]["title"] ?>">Supprimer</a>
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Retour</button>
                </div>
              </div>
            </div>
          </div>


        </div>
      </section>
    </div>

  </main>
  <footer>

    <?php require_once(__DIR__ . "./require/footer.php") ?>

  </footer>
</body>

</html>