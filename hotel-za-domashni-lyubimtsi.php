<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'hotel-za-domashni-lyubimtsi';
    // Дефинираме заглавието на страницата
    $pageTitle = "Хотел за домашни любимци | Ветеринарен център Петкови";

    include 'header.php'; // Включваме хедъра
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
                <h1>Хотел за домашни любимци</h1>

                <div class="usluga-content-wrapper">
                    <img src="images/uslugi/hotel-za-domashni-lyubimtsi.jpg" alt="Хотел за домашни любимци" class="usluga-image">

                    <div class="usluga-text">
                        <h2>Професионални грижи за Вашия любимец</h2>
                        <p>Случвало ли Ви се е да няма на кого да си оставите домашния любимец? Ветеринарен център "Петкови" разполага със зоохотел и стационар за Вашите домашни любимци. Нашите специалисти създават условия близки до домашната среда, за да не се чувстват вашите любимци изолирани.</p>

                        <p class="mobile-list-intro">Нашият хотел за домашни любимци предлага:</p>
                       <ul class="service-features-list">
                            <li class="feeding">Редовно хранене с обичайната храна на вашия любимец</li>
                            <li class="individual-plan">Индивидуален подход към всяко животно</li>
                            <li class="reports">Възможност за посещения и получаване на информация по телефона</li>
                            <li class="reaction">Незабавна реакция при промяна в състоянието на вашия любимец</li>
                       </ul>

                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-home"></i> Комфортни условия</h4>
                                <p>Индивидуални боксове с различни размери, снабдени с вентилация, климатизация, канализация и видеонаблюдение.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-shield-virus"></i> Хигиенна среда</h4>
                                <p>Ежедневна дезинфекция на помещенията за максимална сигурност и чистота.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-cut"></i> Допълнителни услуги</h4>
                                <p>Възможност за къпане, подстригване и сресване на вашия домашен любимец по време на престоя.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-clock"></i> Гъвкаво работно време</h4>
                                <p>Можете да оставите и вземете вашия любимец между 08:00 и 20:00 часа всеки ден от седмицата.</p>
                            </div>
                        </div>

                        <h3>Какво трябва да знаете за нашия хотел</h3>
                        <div class="timeline">
                            <div class="timeline-item timeline-passport" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Изисквания при настаняване</strong> - животните трябва да имат паспорт и да са ваксинирани и обезпаразитени за вътрешни и външни паразити.
                                </div>
                            </div>
                            <div class="timeline-item timeline-hotel" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Условия на престоя</strong> - животните са обгрижвани, разхождани и хранени от медицински персонал по техния обичаен график.
                                </div>
                            </div>
                            <div class="timeline-item timeline-microchip" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Цена и услуги</strong> - цената на престоя е 30лв/дата, като в нея не се включва храната. Тя може да бъде донесена от стопаните или закупена от зоомагазина на клиниката.
                                </div>
                            </div>
                            <div class="timeline-item timeline-docs" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Посещения</strong> - собствениците на животните или упълномощени от тях хора могат да ги посещават в удобно за тях време.
                                </div>
                            </div>
                            <div class="timeline-item timeline-vaccine" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Медицински грижи</strong> - по време на престоя животните са под наблюдението на ветеринарни специалисти, което осигурява допълнително спокойствие.
                                </div>
                            </div>
                        </div>

                        <p>Доверете ни се за професионална грижа за вашия домашен любимец, докато отсъствате. Ще намерите нашия хотел за домашни любимци в гр. Варна, кв. Левски, ул. "Никола Козлев" 5.</p>

                        <div class="service-cta">
                            <h3>Планирате пътуване и имате нужда от грижи за вашия любимец?</h3>
                            <p>Свържете се с нас на телефон 052 333 379 или 0888 951 387 за резервация.</p>
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