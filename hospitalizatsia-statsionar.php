<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'hospitalizatsia-statsionar';
    // Дефинираме заглавието на страницата
    $pageTitle = "Хоспитализация и стационар | Ветеринарен център Петкови";

    include 'header.php'; // Включваме хедъра
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/uslugi.css">
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
                <h1>Хоспитализация стационар</h1>

                <div class="usluga-content-wrapper">
                    <img src="images/uslugi/hospitalizatsia-statsionar.jpg" alt="Хоспитализация стационар" class="usluga-image">

                    <div class="usluga-text">
                        <h2>Денонощна грижа за вашите любимци</h2>
                        <p>В нашия ветеринарен център разбираме, че понякога състоянието на вашия домашен любимец изисква постоянно наблюдение и специализирана грижа, която не може да бъде осигурена в домашни условия. Стационарното ни отделение е оборудвано със съвременна апаратура и предлага комфортна, безопасна среда за възстановяване.</p>

                        <p class="mobile-list-intro">Нашата хоспитализация включва:</p>
                       <ul class="service-features-list">
    <li class="individual-plan">Индивидуални планове за лечение според нуждите на вашия любимец</li>
    <li class="feeding">Контролирано хранене и медикаментозна терапия</li>
    <li class="reaction">Незабавна реакция при промяна в състоянието</li>
    <li class="reports">Редовни доклади за собствениците за напредъка по лечението</li>
    <li class="monitoring">Постоянен мониторинг</li>
    <li class="monitoring">Ежечасно наблюдение на жизнените показатели и общото състояние на вашия любимец от професионален екип.</li>
</ul>

                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-eye"></i> Постоянен мониторинг</h4>
                                <p>Ежечасно наблюдение на жизнените показатели и общото състояние на вашия любимец от професионален екип.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-home"></i> Комфортни условия</h4>
                                <p>Индивидуални клетки с контролирана температура и меки постелки за максимален комфорт при възстановяването.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-pills"></i> Медикаментозна терапия</h4>
                                <p>Прецизно прилагане на предписаните лекарства в точно определените часове за оптимален терапевтичен ефект.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-user-md"></i> Ветеринарни грижи</h4>
                                <p>Екипът ни от опитни ветеринарни лекари е на разположение 24/7 при спешни ситуации.</p>
                            </div>
                        </div>

                        <h3>Кога е необходима хоспитализация?</h3>
                        <div class="timeline">
                            <div class="timeline-item timeline-surgery" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>След хирургични интервенции</strong> - осигуряваме професионални следоперативни грижи и контрол на болката.
                                </div>
                            </div>
                            <div class="timeline-item timeline-trauma" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>При тежки травми или заболявания</strong> - интензивна терапия за критични състояния с непрекъснато наблюдение.
                                </div>
                            </div>
                            <div class="timeline-item timeline-infusion" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>За пациенти с нужда от инфузионна терапия</strong> - контролирано прилагане на венозни вливания и електролитни разтвори.
                                </div>
                            </div>
                            <div class="timeline-item timeline-isolation" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>При необходимост от изолация</strong> - специални помещения за пациенти със заразни заболявания, предпазващи другите животни.
                                </div>
                            </div>
                            <div class="timeline-item timeline-diagnostic" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>За диагностични процедури</strong> - комплексни изследвания, изискващи продължително наблюдение и многократно вземане на проби.
                                </div>
                            </div>
                        </div>

                        <p>Нашият екип ще ви държи в течение за състоянието на вашия любимец и ще отговори на всичките ви въпроси. Доверете ни се за професионална и състрадателна грижа по време на възстановяването на вашия член от семейството.</p>

                        <div class="service-cta">
                            <h3>Имате въпроси относно нашия стационар?</h3>
                            <a href="kontakti.php" class="btn-white">Свържете се с нас</a>
                        </div>
                    </div>
                </div>
            </article>

        </div> </div> </main> <script>
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