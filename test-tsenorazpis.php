<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'tsenorazpis';
    // Дефинираме заглавието на страницата
    $pageTitle = "Ценоразпис | Ветеринарен център Петкови";

    include 'header.php'; // Включваме хедъра
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/uslugi.css">

<style>
    /* Специфични стилове за ценоразпис */
    .price-panel {
        background: #ffffff; /* Променен на чисто бял фон за панелите */
        border-radius: 8px;
        padding: 0; /* Премахнат padding на общия контейнер */
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        position: relative;
        height: 100%;
        margin-bottom: 25px;
        border: 1px solid rgba(230, 240, 250, 0.8);
    }
    
    .price-panel h3 {
        color: var(--dark-blue);
        font-size: 1.2rem;
        margin-top: 0;
        margin-bottom: 0; /* Премахнато разстоянието между заглавието и съдържанието */
        padding: 15px 20px;
        position: relative;
        display: flex;
        align-items: center;
        background: rgba(240, 245, 255, 0.9); /* Запазен светлосин фон за заглавието */
        border-radius: 8px 8px 0 0;
        border-bottom: 1px solid rgba(230, 240, 250, 0.9);
    }
    
    .price-panel h3:after {
        display: none; /* Премахнат градиентът под заглавието */
    }
    
    .price-panel h3 i {
        margin-right: 10px;
        color: var(--secondary-color);
        font-size: 1.3em;
    }
    
    .price-table {
        width: 100%;
        padding: 15px 20px; /* Добавен padding в таблицата с цените */
    }
    
    .price-item {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px dashed rgba(0,0,0,0.05);
    }
    
    .price-item:last-child {
        border-bottom: none;
    }
    
    .price-name {
        flex: 1;
        padding-right: 20px;
        color: var(--text-color);
    }
    
    .price-value {
        /* Премахнато удебеляването на цените */
        color: #000000; /* Цените са с черен цвят както е поискано */
        text-align: right;
        min-width: 100px;
    }
    
    .price-disclaimer {
        font-style: italic;
        margin: 20px 0;
        padding: 15px;
        background-color: rgba(255, 251, 235, 0.6);
        border-left: 3px solid var(--secondary-color);
        border-radius: 0 8px 8px 0;
    }

    /* Странично меню със секции на ценоразписа */
    .price-categories ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .price-categories ul li {
        margin-bottom: 5px;
        position: relative;
    }

    .price-categories ul li a {
        display: flex;
        align-items: center;
        padding: 16px 20px;
        color: var(--text-color);
        font-size: 0.95rem;
        font-weight: 500;
        border-bottom: 1px solid rgba(0,0,0,0.04);
        transition: all 0.3s ease;
        border-radius: 0;
        text-decoration: none;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .price-categories ul li:last-child a {
        border-bottom: none;
    }

    /* Икони за категориите */
    .price-categories ul li a:before {
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        margin-right: 12px;
        width: 24px;
        height: 24px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        border-radius: 50%;
        background-color: rgba(66, 179, 229, 0.1);
        color: var(--secondary-color);
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    /* Специфични икони */
    .price-categories ul li a[href="#consultations"]::before { content: "\f0f1"; }
    .price-categories ul li a[href="#procedures"]::before { content: "\f0fa"; }
    .price-categories ul li a[href="#surgeries"]::before { content: "\f0f8"; }
    .price-categories ul li a[href="#hospitalization"]::before { content: "\f236"; }
    .price-categories ul li a[href="#grooming"]::before { content: "\f0c4"; }
    .price-categories ul li a[href="#vaccinations"]::before { content: "\f48e"; }
    .price-categories ul li a[href="#diagnostics"]::before { content: "\f0c3"; }
    .price-categories ul li a[href="#dental"]::before { content: "\f0f9"; }
    .price-categories ul li a[href="#anesthesia"]::before { content: "\f21e"; }

    /* Стрелка вдясно */
    .price-categories ul li a:after {
        content: "\f054";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        font-size: 0.7rem;
        position: absolute;
        right: 20px;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
        color: var(--secondary-color);
    }

    /* Hover ефекти */
    .price-categories ul li a:hover {
        background: linear-gradient(to right, rgba(3, 132, 206, 0.05), rgba(66, 179, 229, 0.12));
        color: var(--primary-color);
        padding-left: 24px;
        padding-right: 45px;
        box-shadow: none;
        transform: none;
    }

    .price-categories ul li a:hover:before {
        background-color: var(--secondary-color);
        color: white;
        transform: scale(1.1);
    }

    .price-categories ul li a:hover:after {
        opacity: 1;
        transform: translateX(0);
    }

    /* Активна категория */
    .price-categories ul li a.active {
        background: linear-gradient(to right, rgba(49, 86, 163, 0.1), rgba(3, 132, 206, 0.15));
        color: var(--primary-color);
        font-weight: 600;
        padding-left: 24px;
    }

    .price-categories ul li a.active:before {
        background-color: var(--primary-color);
        color: white;
    }

    .price-categories ul li a.active:after {
        opacity: 1;
        transform: translateX(0);
        right: 20px;
    }

    /* Мобилен дроп даун за категории */
    .mobile-price-categories select {
        background-color: var(--white);
        color: var(--text-color);
        font-size: 1rem;
        padding: 12px 40px 12px 15px;
        border-radius: 8px;
        border: 1px solid #dceaf5;
        width: 100%;
        margin-bottom: 20px;
        -webkit-appearance: none;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%233156a3' class='bi bi-chevron-down' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px 16px;
        cursor: pointer;
    }
    
    /* Допълнителни стилове за по-елегантен вид */
    .usluga-main-content {
        background-color: #ffffff;
    }
    
    .price-item:hover {
        background-color: rgba(250, 252, 255, 0.7);
    }
    
    @media (max-width: 768px) {
        .price-item {
            padding: 12px 0;
        }
        
        .price-panel {
            padding: 0;
        }
        
        /* Скриваме странично меню на мобилни */
        .price-categories {
            display: none;
        }
        
        /* Показваме мобилното падащо меню */
        .mobile-price-categories {
            display: block;
        }
    }
    
    @media (min-width: 769px) {
        /* Скриваме мобилното меню на десктоп */
        .mobile-price-categories {
            display: none;
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
                        'vtoro-mnenie' => 'Второ мнение',
                        'tsenorazpis' => 'Ценоразпис'
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

        <div class="mobile-price-categories">
            <h3>Категории цени</h3>
            <select id="mobilePriceSelect" onchange="scrollToCategory(this.value)">
                <option value="consultations">Консултации и прегледи</option>
                <option value="procedures">Основни процедури</option>
                <option value="surgeries">Операции</option>
                <option value="hospitalization">Стационар и хотел</option>
                <option value="grooming">Подстригване и хигиена</option>
                <option value="vaccinations">Ваксини и профилактика</option>
                <option value="diagnostics">Диагностика</option>
                <option value="dental">Дентална грижа</option>
                <option value="anesthesia">Анестезия</option>
            </select>
        </div>

        <div class="usluga-layout-grid">
            <!-- Лява странична лента със категории от ценоразписа -->
            <aside class="usluga-sidebar price-categories">
                <h3>Категории</h3>
                <nav>
                    <ul class="usluga-sidebar-menu">
                        <li>
                            <a href="#consultations" onclick="scrollToCategory('consultations'); return false;">
                                Консултации и прегледи
                            </a>
                        </li>
                        <li>
                            <a href="#procedures" onclick="scrollToCategory('procedures'); return false;">
                                Основни процедури
                            </a>
                        </li>
                        <li>
                            <a href="#surgeries" onclick="scrollToCategory('surgeries'); return false;">
                                Операции
                            </a>
                        </li>
                        <li>
                            <a href="#hospitalization" onclick="scrollToCategory('hospitalization'); return false;">
                                Стационар и хотел
                            </a>
                        </li>
                        <li>
                            <a href="#grooming" onclick="scrollToCategory('grooming'); return false;">
                                Подстригване и хигиена
                            </a>
                        </li>
                        <li>
                            <a href="#vaccinations" onclick="scrollToCategory('vaccinations'); return false;">
                                Ваксини и профилактика
                            </a>
                        </li>
                        <li>
                            <a href="#diagnostics" onclick="scrollToCategory('diagnostics'); return false;">
                                Диагностика
                            </a>
                        </li>
                        <li>
                            <a href="#dental" onclick="scrollToCategory('dental'); return false;">
                                Дентална грижа
                            </a>
                        </li>
                        <li>
                            <a href="#anesthesia" onclick="scrollToCategory('anesthesia'); return false;">
                                Анестезия
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <article class="usluga-main-content">
                <h1>Ценоразпис</h1>

                <div class="usluga-content-wrapper">
                    <div class="usluga-text">
                        <h2>Съкратен ценоразпис на услугите във Ветеринарен комплекс „Петкови"</h2>
                        
                        <p class="price-disclaimer">
                            <i class="fas fa-info-circle"></i> Този ценоразпис не отразява пълния набор от предлаганите услуги, само посочва цената на най-често извършваните манипулации, ваксини и операции
                        </p>
                        
                        <!-- Секция Консултации -->
                        <div class="price-panel" id="consultations">
                            <h3><i class="fas fa-stethoscope"></i> Консултации и прегледи</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Първичен преглед</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вторичен преглед</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Второ мнение \ консултация</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Домашно посещение</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Преглед на очи от специалист офталмолог</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Преглед на уши от специалист</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Преглед извън работно време ( от 20:00-23:00)</div>
                                    <div class="price-value">60 лв</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Процедури -->
                        <div class="price-panel" id="procedures">
                            <h3><i class="fas fa-syringe"></i> Основни процедури</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Подкожно инжектиране</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Мускулно инжектиране</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Консуматив за подкожна или мускулна инжекция</div>
                                    <div class="price-value">1 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Венозно инжектиране</div>
                                    <div class="price-value">8 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Даване на лекарства през устата</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вътрешно обезпаразитяване (без цената на медикамента)</div>
                                    <div class="price-value">8 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване (без цената на медикамента)</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Пудрене (без цената на медикамента)</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Обливане с р-р против външни паразити (без цената на медикамента)</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Втриване на течности и мази</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Напръскване на околна среда (цената не включва препарата)</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Поставяна на венозен катетър</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Венозна инфузия</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Отстраняване на осил</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Отстраняване на чуждо тяло от око, ухо, лапа, устна кухина, нос</div>
                                    <div class="price-value">40 лв/бр</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Отстраняване на кърлеж</div>
                                    <div class="price-value">10 лв / кърлеж</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Първична обработка на рана</div>
                                    <div class="price-value">10 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Обработка устна лигавица</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Обработка на абсцес</div>
                                    <div class="price-value">30 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Промивка (вагинална, препуционална)</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Почистване на анални жлези</div>
                                    <div class="price-value">15 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Почистване на уши (без препарат)</div>
                                    <div class="price-value">8 лв / ухо</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Почистване на очи</div>
                                    <div class="price-value">8 лв / око</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изрязане на нокти</div>
                                    <div class="price-value">3 лв / лапа</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изрязане на зъби / Рязане на зъби</div>
                                    <div class="price-value">10 лв / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Рязане на крила на папагали</div>
                                    <div class="price-value">10 лв / крило</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Рязане на крила на птици</div>
                                    <div class="price-value">10 лв / крило</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Клизма котка</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Клизма куче</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Катетеризация мъжко коте</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Катетеризация женско коте</div>
                                    <div class="price-value">70 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Катетеризация мъжко куче</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Катетеризация жеско куче</div>
                                    <div class="price-value">70 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Пункция</div>
                                    <div class="price-value">90 - 190 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ръчно изпишкване</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Смяна на превръзка</div>
                                    <div class="price-value">10 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кожен хирургичен шев</div>
                                    <div class="price-value">10 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Сваляне на конци</div>
                                    <div class="price-value">10 лв</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Операции -->
                        <div class="price-panel" id="surgeries">
                            <h3><i class="fas fa-user-md"></i> Операции</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Кастрация на мъжка котка</div>
                                    <div class="price-value">90 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кастрация на женска котка</div>
                                    <div class="price-value">180 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кастрация на мъжко куче</div>
                                    <div class="price-value">до 20кг.160лв<br>над 20кг. 300лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кастрация на женско куче</div>
                                    <div class="price-value">до 20кг. 200лв<br>над 20кг. 340лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кастрация на морско свинче</div>
                                    <div class="price-value">80 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Оварихистероектомия на куче</div>
                                    <div class="price-value">250 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Оварихистероектомия котка</div>
                                    <div class="price-value">200 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Пиометра котка</div>
                                    <div class="price-value">250 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Пиометра куче</div>
                                    <div class="price-value">300 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Цезарово сечение</div>
                                    <div class="price-value">300-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Акушерска помощ / Израждане коте</div>
                                    <div class="price-value">200 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Акушерска помощ / Израждане куче</div>
                                    <div class="price-value">400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Родилна помощ (на плод)</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Еакулация (взимане на семенна течност)</div>
                                    <div class="price-value">45 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Естествено заплождане на куче с подпомагане от специалист</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изкуствено заплождане на куче</div>
                                    <div class="price-value">150 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вправяне на матка</div>
                                    <div class="price-value">150-200 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вправяне на влагалище</div>
                                    <div class="price-value">100-150 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция херния</div>
                                    <div class="price-value">150-250 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция тумори на млечната жлеза на куче до 10кг и котки</div>
                                    <div class="price-value">150-300 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция тумори на млечната жлеза на куче над 11 кг</div>
                                    <div class="price-value">250-450 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Опрация вправяне на очна ябълка</div>
                                    <div class="price-value">200 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Корекция на ентропион и ектропион</div>
                                    <div class="price-value">200-400 лв/око</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Хирургично лечение на бурзит на лaкътна става</div>
                                    <div class="price-value">100-150 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция резекция на главата на бедрената кост при котка</div>
                                    <div class="price-value">200-250 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция резекция на главата на бедрената кост при куче</div>
                                    <div class="price-value">300-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция остиосинтеза на таз</div>
                                    <div class="price-value">300-600 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция остиосинтеза на гръбнак и на крайник</div>
                                    <div class="price-value">300-800 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Опрация остиосинтеза на челюсти</div>
                                    <div class="price-value">300-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция остиосинтеза на крайник</div>
                                    <div class="price-value">300-600 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция луксация на патела</div>
                                    <div class="price-value">300-600 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция скъсана предна кръстосана връзка</div>
                                    <div class="price-value">300-600 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция за премахване на допълнителни пръсти</div>
                                    <div class="price-value">100-150 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Шиниране</div>
                                    <div class="price-value">15-50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция отстраняване на тестикуларни тумори</div>
                                    <div class="price-value">150-300 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Отохематома</div>
                                    <div class="price-value">200-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция отстраняване на жлезата на третия клепач</div>
                                    <div class="price-value">200-400 лв</div>
                                </div>
                                <div class="price-item">
                                                                    <div class="price-item">
                                    <div class="price-name">Операция перинеални тумори</div>
                                    <div class="price-value">200-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция отстраняване на тумори на влагалището</div>
                                    <div class="price-value">200-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция отстраняване на гингивални тумори</div>
                                    <div class="price-value">200-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция пластика на кожни дефекти</div>
                                    <div class="price-value">150-300 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция ампутация на крайник</div>
                                    <div class="price-value">200-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция ороназална фистула</div>
                                    <div class="price-value">200-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция пластика на твърдо небце</div>
                                    <div class="price-value">200-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция гастротомия</div>
                                    <div class="price-value">300-400 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция превъртане на стомаха</div>
                                    <div class="price-value">300-450 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция ентеротомия</div>
                                    <div class="price-value">300-600 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция ентероанастомоза</div>
                                    <div class="price-value">400-700 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция на мегаколон</div>
                                    <div class="price-value">300-500 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция изпадане на ректума</div>
                                    <div class="price-value">300-400 лв</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Стационар -->
                        <div class="price-panel" id="hospitalization">
                            <h3><i class="fas fa-hospital"></i> Стационар и хотел</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Стационар на куче (в цената не се включва лечението и храната)</div>
                                    <div class="price-value">40-60 лв / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Стационар на котка (в цената не се включва лечението и храната)</div>
                                    <div class="price-value">40-60 лв / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Хотел (цената на храната се заплаща допълнително или се носи от стопаните)</div>
                                    <div class="price-value">30 лв / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Такса престой за зообрак на коте/куче като услуга</div>
                                    <div class="price-value">20 лв / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Стационар изолатор</div>
                                    <div class="price-value">40 - 60 лв / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Капаро транспортна клетка</div>
                                    <div class="price-value">20-60 лв</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Груминг -->
                        <div class="price-panel" id="grooming">
                            <h3><i class="fas fa-cut"></i> Подстригване и хигиена</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Подстригване на котка</div>
                                    <div class="price-value">40 - 60 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подсригване на куче до 20 кг</div>
                                    <div class="price-value">40 - 80 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подстигване на куче над 20 кг</div>
                                    <div class="price-value">2 лв / кг</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подстригване около половите органи на куче</div>
                                    <div class="price-value">15 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подстригване на междупръстия</div>
                                    <div class="price-value">10 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ноктопластика</div>
                                    <div class="price-value">4 лв / нокът</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Къпане на куче до 10 кг.</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Къпане на куче над 10 кг.</div>
                                    <div class="price-value">60 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подсушаване с хавлия</div>
                                    <div class="price-value">6 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Издухване със сешоар</div>
                                    <div class="price-value">6-20 лв</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Секция Ваксини -->
                        <div class="price-panel" id="vaccinations">
                            <h3><i class="fas fa-shield-alt"></i> Ваксини и профилактика</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Първа бебешка ваксина кучета Biocan NOVEL DHPPi</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Втора бебешка ваксина кучета - Biocan NOVEL DHPPi/L4</div>
                                    <div class="price-value">45 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Трета бебешка ваксина кучета = Годишна ваксина - Biocan NOVEL DHPPi/L4R</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина срещу кучешка кашлица - Nobivac KC</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина срещу микроспоридиоза при кучета и котки - Biocan M</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Васкина бяс моновалентна - Rabisin</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина за котка тривалентна Feligen CRP</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина за котка RCHR Biofelin</div>
                                    <div class="price-value">45 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина за котка Purevax RCPch FeLV</div>
                                    <div class="price-value">71 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване с Ефипро спрей бебе коте</div>
                                    <div class="price-value">22 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване с Ефипро спрей на пораснало коте</div>
                                    <div class="price-value">42 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване с Ефипро спрей на бебе куче</div>
                                    <div class="price-value">42 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване с Ефипро спрей на пораснало куче</div>
                                    <div class="price-value">62 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Европейски паспорт</div>
                                    <div class="price-value">10 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Микрочипиране / Поставяне на микрочип</div>
                                    <div class="price-value">60 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Издаване на задграничен сертификат от БАБХ</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Издаване на задграничен сертификат от Ветеринарен Център Петкови</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Секция Диагностика -->
                        <div class="price-panel" id="diagnostics">
                            <h3><i class="fas fa-microscope"></i> Диагностика</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Рентгенография (дигитална със запис на CD)</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ехография</div>
                                    <div class="price-value">50 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Физиотерапия</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Нагревка с комбинирана лампа (физиотерапевтично облъчване)</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изследване на урина (пълно)</div>
                                    <div class="price-value">30 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изследване на фекалии</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вземане на кръв с консумативите</div>
                                    <div class="price-value">10 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изследване на кожа и козина</div>
                                    <div class="price-value">40 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Евтаназия коте/куче (с медикамента)</div>
                                    <div class="price-value">200 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Аутопсия птица</div>
                                    <div class="price-value">30 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Аутопсия заек и котка</div>
                                    <div class="price-value">60 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Аутопсия куче</div>
                                    <div class="price-value">40-100 лв</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Секция Дентална грижа -->
                        <div class="price-panel" id="dental">
                            <h3><i class="fas fa-tooth"></i> Дентална грижа</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Екстракция на инцизиви</div>
                                    <div class="price-value">30 лв / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Екстракция на канини и молари</div>
                                    <div class="price-value">40 лв / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Екстракция на премолари</div>
                                    <div class="price-value">40 лв / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вадене на млечни зъби</div>
                                    <div class="price-value">10-30 лв / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Почистване на зъбен камък (в цената не е включена упойката)</div>
                                    <div class="price-value">4 лв / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вадене на кост от устата на животно (в цената не е включена упойката)</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Секция Анестезия -->
                        <div class="price-panel" id="anesthesia">
                            <h3><i class="fas fa-procedures"></i> Анестезия</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Местна анестезия</div>
                                    <div class="price-value">20 лв</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Дистанционно упояване с въздушна пушка</div>
                                    <div class="price-value">100 лв</div>
                                </div>
                            </div>
                        </div>

                        <div class="price-disclaimer" style="margin-top: 30px;">
                            <p><strong>Забележка:</strong> Ветеринарен комплекс "Петкови" си запазва правото да променя цените във всеки един момент. Посоченият по-горе ценоразпис включва положения труд, като стойността на вложените косумативи и лекарства се заплаща отделно. Лекарите в кабинета имат правото да откажат преглед и лечение на даден пациент, когато стопанинът се държи неуважително или непристойно или когато подлага на съмнение професионализма и човешките им добродетели.</p>
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
    
    // Функция за плавно скролиране до избраната категория
    function scrollToCategory(categoryId) {
        const element = document.getElementById(categoryId);
        
        // Ако намерим елемента, скролваме до него
        if (element) {
            // Премахваме активния клас от всички линкове
            document.querySelectorAll('.usluga-sidebar-menu a').forEach(function(link) {
                link.classList.remove('active');
            });
            
            // Добавяме активен клас към избрания линк
            const activeLink = document.querySelector(`.usluga-sidebar-menu a[href="#${categoryId}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
            
            // Изчисляваме офсета за скролиране (малко по-нагоре от елемента)
            const offset = element.getBoundingClientRect().top + window.pageYOffset - 120;
            
            // Плавно скролиране
            window.scrollTo({
                top: offset,
                behavior: 'smooth'
            });
        }
    }
    
    // Активиране на менюто при скролиране
    document.addEventListener('DOMContentLoaded', function() {
        // Вземане на всички секции
        const sections = document.querySelectorAll('.price-panel');
        const sidebarLinks = document.querySelectorAll('.usluga-sidebar-menu a');
        
        // Функция, която следи кои секции са видими при скролиране
        window.addEventListener('scroll', function() {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });
            
            // Активираме съответния линк
            if (current) {
                sidebarLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
        
        // Активиране на първата категория при зареждане
        if (sidebarLinks.length > 0) {
            sidebarLinks[0].classList.
        
        // Активиране на първата категория при зареждане
        if (sidebarLinks.length > 0) {
            sidebarLinks[0].classList.add('active');
        }
    });
</script>

<?php include 'footer.php'; // Включваме футъра ?>