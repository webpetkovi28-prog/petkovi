<?php
// Генерираме опциите за мобилното меню
// ТРЯБВА ДА СЪВПАДА С МАСИВА В uslugi-sidebar-menu.php
$_temp_services_for_select = [
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

// Добавяме ценоразпис, ако е нужно
if (isset($includePriceList) && $includePriceList) {
    $_temp_services_for_select['tsenorazpis'] = 'Ценоразпис';
}

// Проверяваме дали е дефинирана променливата $currentPageService
if (!isset($currentPageService)) {
    $currentPageService = '';
}

foreach ($_temp_services_for_select as $file => $name) {
    // Маркираме текущата страница като избрана (selected)
    $selected_attr = ($file === $currentPageService) ? ' selected' : '';
    // Добавяме disabled, за да не може да се избере пак текущата
    $disabled_attr = ($file === $currentPageService) ? ' disabled' : '';
    // Ако искате да НЕ се показва текущата страница в select-а, сложете if тук:
    // if ($file !== $currentPageService) {
        echo '<option value="' . $file . '.php"' . $selected_attr . $disabled_attr . '>' . $name . '</option>';
    // }
}
// Важно: Премахваме временната променлива, за да не пречи на include-а долу
unset($_temp_services_for_select);
?>
