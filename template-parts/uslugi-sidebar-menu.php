<?php
$services = [
    'hospitalizatsia-statsionar' => 'Хоспитализация стационар',
    'hotel-za-domashni-lyubimtsi' => 'Хотел за домашни любимци',
    'patuvane-v-chuzhbina' => 'Пътуване в чужбина',
    'digitalna-rentgenoskopia' => 'Дигитална рентгеноскопия',
    'laboratoria' => 'Лаборатория',
    'mikrochipirane' => 'Микрочипиране',
    'hirurgia' => 'Хирургия',
    'saveti-za-otglezhdane' => 'Съвети за отглеждане',
    'podstrigvane' => 'Подстригване',
    'domashno-poseshtenie' => 'Домашно посещение',
    'vtoro-mnenie' => 'Второ мнение'

];

if (!isset($currentPageService)) {
    $currentPageService = '';
}

foreach ($services as $file => $name) {
    if ($file !== $currentPageService) {
        echo '<li><a href="' . $file . '.php">' . $name . '</a></li>';
    }
}
?>
