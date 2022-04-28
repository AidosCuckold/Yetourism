<?php
include 'comments.php';
error_reporting(0);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-Light">
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="Places.php" id="navbardrop" data-toggle="dropdown">
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
            <li class="nav-item active">
                <a class="nav-link" href="Opinion.php">Обсуждение</a>
            </li>
        </ul>
    </div>
</nav>
<div class="wrapper">
    <form action="" method="POST" class="form">
        <div class="row">
            <div class="input-group">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" placeholder="Введите свое имя" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Введите свой Email" required>
            </div>
        </div>
        <div class="input-group textarea">
            <label for="comment">Комментарий</label>
            <textarea id="comment" name="comment" placeholder="Введите комментарий" required></textarea>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Отправить</button>
        </div>
    </form>
    <div class="prev-comments">
        <?php
        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="single-item">
                    <h4><?php echo $row['name']; ?></h4>
                    <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                    <p><?php echo $row['comment']; ?></p>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
</body>
</html>