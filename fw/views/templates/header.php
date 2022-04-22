<?php
if (!defined('CORE') || CORE !== true) exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $this->pager->addString('<title>Sanya page</title>');

    use Fw\Core\Pager;

    Pager::showHead();
    $this->pager->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    ?>

</head>

<body>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">item1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">item2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">item3</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div class="p-5 text-center bg-light">
    <h1 class="mb-3">Manao-framework</h1>
    <h4 class="mb-3">fw</h4>
    <a class="btn btn-primary" href="" role="button">Call to action</a>
  </div>
  <!-- Jumbotron -->
</header>