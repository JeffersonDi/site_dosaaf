<?php require 'db.php'?>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta http-equiv="X-UA_Compatible" content='ie=edge'>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<header>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-2">
        <img src="http://www.dosaaf.ru/cms/tpl/img/95logo.png" alt="" width="120" height="120" class="d-inline-block align-text-top">
      </div>
      <div class="col-10">
        <h1 class="">МО ДОСААФ России по Боградскому району РХ</h1>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-">
      <div class="container-xxl">
        <a class="navbar-brand nav-link active" aria-current="page" href="/index">Главная</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Сведения об образовательной организации
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">МО ДОСААФ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Общая информация по организации</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Фотоальбомы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../information_ for_applicants.php">Информация для поступающих</a>
            </li>
            <li class="nav-item">
              <div class="search">
                <input class="in_search form-control me-2" type="text" placeholder="Поиск...">
                <button class="btn_search" type="submit">
                  <svg width="36px" height="36px" viewBox="0 0 20 20" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                  </svg>
                </button>
                <button class="btn_search_show" type="submit">
                  <svg width="36px" height="36px" viewBox="0 0 20 20" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                  </svg>
                </button>
                
              </div>
            </li>
            <!--<li class="nav-item">
              <div class="search">
                <form action="#">
                  <input class="in_search" type="text" name="search" placeholder="Поиск...">
                  <button class="btn_search" type="submit">
                    <svg width="36px" height="36px" viewBox="0 0 20 20" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                  </button>
                </form>
              </div>         
            </li>-->
          </ul>


          <!--<form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Поиск</button>
          </form>-->
        </div>
      </div>
    </nav>
    <script src="js/scripts.js"></script>
</header>