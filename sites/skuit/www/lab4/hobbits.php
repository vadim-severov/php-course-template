   <h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>
<?php
   $allhobbits = ["Тэд", "Фрого", "Мари", "Одо", "Тук", "Рози", "Сэм", "Фредегар"];
   $partySize = rand(2,5);
   shuffle($allhobbits);
   $party = array_slice($allhobbits, 0, $partySize);
   $names = implode(", ",  $party);
   $countParty = count($party);
   $transports = ["лошадь", "осёл", "повозка", "нет транспорта"];
   $myTransport = rand(0,  count($transports)-1);
   $transport = $transports[$myTransport];

   ?>


   <div class='block'>
      В поход отправяться <?= $countParty?> хоббитов: <?= $names?><br>
   </div> 

   <div class='block'>
      <?if ($transport === 'нет транспорта') {?>
         К сожалению, транспорта нет. Хоббитам придётся идти пешком!
      <?} else {?>
         Хоббиты нашли транспорт: <?=$transport?>
      <?}?>
   </div>