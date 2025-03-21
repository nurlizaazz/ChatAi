<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HEXABOT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
  </head>
  <body style = "background : #578FCA">
  <nav class="navbar navbar-expand-lg border-bottom border-5" style="background-color: #3674B5; border-color: #A1E3F9;">
        <div class="container-fluid">
        <a class="navbar-brand text-black fw-bold" href="#">
        <h1 class="mb-0"><i class="bi bi-fingerprint text-warning"></i><b>HEXABOT</b></h1>
      </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?page=home" style="font-size: 20px;">Home</a>
              </li>
              <li class="nav-item">
            <a class="nav-link" aria-current="page" style="font-size: 20px;">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" style="font-size: 20px;">AI Products offer</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" style="font-size: 20px;">
              Documentation
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">API Integrations</a></li>
              <li><a class="dropdown-item" href="#">Embedded AI Chatbots</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Cloud Datasets</a></li>
            </ul>
          </li>
            </ul>
            <a href="index.php?page=logout" class="btn btn-warning fw-bolder" style="border-radius: 20px;">  Logout  <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </nav>

    <!-- Text Content -->
    <div class="text-center">
        <h5 style="font-size:60px;"><b>Welcome, <?php echo $_SESSION['fullname'];?>!</b></h5>
        <p>This is the  user.</p>
      </div>
    </div>
  </div>