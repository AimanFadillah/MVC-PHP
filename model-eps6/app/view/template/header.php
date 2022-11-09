<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.css">
    <title><?= $data["judul"] ?></title>
</head>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <a class="navbar-brand container" href="#">ShopMan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>about/">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL ?>mahasiswa/">Mahasiswa</a>
      </li>
    </ul>
  </div>
</nav>


<body>
    