<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'domashno-poseshtenie';
    // Дефинираме заглавието на страницата
    $pageTitle = "Домашно посещение | Ветеринарен център Петкови";

    include 'header.php'; // Включваме хедъра
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/uslugi.css">
<style>
    /* Стил за заглавието над снимката (само за десктоп) */
    @media (min-width: 769px) {
        .usluga-title-top {
            display: block;
            width: 100%;
            margin-bottom: 25px;
        }
        .usluga-title-top h2 {
            color: var(--dark-blue);
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 8px;
            font-size: 1.5rem;
            margin-top: 0;
        }
        .usluga-title-top h2:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--secondary-color);
            border-radius: 3px;
        }
        /* Скриваме мобилното заглавие на десктоп */
        .usluga-mobile-title {
            display: none;
        }
    }
    
    /* За мобилен изглед */
    @media (max-width: 768px) {
        .usluga-title-top {
            display: none;
        }
        .usluga-mobile-title {
            display: block;
        }
    }
</style>
<main class="usluga-page-content">
    <div class="container">
        <div class="mobile-services-menu">
            <h3>Нашите Услуги</h3>
            <select id="mobileServiceSelect" onchange="goToSelectedService()">
                <option value="">Изберете друга услуга...</option>
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
                        'animaloterapia' => 'Анималотерапия',
                        'domashno-poseshtenie' => 'Домашно посещение',
                        'vtoro-mnenie' => 'Второ мнение'
                    ];

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
            </select>
            </div>

        <div class="usluga-layout-grid">
             <aside class="usluga-sidebar">
                <h3>Нашите Услуги</h3>
                <nav>
                    <ul class="usluga-sidebar-menu">
                        <?php
                        // Включваме файла, който генерира li елементите за менюто
                        // Той ще използва $currentPageService, дефиниран в началото на този файл
                        include 'template-parts/uslugi-sidebar-menu.php';
                        ?>
                    </ul>
                </nav>
            </aside>

            <article class="usluga-main-content">
                <h1>Домашно посещение</h1>

                <div class="usluga-content-wrapper">
                    <!-- Заглавие над снимката (видимо само на десктоп) -->
                    <div class="usluga-title-top">
                        <h2>Ветеринарна помощ в домашна среда</h2>
                    </div>
                    
                    <img src="images/uslugi/domashno-poseshtenie.png" alt="Домашно посещение на ветеринарен лекар" class="usluga-image">

                    <div class="usluga-text">
                        <!-- Заглавие видимо само на мобилни устройства -->
                        <div class="usluga-mobile-title">
                            <h2>Ветеринарна помощ в домашна среда</h2>
                        </div>
                        
                        <p>Ветеринарен център Петкови може да обслужи Вашите домашни любимци и в дома Ви. Необходимо е предварително записване на час в удобно за Вас и за екипа ни време.</p>
                        
                        <p>Записването можете да направите на телефон 052/ 333 379, 052/ 300 100 или 0888951387. Ние препоръчваме консултиране с нашите специалисти за лечението на домашния Ви любимец с цел изясняване на необходимите принадлежности при домашно посещение и възможността му за извършване в домашна среда.</p>

                        <p class="mobile-list-intro">При домашно посещение можем да извършим:</p>
                       <ul class="service-features-list">
                            <li class="vaccine">Вътрешни и външни обезпаразитявания</li>
                            <li class="microchip">Ваксинации и поставяне на микрочип</li>
                            <li class="monitoring">Прегледи и изпълнение на вече назначено лечение</li>
                            <li class="reaction">Почистване на анална жлеза, отстраняване на осили или кърлежи</li>
                            <li class="individual-plan">Почистване на очи, уши, изрязване на нокти или зъби</li>
                            <li class="reports">Вземане на проби (кръв и/или урина) за изследване</li>
                            <li class="feeding">Оказване на родилна помощ и други манипулации</li>
                       </ul>

                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-home"></i> Комфорт за животното</h4>
                                <p>Предоставяме необходимата медицинска помощ във вече позната и безопасна за вашия любимец среда.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-clock"></i> Спестява време</h4>
                                <p>Не е необходимо да транспортирате вашия любимец до клиниката – нашият специалист идва при вас.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-paw"></i> Намален стрес</h4>
                                <p>Избягва се стресът от пътуването и контакта с други животни в чакалнята на клиниката.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-ambulance"></i> Транспорт при нужда</h4>
                                <p>При необходимост можем да транспортираме пациента до клиниката за по-сложни диагностични процедури.</p>
                            </div>
                        </div>

                        <h3>Процес на домашно посещение</h3>
                        <div class="timeline">
                            <div class="timeline-item timeline-docs" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Запазване на час</strong> - свържете се с нас по телефона за да уговорим удобно за всички време.
                                </div>
                            </div>
                            <div class="timeline-item timeline-diagnostic" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Консултация</strong> - обсъждане на състоянието и необходимите манипулации преди посещението.
                                </div>
                            </div>
                            <div class="timeline-item timeline-checkup" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Посещение в дома</strong> - нашият специалист идва на уговорения адрес в определеното време.
                                </div>
                            </div>
                            <div class="timeline-item timeline-surgery" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Манипулации</strong> - извършваме необходимите процедури и предоставяме лечение.
                                </div>
                            </div>
                            <div class="timeline-item timeline-certs" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Проследяване</strong> - даваме инструкции за последващите грижи и при нужда организираме контролен преглед.
                                </div>
                            </div>
                        </div>

                        <h3>Финансови условия</h3>
                        <p>Цената за домашното посещение е 40 лв като в нея не се включва транспорта и използваните консумативи и медикаменти. При необходимост нашият екип може да транспортира пациента до кабинета с цел извършване на диагностични изследвания или приемане за хоспитализация.</p>

                        <div class="service-cta">
                            <h3>Нуждаете се от ветеринарна помощ в дома?</h3>
                            <p>Свържете се с нас на телефон 052/ 333 379 или 0888951387 за да запазите час за домашно посещение.</p>
                            <a href="kontakti.php" class="btn-white">Свържете се с нас</a>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </div>
</main>

<script>
    // Функция за преход към избраната услуга на мобилни устройства
    function goToSelectedService() {
        const select = document.getElementById('mobileServiceSelect');
        const value = select.value;
        if (value && value !== "") { // Проверка дали е избрана валидна опция
            window.location.href = value;
        }
    }

    // Анимация на таймлайна при скролване
    document.addEventListener('DOMContentLoaded', function() {
        // Проверка за IntersectionObserver
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.classList.contains('animate')) {
                        const order = entry.target.style.getPropertyValue('--animation-order');
                         // Използваме dataset като резервен вариант, ако inline стилът липсва
                        const animationOrder = order || entry.target.dataset.order || 0;
                        entry.target.style.animationDelay = `${animationOrder * 0.1}s`;
                        entry.target.classList.add('animate');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.timeline-item').forEach((item, index) => {
                 // Задаваме data-order атрибут, ако липсва inline стил
                 if (!item.style.getPropertyValue('--animation-order')) {
                    item.dataset.order = index + 1; // Започваме от 1
                 }
                observer.observe(item);
            });
        } else {
             // Fallback за стари браузъри
             document.querySelectorAll('.timeline-item').forEach(item => {
                item.style.opacity = 1;
                item.style.transform = 'translateY(0)';
             });
        }
    });
</script>

<?php include 'footer.php'; // Включваме футъра ?>