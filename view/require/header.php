<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-4">
  <a class="navbar-brand text-center btn btn-outline-info" href="/">Learn<br>Web</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <?php if (isset($GLOBALS["type"])) : ?>

      <ul class="navbar-nav px-4">

        <li class="nav-item">
          <?php if ($GLOBALS["type"] == "html") : ?>
            <a class="nav-link active h5" href="/type/html">HTML</a>
          <?php else : ?>
            <a class="nav-link h5" href="/type/html">HTML</a>
          <?php endif ?>
        </li>

        <li class="nav-item">
          <?php if ($GLOBALS["type"] == "css") : ?>
            <a class="nav-link active h5" href="/type/css">CSS</a>
          <?php else : ?>
            <a class="nav-link h5" href="/type/css">CSS</a>
          <?php endif ?>
        </li>

        <li class="nav-item">
          <?php if ($GLOBALS["type"] == "js") : ?>
            <a class="nav-link active h5" href="/type/js">JS</a>
          <?php else : ?>
            <a class="nav-link h5" href="/type/js">JS</a>
          <?php endif ?>
        </li>

        <li class="nav-item">
          <?php if ($GLOBALS["type"] == "php") : ?>
            <a class="nav-link active h5" href="/type/php">PHP</a>
          <?php else : ?>
            <a class="nav-link h5" href="/type/php">PHP</a>
          <?php endif ?>
        </li>

      </ul>

    <?php elseif (isset($GLOBALS["data"]["type"])) : ?>

      <ul class="navbar-nav px-4">

        <li class="nav-item">
          <?php if ($GLOBALS["data"]["type"] == "html") : ?>
            <a class="nav-link active h5" href="/type/html">HTML</a>
          <?php else : ?>
            <a class="nav-link h5" href="/type/html">HTML</a>
          <?php endif ?>
        </li>

        <li class="nav-item">
          <?php if ($GLOBALS["data"]["type"] == "css") : ?>
            <a class="nav-link active h5" href="/type/css">CSS</a>
          <?php else : ?>
            <a class="nav-link h5" href="/type/css">CSS</a>
          <?php endif ?>
        </li>

        <li class="nav-item">
          <?php if ($GLOBALS["data"]["type"] == "js") : ?>
            <a class="nav-link active h5" href="/type/js">JS</a>
          <?php else : ?>
            <a class="nav-link h5" href="/type/js">JS</a>
          <?php endif ?>
        </li>

        <li class="nav-item">
          <?php if ($GLOBALS["data"]["type"] == "php") : ?>
            <a class="nav-link active h5" href="/type/php">PHP</a>
          <?php else : ?>
            <a class="nav-link h5" href="/type/php">PHP</a>
          <?php endif ?>
        </li>

      </ul>

    <?php else : ?>

      <ul class="navbar-nav px-4">
        <li class="nav-item">
          <a class="nav-link h5" href="/type/html">HTML</a>
        </li>

        <li class="nav-item">
          <a class="nav-link h5" href="/type/css">CSS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link h5" href="/type/js">JS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link h5" href="/type/php">PHP</a>
        </li>

      </ul>

    <?php endif ?>

    <a href="/view/createnode.php" class=" ml-auto btn btn-lg btn-outline-success">Créer un Node</a>

  </div>
</nav>