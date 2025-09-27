   <h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>
<?php
   $allhobbits = ["Тэд", "Фрого", "Мари", "Одо", "Тук", "Рози", "Сэм", "Фредегар"];
   $partySize = rand(2,5);
   shuffle($allhobbits);
   $party = array_slice($allhobbits, 0, $partySize);
   $names = implode(", ",  $party);
   $countParty = count($party);
   $transports = ["лошадь", "осёл", "повозка", "нет транспорта"];
   $myTransport = rand(0,  $transports-1);


   ?>


   <div class='block'>
      В поход отправяться <?= $countParty?> хоббитов: <?= $names?><br>
   </div> 
