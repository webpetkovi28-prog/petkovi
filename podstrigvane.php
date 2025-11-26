<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'podstrigvane';
    // Дефинираме заглавието на страницата
    $pageTitle = "Подстригване | Ветеринарен център Петкови";

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
                <h1>Подстригване</h1>

                <div class="usluga-content-wrapper">
                    <img src="images/uslugi/podstrigvane.png" alt="Подстригване на домашни любимци" class="usluga-image">

                    <div class="usluga-text">
                        <h2>Професионално подстригване за вашия любимец</h2>
                        <p>Ветеринарен център Петкови предлага професионално подстригване на кучета и котки. Нашите опитни фризьори могат да преобразят външния вид на вашия домашен любимец, като се грижат за неговото удобство и благополучие по време на процедурата.</p>

                        <h3>Защо да подстрижете вашия любимец?</h3>
                        <p class="mobile-list-intro">Вашият домашен любимец може да бъде подстриган поради:</p>
                        <ul class="service-features-list">
                            <li class="monitoring">Естетически причини - за да изглежда по-добре и по-поддържано</li>
                            <li class="diagnostic">Медицински причини - за предотвратяване на кожни проблеми и паразити</li>
                            <li class="reaction">Хигиенни съображения - особено за дългокосмести породи</li>
                            <li class="individual-plan">Комфорт при топло време - за предотвратяване на прегряване</li>
                            <li class="reports">По-лесна поддръжка на козината в домашни условия</li>
                        </ul>

                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-cut"></i> Разнообразие от прически</h4>
                                <p>Възможност за избор между стандартни породни прически или уникални стилове според вашите предпочитания.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-paint-brush"></i> Козметични услуги</h4>
                                <p>Оцветяване на козината с безвредни бои в различни цветове и форми, украсяване с панделки и фибички.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-broom"></i> Разресване на сплъстена козина</h4>
                                <p>Ако не желаете подстригване, предлагаме внимателно разресване и оформяне на сплъстената козина.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-shield-virus"></i> Висока хигиена</h4>
                                <p>Всички фризьорски инструменти се почистват с антибактериален и антигъбичен препарат след всяка употреба.</p>
                            </div>
                        </div>

                        <h3>Процес на подстригване</h3>
                        <div class="timeline">
                            <div class="timeline-item timeline-checkup" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Предварителна консултация</strong> - обсъждане на желания резултат и преглед на козината на вашия любимец.
                                </div>
                            </div>
                            <div class="timeline-item timeline-diagnostic" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Къпане и подсушаване</strong> - използване на специални шампоани според типа козина и нуждите на животното.
                                </div>
                            </div>
                            <div class="timeline-item timeline-surgery" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Подстригване</strong> - професионално оформяне на козината според избрания стил и порода.
                                </div>
                            </div>
                            <div class="timeline-item timeline-monitoring" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Финално оформяне</strong> - прецизна работа по детайлите и козметични услуги (ако са заявени).
                                </div>
                            </div>
                            <div class="timeline-item timeline-reports" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Преглед на резултата</strong> - представяне на крайния резултат и препоръки за поддръжка у дома.
                                </div>
                            </div>
                        </div>

                        <h3>Важна информация</h3>
                        <p>За да подстрижем Вашето животно, е необходимо:</p>
                        <ul class="service-features-list">
                            <li class="reports">Да запишете предварително час на телефон: 052/ 333 – 379 или 0888 95 13 87</li>
                            <li class="monitoring">Домашният любимец да бъде обезпаразитен външно преди посещението</li>
                            <li class="feeding">Предвидете около два часа за цялостната процедура</li>
                            <li class="reaction">По желание на стопаните, любимецът може да бъде упоен по време на подстригването</li>
                            <li class="individual-plan">Цените зависят от големината на животното и състоянието на козината</li>
                        </ul>

                        <div class="service-cta">
                            <h3>Желаете да запишете час за подстригване?</h3>
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