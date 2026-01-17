<?php

$book = [];
$books = [
    [
        "name" => "Тихий Дон",
        "author" => "Михаил шолохов",
        "year" => 1928
    ],
    [
       "name" => "Война и мир",
        "author" => "Лев Толстой",
        "year" => 1869
    ],
    [
        "name" => "1984",
        "author" => "Джордж Оруэлл",
        "year" => 1949
    ]
];
$bookName = "Мёртвые Души";
$bookAuthor = "Николай Гоголь";
$bookYear = 1842;
$bookDescription = "Роман-поэма о прохождениях Павла Чичикова";
$studentName = "Северов Вадим";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $bookName; ?> — Детальная страница</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 15px 20px;
            text-align: center;
            flex-shrink: 0;
        }

        main {
            flex: 1;
            padding: 20px;
            background-color: white;
            max-width: 800px;
            margin: 20px auto 0 auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<header>
    <h2>Книжный каталог</h2>
    <p>Студент: <?php echo $studentName; ?></p>
</header>
<main>
    <h1><?php echo $bookName; ?></h1>

    <p><strong>Автор:</strong> <?php echo $bookAuthor; ?></p>
    <p><strong>Год издания:</strong> <?php echo $bookYear; ?></p>

    <p><?php echo $bookDescription; ?></p>
</main>

<footer>
    <p>Лабораторная работа №10 - <?php echo $studentName; ?></p>
</footer>

</body>
</html>

<h1>Главная страница каталога</h1>

<?php foreach ($books as $book):?>
    <h2><?php echo $book['name']; ?></h2>
    <p><strong>Автор:</strong> <?php echo $book ['author']; ?></p>
    <p><strong>Год издания:</strong> <?php echo $book ['year']; ?></p>
    <hr>
<?php endforeach; ?>