<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'laboratoria';
    // Дефинираме заглавието на страницата
    $pageTitle = "Лаборатория | Ветеринарен център Петкови";

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

    /* Специфични стилове за лабораторната страница */
    /* Двуколонен layout за десктоп */
    @media (min-width: 992px) {
        .lab-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin: 30px 0;
        }
        
        .lab-column {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
    }

    /* За таблети и мобилни */
    @media (max-width: 991px) {
        .lab-columns {
            display: flex;
            flex-direction: column;
            gap: 25px;
            margin: 30px 0;
        }
        
        .lab-column {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
    }
    
    .lab-panel {
        background: rgba(240, 245, 255, 0.7);
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        position: relative;
        height: 100%;
    }
    
    .lab-panel h4 {
        color: var(--dark-blue);
        font-size: 1.2rem;
        margin-top: 0;
        margin-bottom: 15px;
        padding-bottom: 10px;
        position: relative;
        display: flex;
        align-items: center;
    }
    
    .lab-panel h4:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(to right, var(--secondary-color), transparent);
    }
    
    .lab-panel h4 i {
        margin-right: 10px;
        color: var(--secondary-color);
        font-size: 1.3em;
    }
    
    .lab-parameters {
        list-style-type: none;
        padding: 0;
        margin: 0;
        columns: 2;
    }
    
    .lab-parameters li {
        margin-bottom: 8px;
        break-inside: avoid;
        padding-left: 20px;
        position: relative;
    }
    
    .lab-parameters li:before {
        content: "\f7e4";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        left: 0;
        color: var(--secondary-color);
    }
    
    .parameter-description {
        font-size: 0.9em;
        color: #666;
        display: block;
    }
    
    .lab-note {
        font-style: italic;
        margin: 20px 0;
        padding: 15px;
        background-color: rgba(255, 251, 235, 0.6);
        border-left: 3px solid var(--secondary-color);
        border-radius: 0 8px 8px 0;
    }
    
    @media (max-width: 768px) {
        .lab-parameters {
            columns: 1;
        }
    }
    
    .param-group {
        margin-bottom: 25px;
    }
    
    .param-group h5 {
        font-weight: 600;
        color: var(--dark-blue);
        margin-bottom: 8px;
    }
    
    .lab-equipment {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 25px;
        align-items: stretch;
    }
    
    .equipment-item {
        flex: 1;
        min-width: 200px;
        background: rgba(240, 245, 255, 0.5);
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }
    
    .equipment-item i {
        font-size: 2em;
        color: var(--dark-blue);
        margin-bottom: 10px;
    }
    
    .equipment-item h4 {
        margin-top: 0;
        margin-bottom: 10px;
        color: var(--dark-blue);
    }
    
    .equipment-item p {
        margin-top: 0;
        font-size: 0.95em;
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
                <h1>Лаборатория</h1>

                <div class="usluga-content-wrapper">
                    <!-- Заглавие над снимката (видимо само на десктоп) -->
                    <div class="usluga-title-top">
                        <h2>Съвременна диагностика за прецизни резултати</h2>
                    </div>
                    
                    <img src="images/uslugi/laboratoria.png" alt="Лаборатория във Ветеринарен център Петкови" class="usluga-image">

                    <div class="usluga-text">
                        <!-- Заглавие видимо само на мобилни устройства -->
                        <div class="usluga-mobile-title">
                            <h2>Съвременна диагностика за прецизни резултати</h2>
                        </div>
                        
                        <p>Ветеринарен център Петкови разполага с богато оборудвана лаборатория с апарати с ветеринарен софтуер. Това ни позволява да извършваме бързи и точни изследвания директно в клиниката, осигурявайки своевременна диагностика и лечение на вашите домашни любимци.</p>
                        
                        <h3>Лабораторно оборудване</h3>
                        <div class="lab-equipment">
                            <div class="equipment-item">
                                <i class="fas fa-vial"></i>
                                <h4>Хематологичен анализатор</h4>
                                <p>Съвременен апарат за бърз и точен анализ на кръвни проби с 19 показателя</p>
                            </div>
                            <div class="equipment-item">
                                <i class="fas fa-flask"></i>
                                <h4>Биохимичен анализатор</h4>
                                <p>Специализирана апаратура за измерване на биохимични показатели в кръвта с 13 параметъра</p>
                            </div>
                            <div class="equipment-item">
                                <i class="fas fa-tint"></i>
                                <h4>Уринен анализатор</h4>
                                <p>Модерно оборудване за комплексен анализ на урина с 13 показателя и седимент</p>
                            </div>
                        </div>
                        
                        <h3>Видове изследвания</h3>
                        
                        <!-- Нова структура с две колони -->
                        <div class="lab-columns">
                            <!-- Първа колона -->
                            <div class="lab-column">
                                <div class="lab-panel">
                                    <h4><i class="fas fa-tint"></i>Изследване на урина</h4>
                                    <p>Центърът разполага с урина анализатор с 13 показателя и седимент:</p>
                                    <ul class="lab-parameters">
                                        <li>UBG <span class="parameter-description">Уробилиноген</span></li>
                                        <li>BIL <span class="parameter-description">Билирубин</span></li>
                                        <li>KET <span class="parameter-description">Кетони</span></li>
                                        <li>CRE <span class="parameter-description">Креатинин</span></li>
                                        <li>BLD <span class="parameter-description">Кръв</span></li>
                                        <li>PRO <span class="parameter-description">Протеин</span></li>
                                        <li>ALB <span class="parameter-description">Микроалбумин</span></li>
                                        <li>NIT <span class="parameter-description">Нитрити</span></li>
                                        <li>LEU <span class="parameter-description">Левкоцити</span></li>
                                        <li>GLU <span class="parameter-description">Глюкоза</span></li>
                                        <li>SG <span class="parameter-description">Специфично тегло</span></li>
                                        <li>PH <span class="parameter-description">Водороден показател</span></li>
                                        <li>VC <span class="parameter-description">Аскорбинова киселина</span></li>
                                        <li>A:C <span class="parameter-description">Корелация на албумин креатинин</span></li>
                                    </ul>
                                </div>
                                
                                <div class="lab-panel">
                                    <h4><i class="fas fa-flask"></i>Биохимия</h4>
                                    <p>Предлагаме биохимични изследвания с 13 параметъра:</p>
                                    <ul class="lab-parameters">
                                        <li>GLU <span class="parameter-description">Глюкоза</span></li>
                                        <li>UREA <span class="parameter-description">Урея</span></li>
                                        <li>CREAT <span class="parameter-description">Креатинин</span></li>
                                        <li>ALB <span class="parameter-description">Албумин</span></li>
                                        <li>TP <span class="parameter-description">Тотален протеин</span></li>
                                        <li>TBIL <span class="parameter-description">Тотален билирубин</span></li>
                                        <li>DBIL <span class="parameter-description">Директен билирубин</span></li>
                                        <li>CA <span class="parameter-description">Калций</span></li>
                                        <li>P <span class="parameter-description">Фосфор</span></li>
                                        <li>ASAT <span class="parameter-description">Аспартат-аминотрансфераза</span></li>
                                        <li>ALAT <span class="parameter-description">Аланин-аминотрансфераза</span></li>
                                        <li>ALP <span class="parameter-description">Алкална фосфатаза</span></li>
                                        <li>GGT <span class="parameter-description">Гама-глутамил трансфераза</span></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Втора колона -->
                            <div class="lab-column">
                                <div class="lab-panel">
                                    <h4><i class="fas fa-vial"></i>Хематология</h4>
                                    <p>Разполагаме с апарати за изследване на кръв с 19 показателя:</p>
                                    <div class="param-group">
                                        <h5>Бели кръвни клетки</h5>
                                        <ul class="lab-parameters">
                                            <li>WBC <span class="parameter-description">Левкоцити</span></li>
                                            <li>Lymph# <span class="parameter-description">Лимфоцити (абсолютна стойност)</span></li>
                                            <li>Mon# <span class="parameter-description">Моноцити</span></li>
                                            <li>Gran# <span class="parameter-description">Гранулоцити</span></li>
                                            <li>Lymph% <span class="parameter-description">Лимфоцити (процентно участие)</span></li>
                                            <li>Mon% <span class="parameter-description">Моноцити</span></li>
                                            <li>Gran% <span class="parameter-description">Гранулоцити</span></li>
                                            <li>Eos% <span class="parameter-description">Еозинофилни гранулоцити</span></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="param-group">
                                        <h5>Червени кръвни клетки</h5>
                                        <ul class="lab-parameters">
                                            <li>RBC <span class="parameter-description">Еритроцити</span></li>
                                            <li>HGB <span class="parameter-description">Хемоглобин</span></li>
                                            <li>HCT <span class="parameter-description">Хематокрит</span></li>
                                            <li>MCV <span class="parameter-description">Среден обем на еритроцитите</span></li>
                                            <li>MCH <span class="parameter-description">Средно съдържание на хемоглобин</span></li>
                                            <li>MCHC <span class="parameter-description">Средна концентрация на хемоглобин</span></li>
                                            <li>RDW <span class="parameter-description">Разпределение на еритроцитите по обем</span></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="param-group">
                                        <h5>Тромбоцити</h5>
                                        <ul class="lab-parameters">
                                            <li>PLT <span class="parameter-description">Тромбоцити</span></li>
                                            <li>MPV <span class="parameter-description">Среден обем на тромбоцитите</span></li>
                                            <li>PDW <span class="parameter-description">Разпределение на тромбоцитите по обем</span></li>
                                            <li>PCT <span class="parameter-description">Обемно участие на тромбоцитите</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lab-note">
                            <p>Изследваме и различни хормони, които могат да бъдат от ключово значение при диагностициране на определени заболявания и функционални нарушения при вашите домашни любимци.</p>
                        </div>

                        <h3>Процес на лабораторната диагностика</h3>
                        <div class="timeline">
                            <div class="timeline-item timeline-checkup" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Консултация с ветеринарен лекар</strong> - определяне на необходимите изследвания според симптомите и състоянието на животното.
                                </div>
                            </div>
                            <div class="timeline-item timeline-docs" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Вземане на проба</strong> - събиране на проба от кръв, урина или друга физиологична течност по щадящ метод.
                                </div>
                            </div>
                            <div class="timeline-item timeline-diagnostic" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Лабораторен анализ</strong> - обработка на пробата с нашите специализирани апарати за точни резултати.
                                </div>
                            </div>
                            <div class="timeline-item timeline-surgery" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Интерпретация на резултатите</strong> - анализ на получените показатели от квалифициран специалист.
                                </div>
                            </div>
                            <div class="timeline-item timeline-certs" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Определяне на лечение</strong> - въз основа на получените резултати се назначава подходящо лечение или допълнителни изследвания.
                                </div>
                            </div>
                        </div>

                        <h3>Предимства на нашата лаборатория</h3>
                        
                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-stopwatch"></i> Бързи резултати</h4>
                                <p>Получаване на лабораторните резултати за кратко време, което позволява незабавно започване на лечение.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-chart-line"></i> Висока точност</h4>
                                <p>Съвременна апаратура с модерен ветеринарен софтуер за прецизни лабораторни изследвания.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-clipboard-list"></i> Комплексна оценка</h4>
                                <p>Възможност за извършване на голям брой изследвания наведнъж за цялостна оценка на здравословното състояние.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-user-md"></i> Професионална интерпретация</h4>
                                <p>Нашите ветеринарни специалисти правят подробен анализ и разясняват резултатите на разбираем език.</p>
                            </div>
                        </div>

                        <div class="service-cta">
                            <h3>Нуждаете се от лабораторни изследвания за вашия любимец?</h3>
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