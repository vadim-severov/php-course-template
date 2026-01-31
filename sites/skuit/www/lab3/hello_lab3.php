
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лаб 3 - Основы PHP</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; }
        .section { margin: 20px 0; padding: 15px; background: #f9f9f9; }
        form { margin: 15px 0; }
        input, button { padding: 8px; margin: 5px; }
        .result { color: green; font-weight: bold; }
        .variable { color: blue; }
        .hint { color: #666; font-size: 0.9em; font-style: italic; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Лабораторная работа 3</h1>
 
<?php
$name = "Вадим";
$age = 18;
$heightCm = 180;
$isStudent = true;
$grades = [4, 5, 3, 5, 4];
?>

<div class="section">
    <h2>1. Базовые переменные</h2>
    <p>Имя: <span class="variable"><?= $name ?></span></p>
    <p>Возраст: <span class="variable"><?= $age ?></span></p>
    <p>Рост: <span class="variable"><?= $heightCm ?></span> см</p>
    <p>Студент: <span class="variable"><?= $isStudent ? 'да' : 'нет' ?></span></p>
    <p>Оценки: <span class="variable"><?= implode(', ', $grades) ?></span></p>
</div>

<div class="section">
    <h2>2. Математическая операции</h2>
    <?php
    $birthYear = 2025 - $age;
    $futureAge =$age + 5;
    $heihtInches = $heightCm / 2.54;
    $heihtMeters = $heightCm / 100;
    $averageGrade = array_sum($grades) / count($grades);
    ?>

    <p>Год рождения: <span class="result"><?= $birthYear ?></span></p>
    <div class="hint">// 2025 - возраст = <?= $birthYear ?></div>
    
    <p>Возраст через 5 лет: <span class="result" ><?= $futureAge ?></span></p>
    <div class="hint">// возраст + 5 <?= $futureAge ?></div>

    <p>Рост в дюймах: <span class="result" ><?= round($heihtInches, 2) ?></span></p>
    <div class="hint">// рост в см / 2.54 <?= round($heihtInches, 2) ?></div>

    <p>Рост в метрах: <span class="result" ><?= round($heihtMeters, 2) ?></span></p>
    <div class="hint">// рост в см / 100  <?= round($heihtMeters, 2) ?></div>

    <p>Средний балл: <span class="result" ><?= round($averageGrade, 2) ?></span></p>
    <div class="hint">// array_sum($grades / count($grades)) <?= round($averageGrade, 2) ?></div>
</div>

<div class="section">
    <h2>3. Операция со строками</h2>
    <?php 
    $greeting = "Привет, " . $name . "!";
    $ageInfo = "Тебе $age лет";
    $upperName = strtoupper($name);
    $nameLength = strlen($name);
    ?>

    <p>Приветствие: <span class="resilt" ><?= $greeting ?></span></p>
    <div class="hint">// "Привет, " . $name . "!" </div>

    <p>Информация: <span class="resilt" ><?= $ageInfo ?></span></p>
    <div class="hint">// интерполяция строк: "Тебе $age лет" </div>

    <p>Имя в верхнем регистре: <span class="resilt" ><?= $upperName ?></span></p>
    <div class="hint">// strtoupper($name) - преобразует строку в верхний регистр </div>
    
    <p>Длина имени: <span class="resilt" ><?= $nameLength ?></span></p>
    <div class="hint">// strlen($name) - возврощает длину строки </div>
</div>