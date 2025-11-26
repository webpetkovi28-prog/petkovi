<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'digitalna-rentgenoskopia';
    // Дефинираме заглавието на страницата
    $pageTitle = "Дигитална рентгеноскопия | Ветеринарен център Петкови";

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

    /* Стилове за галерията с изображения */
    .diagnostics-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 15px;
        margin: 30px 0;
    }

    .diagnostics-gallery-item {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .diagnostics-gallery-item:hover {
        transform: translateY(-5px);
    }

    .diagnostics-gallery-item img {
        width: 100%;
        height: auto;
        display: block;
    }
</style>
<main class="usluga-page-content">
    <div class="container">
        <div class="mobile-services-menu">
            <h3>Нашите Услуги</h3>
            <select id="mobileServiceSelect" onchange="goToSelectedService()">
                <option value="">Изберете друга услуга...</option>
                 <?php
                    // Включваме файла, който генерира опциите за мобилното меню
                    include 'template-parts/mobile-services-menu.php';
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
                <h1>Дигитална рентгеноскопия</h1>

                <div class="usluga-content-wrapper">
                    <!-- Заглавие над снимката (видимо само на десктоп) -->
                    <div class="usluga-title-top">
                        <h2>Съвременна образна диагностика за точни резултати</h2>
                    </div>

                    <img src="images/uslugi/digitalna-rentgenoskopia.png" alt="Дигитална рентгеноскопия за домашни любимци" class="usluga-image">

                    <div class="usluga-text">
                        <!-- Заглавие видимо само на мобилни устройства -->
                        <div class="usluga-mobile-title">
                            <h2>Съвременна образна диагностика за точни резултати</h2>
                        </div>

                        <p>Във Ветеринарен център „Петкови" разполагаме със съвременно оборудване за образна диагностика, включително дигитален рентген, рентгеноскопичен апарат и ехограф. Нашите специализирани технологии позволяват точна и детайлна диагностика на различни състояния при вашите любимци. Дигиталната рентгенография със специализиран ветеринарен софтуер осигурява високо качество на изображенията и по-добра диагностична стойност. За удобство на клиентите предоставяме опция за запис на резултатите на CD или изпращане по имейл. </p>

                        <h3>Видове рентгенови изследвания</h3>

                        <p class="mobile-list-intro">В нашия център можете да се възползвате от:</p>
                       <ul class="service-features-list">
                            <li class="monitoring">Дигитална рентгенография с висока резолюция на всички видове животни</li>
                            <li class="diagnostic">Функционални изследвания с контрастно вещество в реално време</li>
                            <li class="reaction">Специализирани гастроскопии и изследвания на храносмилателната система</li>
                            <li class="individual-plan">Иригоскопия, иригография и други контрастни изследвания</li>
                            <li class="reports">Стандартна рентгенография за различни размери пациенти</li>
                            <li class="feeding">Урографии и други специализирани процедури</li>
                       </ul>

                        <h3>Предимства на съвременната образна диагностика</h3>
                        <p>Във Ветеринарен център „Петкови" разполагаме с технологии, които осигуряват редица предимства:</p>

                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-radiation-alt"></i> Минимално облъчване</h4>
                                <p>Дигиталната технология позволява получаване на високо качество на изображението с минимална доза радиация.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-search-plus"></i> Висока детайлност</h4>
                                <p>Моментална обработка на изображенията с възможност за увеличение, контрастиране и оптимизиране за по-добра диагностика.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-clock"></i> Бързи резултати</h4>
                                <p>Незабавно получаване на резултати без необходимост от проявяване на филми и дълго чакане.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-share-alt"></i> Дигитален достъп</h4>
                                <p>Възможност за изпращане на изображенията по имейл или записване на CD за консултация с други специалисти.</p>
                            </div>
                        </div>

                        <h3>Специализирани контрастни изследвания</h3>
                        <p>Нашият център предлага пълен набор от контрастни изследвания за още по-прецизна диагностика:</p>

                        <ul class="service-features-list">
                            <li class="monitoring">Контрастни изображения (цветни снимки) за по-детайлен анализ</li>
                            <li class="feeding">Функционални изследвания на стомашно-чревния тракт</li>
                            <li class="diagnostic">Гастроскопии за детайлна визуализация на храносмилателната система</li>
                            <li class="reports">Урографии за оценка на уринарната система</li>
                            <li class="reaction">Иригографии за изследване на дебелото черво</li>
                        </ul>

                        <h3>Процес на рентгеновото изследване</h3>
                        <div class="timeline">
                            <div class="timeline-item timeline-checkup" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Консултация и подготовка</strong> - в зависимост от изследването може да се наложи определен режим на хранене или прием на контрастно вещество.
                                </div>
                            </div>
                            <div class="timeline-item timeline-diagnostic" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Позициониране и настройка</strong> - внимателно позициониране на животното за получаване на оптимално изображение на изследваната област.
                                </div>
                            </div>
                            <div class="timeline-item timeline-surgery" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Заснемане</strong> - бързо и безболезнено заснемане на рентгеновите изображения с минимален стрес за пациента.
                                </div>
                            </div>
                            <div class="timeline-item timeline-docs" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Анализ и интерпретация</strong> - незабавен преглед и оценка на изображенията от нашите ветеринарни специалисти.
                                </div>
                            </div>
                            <div class="timeline-item timeline-certs" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Предоставяне на резултати</strong> - обсъждане на находките с клиента и предоставяне на дигитално копие при поискване (CD или имейл).
                                </div>
                            </div>
                        </div>

                        <div class="service-cta">
                            <h3>Нуждаете се от прецизна диагностика за вашия любимец?</h3>
                            <p>Свържете се с нас за да запазите час или за допълнителна информация относно наличните диагностични процедури.</p>
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
