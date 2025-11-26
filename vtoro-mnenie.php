<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'vtoro-mnenie';
    // Дефинираме заглавието на страницата
    $pageTitle = "Второ мнение | Ветеринарен център Петкови";

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
                <h1>Второ мнение</h1>

                <div class="usluga-content-wrapper">
                    <!-- Заглавие над снимката (видимо само на десктоп) -->
                    <div class="usluga-title-top">
                        <h2>Професионална консултация за спокойствие на стопаните</h2>
                    </div>
                    
                    <img src="images/uslugi/vtoro-mnenie.png" alt="Консултация за второ мнение" class="usluga-image">

                    <div class="usluga-text">
                        <!-- Заглавие видимо само на мобилни устройства -->
                        <div class="usluga-mobile-title">
                            <h2>Професионална консултация за спокойствие на стопаните</h2>
                        </div>
                        
                        <p>Понякога стопаните се нуждаят от второ мнение, за да вземат окончателно решение за лечението на своя домашен любимец. Всеки стопанин има право да потърси второ мнение. Във Ветеринарен център Петкови можете да проведете консултация за второ мнение, която да Ви даде допълнителна перспектива за състоянието на Вашия домашен любимец.</p>
                        
                        <p>Ако сте решили да проведете такава консултация е добре да носите пълен комплект с документи – диагностични изследвания, проведено лечение, паспорт и др. Това ще ни помогне да направим по-точна оценка на ситуацията и да предложим най-добрите възможни опции.</p>

                        <p class="mobile-list-intro">Важна информация за консултацията:</p>
                       <ul class="service-features-list">
                            <li class="reports">Носете пълен комплект документи от досегашните прегледи</li>
                            <li class="individual-plan">Очаквайте обективна професионална оценка от нашия екип</li>
                            <li class="reaction">Възможност за нов поглед върху лечението</li>
                            <li class="monitoring">Професионален и етичен подход към всеки случай</li>
                       </ul>

                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-clipboard-check"></i> Обективна оценка</h4>
                                <p>Ние предоставяме професионална и безпристрастна оценка на състоянието на вашия домашен любимец.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-file-medical"></i> Преглед на документация</h4>
                                <p>Детайлен анализ на всички налични медицински документи, изследвания и назначено лечение.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-lightbulb"></i> Алтернативни подходи</h4>
                                <p>При необходимост предлагаме алтернативни методи на лечение или допълнителна диагностика.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-handshake"></i> Професионална етика</h4>
                                <p>Спазваме високи етични стандарти и професионално отношение към колегите от бранша.</p>
                            </div>
                        </div>

                        <h3>Нашият професионален ангажимент</h3>
                        <p>Молим своите клиенти да не ни запознават с мнението си за един или друг колега ветеринарен лекар. Готови сме да Ви помогнем, но не толерираме нападки към работата на който и да е ветеринарен лекар. Ветеринарен център Петкови си запазва правото да откаже второ мнение на злословещи стопани и на такива целящи злепоставянето на колеги.</p>

                        <div class="timeline">
                            <div class="timeline-item timeline-docs" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Запознаване с документацията</strong> - преглеждаме внимателно всички предоставени медицински документи.
                                </div>
                            </div>
                            <div class="timeline-item timeline-checkup" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Клиничен преглед</strong> - извършваме нов преглед на пациента, за да оценим моментното състояние.
                                </div>
                            </div>
                            <div class="timeline-item timeline-diagnostic" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Консултация</strong> - обсъждаме текущото състояние и досегашното лечение.
                                </div>
                            </div>
                            <div class="timeline-item timeline-surgery" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Препоръки</strong> - предоставяме нашите препоръки за бъдещи стъпки в лечението.
                                </div>
                            </div>
                            <div class="timeline-item timeline-certs" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Писмено заключение</strong> - при поискване предоставяме писмено заключение с нашето професионално мнение.
                                </div>
                            </div>
                        </div>

                        <div class="service-cta">
                            <h3>Нуждаете се от второ мнение за Вашия домашен любимец?</h3>
                            <p>Запазете час за консултация и донесете цялата налична медицинска документация.</p>
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