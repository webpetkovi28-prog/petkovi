<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'saveti-za-otglezhdane';
    // Дефинираме заглавието на страницата
    $pageTitle = "Съвети за отглеждане | Ветеринарен център Петкови";

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
                <h1>Съвети за отглеждане</h1>

                <div class="usluga-content-wrapper">
                    <img src="images/uslugi/saveti-za-otglezhdane.png" alt="Съвети за отглеждане на домашни любимци" class="usluga-image">

                    <div class="usluga-text">
                        <h2>Как да се грижите за вашия домашен любимец</h2>
                        <p>Във Ветеринарен център Петкови знаем колко важна е правилната грижа за вашия домашен любимец. Споделяме с вас полезни съвети, които ще ви помогнат да осигурите на вашите животни безопасна и здравословна среда за живот.</p>

                        <h3>Безопасност на дома за котки</h3>
                        <p>Повечето котки са изключително любопитни. Затова е важно преди да донесете новия си домашен любимец да обезопасите дома си. Ето някои важни съвети:</p>
                        
                        <ul class="service-features-list">
                            <li class="monitoring">Погрижете се да предотвратите падането на котката от всички прозорци</li>
                            <li class="individual-plan">Премахнете всички отровни домашни растения</li>
                            <li class="diagnostic">Приберете на недостъпно място всички химични препарати</li>
                            <li class="reaction">Убедете се, че конци, ластици и еластични нишки са недостъпни за котката</li>
                            <li class="feeding">Никога не оставяйте малки предмети, които котката би могла да погълне</li>
                            <li class="reports">Осигурете безопасни места за катерене и почивка</li>
                        </ul>

                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-exclamation-triangle"></i> Внимание с химикалите</h4>
                                <p>Ако котката Ви е стъпала в препарат и след това си е близала лапите, незабавно потърсете ветеринарен лекар.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-pills"></i> Лекарства за хора</h4>
                                <p>Много често стопаните несъзнателно отравят домашните си любимци, давайки им лекарства предназначени за хора, например парацетамол.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-spray-can"></i> Инсектициди</h4>
                                <p>Никога не прилагайте инсектициди за кучета върху котки. Това може да бъде фатално за тях.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-skull-crossbones"></i> Отрови за гризачи</h4>
                                <p>Изяждането на гризачи, убити от отровни примамки, също би могло да е фатално за котките.</p>
                            </div>
                        </div>

                        <h3>Козина и поддръжка</h3>
                        <p>Котките старателно почистват козината си. Това е важна част от тяхното поведение, но може да крие и рискове:</p>
                        
                        <div class="timeline">
                            <div class="timeline-item timeline-checkup" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Ежедневна поддръжка</strong> - редовното разресване не само поддържа козината, но и създава връзка между вас и вашия домашен любимец.
                                </div>
                            </div>
                            <div class="timeline-item timeline-diagnostic" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Внимание с химикалите</strong> - ако върху козината на котката са попаднали токсични химични вещества, животните могат да изгорят езика си при почистване.
                                </div>
                            </div>
                            <div class="timeline-item timeline-monitoring" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Безопасни продукти</strong> - никога не използвайте вещества върху котката, ако не сте сигурни, че са безвредни за нея.
                                </div>
                            </div>
                            <div class="timeline-item timeline-surgery" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Парфюми и козметика</strong> - дори безопасни за хората вещества могат да бъдат отровни за котките (парфюми, бои, шампоани и др.).
                                </div>
                            </div>
                            <div class="timeline-item timeline-docs" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>При всяко съмнение</strong> - консултирайте се с ветеринар преди да използвате нови продукти върху домашния си любимец.
                                </div>
                            </div>
                        </div>

                        <h3>Съвети за хранене</h3>
                        <p>Правилното хранене е ключов елемент от здравето на вашия домашен любимец:</p>
                        <ul class="service-features-list">
                            <li class="feeding">Осигурете балансирана диета според възрастта и размера</li>
                            <li class="monitoring">Поддържайте редовен хранителен режим</li>
                            <li class="diagnostic">Осигурете постоянен достъп до прясна вода</li>
                            <li class="individual-plan">Избягвайте да давате храна от масата за хора</li>
                            <li class="reaction">Следете за реакции към нови храни</li>
                            <li class="reports">Консултирайте се с ветеринар за специални диетични нужди</li>
                        </ul>

                        <h3>Ежедневна активност</h3>
                        <p>Физическата активност и умствената стимулация са важни за поддържането на здрава и щастлива котка:</p>
                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-cat"></i> Игри и забавление</h4>
                                <p>Осигурете разнообразни играчки и отделете време за игра с вашата котка всеки ден.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-tree"></i> Катерушки</h4>
                                <p>Котките обичат да се катерят - предоставете им безопасни възможности като котешки дървета или рафтове.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-puzzle-piece"></i> Умствена стимулация</h4>
                                <p>Използвайте игри-пъзели за хранене или скрийте лакомства, за да стимулирате естественото ловно поведение.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-home"></i> Лично пространство</h4>
                                <p>Осигурете спокойно място, където котката може да се оттегли, когато се чувства стресирана или уморена.</p>
                            </div>
                        </div>

                        <div class="service-cta">
                            <h3>Имате въпроси относно грижите за вашия домашен любимец?</h3>
                            <p>Нашият екип от ветеринарни специалисти е готов да ви посъветва по всички въпроси, свързани с отглеждането на вашите домашни любимци.</p>
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