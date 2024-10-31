<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'TITLE'; ?></title>
  <!-- <base href="<?= PUBLIC_PATH ?>/" > -->
  <link rel="stylesheet" href="/beginphp/public/assets/source/myFonts.css" />
  <link
    rel="stylesheet"
    href="/beginphp/public/assets/source/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="/beginphp/public/assets/source/fontawesome-free-6.5.2-web/css/all.min.css" />
  <link rel="stylesheet" href="/beginphp/public/assets/css/main.css" />
  
</head>
<body>
  <div class="wrapper">
    <header class="header">
          <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
            <div class="container-fluid">
              <a class="navbar-brand" href="/beginphp">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/beginphp">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/beginphp/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/beginphp/posts/create">New post</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <?= get_alerts() ?>