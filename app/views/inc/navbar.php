<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= URLROOT; ?>"><?= SITENAME; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= URLROOT; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URLROOT; ?>/pages/about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= URLROOT; ?>/users/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URLROOT; ?>/users/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>