<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Ye's Tourism</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php"> Главная страница <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">О компании</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Места
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="Charyn.php">Чарынский каньон</a>
                    <a class="dropdown-item" href="Kolsay.php">Озеро Кольсай</a>
                    <a class="dropdown-item" href="Turkestan.php">Туркестан</a>
                    <a class="dropdown-item" href="Devil.php">Озеро Шайтанколь</a>
                    <a class="dropdown-item" href="Bektau.php">Бектау-ата</a>
                    <a class="dropdown-item" href="Kain.php">Озеро Каинды</a>
                    <a class="dropdown-item" href="Balhash.php">Озеро Балхаш</a>
                    <a class="dropdown-item" href="Borovoe.php">Боровое</a>
                    <a class="dropdown-item" href="Sing.php">Поющий Бархан</a>
                    <a class="dropdown-item" href="Baik.php">Байконур</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Opinion.php">Обсуждение</a>
            </li>
        </ul>
    </div>
</nav>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Выберите место </h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/charyn.jpeg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Чарынский каньон</h4>
                        <p class="card-text">Юго-восточный Казахстан</p>
                        <a href="Charyn.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/kolsay.jpeg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Озеро Кольсай</h4>
                        <p class="card-text">Юго-восточный Казахстан</p>
                        <a href="Kolsay.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/turk.jpeg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Туркестан</h4>
                        <p class="card-text">Южный Казахстан</p>
                        <a href="Turkestan.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/devil.jpeg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Озеро Шайтанколь</h4>
                        <p class="card-text">Центральный Казахстан</p>
                        <a href="Devil.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/bektau.jpeg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Бектау-ата</h4>
                        <p class="card-text">Центральный Казахстан</p>
                        <a href="Bektau.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/kain.jpg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Озеро Каинды</h4>
                        <p class="card-text">Юго-восточный Казахстан</p>
                        <a href="Kain.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/balhash.jpg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Озеро Балхаш</h4>
                        <p class="card-text">Юго-восточный Казахстан</p>
                        <a href="Balhash.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/bor1.jpg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Боровое</h4>
                        <p class="card-text">Северный Казахстан</p>
                        <a href="Borovoe.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/sing.jpg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Поющий Бархан</h4>
                        <p class="card-text">Юго-восточный Казахстан</p>
                        <a href="Sing.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/Baik.jpg" alt="Card image" width="500" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Байконур</h4>
                        <p class="card-text">Южный Казахстан</p>
                        <a href="Baik.php" class="btn btn-outline-dark">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>