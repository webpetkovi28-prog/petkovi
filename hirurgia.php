<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'hirurgia';
    // Дефинираме заглавието на страницата
    $pageTitle = "Хирургия | Ветеринарен център Петкови";

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
                <h1>Хирургия</h1>

                <div class="usluga-content-wrapper">
                    <img src="images/uslugi/hirurgia.jpg" alt="Хирургия във Ветеринарен център Петкови" class="usluga-image">

                    <div class="usluga-text">
                        <h2>Професионални хирургични интервенции</h2>
                        <p>Ветеринарен център Петкови разполага с две богато оборудвани хирургични зали. В тях се извършват планови операции и операции по спешност. При нас могат да бъдат извършени и безкръвни операции с най-съвременни методи и оборудване.</p>

                        <h3>Подготовка преди операция</h3>
                        <p>Преди операцията се извършва пълен преглед на пациента и се препоръчва извършването на изследвания (кръвна картина, изследване на урина, изследване на кръвна захар, рентгенография и др.) чрез които да се придобие по-пълна представа за състоянието на животното и да се намали до минимум риска при упояването.</p>
                        
                        <p class="mobile-list-intro">Важна информация преди операцията:</p>
                        <ul class="service-features-list">
                            <li class="monitoring">Не трябва да храните домашния си любимец след 18:00ч в деня преди операцията</li>
                            <li class="feeding">Домашният Ви любимец не трябва да има достъп до вода в деня на операцията</li>
                            <li class="reaction">Ако домашният Ви любимец страда от заболявания, трябва да информирате ветеринарния лекар</li>
                            <li class="individual-plan">Ако Вашият домашен любимец приема лекарства, е необходимо да информирате ветеринарния лекар преди операцията</li>
                            <li class="reports">Преди операция стопаните попълват задължително документ представляващ съгласие за операция (анестезия)</li>
                        </ul>

                        <h3>Видове анестезия</h3>
                        <p>Във Ветеринарен център Петкови предлагаме два типа анестезия, като изборът се определя от вида на интервенцията и здравословното състояние на пациента:</p>
                        
                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-lungs"></i> Инхалационна анестезия</h4>
                                <p>Специална техника с анестетични газове за поддържане на дълбочината на анестезията през цялата продължителност на операцията.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-syringe"></i> Инжективна анестезия</h4>
                                <p>Прилагане на анестетични средства чрез инжекция, подходяща за по-кратки процедури и при определени показания.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-hospital"></i> Постоперативно наблюдение</h4>
                                <p>В деня на операцията пациентът остава под лекарско наблюдение до своето събуждане от анестезията, като този престой е безплатен.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-user-md"></i> Опитен екип</h4>
                                <p>Квалифицирани ветеринарни хирурзи с богат клиничен опит осигуряват прецизни хирургични интервенции.</p>
                            </div>
                        </div>

                        <h3>Следоперативни грижи</h3>
                        <p>В зависимост от вида на операцията се изискват различни грижи от стопанина. Всички по-специални необходими грижи ще Ви бъдат обяснени при изписването на животното.</p>
                        
                        <div class="timeline">
                            <div class="timeline-item timeline-checkup" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Следене на хирургичната рана</strong> - проверявайте редовно за признаци на зачервяване, подуване или секреция.
                                </div>
                            </div>
                            <div class="timeline-item timeline-monitoring" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Наблюдение на поведението</strong> - следете дали домашният любимец ближе, дърпа, хапе или чеше конците.
                                </div>
                            </div>
                            <div class="timeline-item timeline-feeding" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Хранене и хидратация</strong> - следвайте инструкциите за хранене и достъп до вода след операцията.
                                </div>
                            </div>
                            <div class="timeline-item timeline-isolation" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Използване на защитна яка</strong> - може да се наложи да използвате специална яка или дрешка за предотвратяване на достъп до раната.
                                </div>
                            </div>
                            <div class="timeline-item timeline-checkup" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Сваляне на конците</strong> - конците се свалят около 12-14 ден след операцията при контролен преглед.
                                </div>
                            </div>
                        </div>

                        <p>Ако имате каквито и да било притеснения за състоянието на вашия домашен любимец след операцията, незабавно се свържете с Вашия ветеринарен лекар.</p>

                        <div class="service-cta">
                            <h3>Нуждаете се от консултация или планиране на операция?</h3>
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