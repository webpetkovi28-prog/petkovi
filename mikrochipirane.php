<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'mikrochipirane';
    // Дефинираме заглавието на страницата
    $pageTitle = "Микрочипиране | Ветеринарен център Петкови";

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
                <h1>Микрочипиране</h1>

                <div class="usluga-content-wrapper">
                    <img src="images/uslugi/mikrochipirane.png" alt="Микрочипиране на домашни любимци" class="usluga-image">

                    <div class="usluga-text">
                        <h2>Какво представлява микрочипът?</h2>
                        <p>Микрочипът представлява високотехнологична система, съдържаща миниатюрен чип, програмиран с уникален идентификационен номер. Той е с размери, малко по-големи от тези на оризово зърно. Имплантира се чрез подкожна инжекция в областта на шията от лявата страна.</p>
                        
                        <p>Микрочипът запазва местоположението си в тялото на животното до края на живота му и не може да бъде изгубен или уникалният му код променен. Специален четец прочита информацията съдържаща се в него. Сканирането се извършва като четецът докосва кожата на животното.</p>

                        <p>Преди поставянето на микрочипа трябва да се провери дали животното има вече такъв. Не трябва да се допуска поставянето на втори. Задължително е след имплантирането на микрочипа да се провери дали той е на мястото си.</p>

                        <p>Във Ветеринарен център Петкови може да поставите микрочип на Вашия домашен любимец и едновременно с това, при нужда, да бъде издаден международен паспорт и сертификат за пътуване в чужбина.</p>

                        <p class="mobile-list-intro">Ползите от имплантирането на микрочип:</p>
                       <ul class="service-features-list">
                            <li class="microchip">Ако Вашето куче се изгуби, чрез чипа то може да Ви бъде върнато</li>
                            <li class="reaction">Помагате за разрешаването на проблема с бездомните кучета</li>
                            <li class="passport">Може да пътувате с Вашият любимец свободно в Европа</li>
                            <li class="reports">Спазвате закона и сте изряден собственик на куче пред Контролните органи</li>
                       </ul>

                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-shield-alt"></i> Сигурност</h4>
                                <p>Микрочипът е трайно средство за идентификация, което не може да бъде загубено или подправено.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-fingerprint"></i> Уникална идентификация</h4>
                                <p>Всеки чип има уникален номер, който се регистрира в национална база данни.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-passport"></i> Пътуване</h4>
                                <p>Наличието на микрочип е задължително за пътуване извън страната с Вашия домашен любимец.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-paw"></i> Отговорна грижа</h4>
                                <p>Показва, че сте отговорен собственик и се грижите за безопасността на Вашия домашен любимец.</p>
                            </div>
                        </div>

                        <h3>Процесът на микрочипиране</h3>
                        <div class="timeline">
                            <div class="timeline-item timeline-checkup" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Първоначален преглед</strong> - проверка дали животното няма вече поставен микрочип.
                                </div>
                            </div>
                            <div class="timeline-item timeline-microchip" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Имплантиране</strong> - бързо и безболезнено поставяне чрез специален инжектор в областта на шията.
                                </div>
                            </div>
                            <div class="timeline-item timeline-docs" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Проверка</strong> - сканиране с четец за потвърждаване на правилното позициониране и функциониране на чипа.
                                </div>
                            </div>
                            <div class="timeline-item timeline-passport" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Регистрация</strong> - вписване на номера на чипа в паспорта на животното и в националната база данни.
                                </div>
                            </div>
                            <div class="timeline-item timeline-certs" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Документация</strong> - издаване на необходимите документи и сертификати при нужда от пътуване.
                                </div>
                            </div>
                        </div>

                        <p>Микрочипирането е бърза и безболезнена процедура, която може да спаси живота на Вашия любимец. Посетете нашия център за професионално и сигурно микрочипиране, изпълнено от опитни ветеринарни лекари.</p>

                        <div class="service-cta">
                            <h3>Нуждаете се от микрочипиране на Вашия домашен любимец?</h3>
                            <p>Не отлагайте - микрочипирането е важно както за безопасността на животното, така и за спазването на закона.</p>
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