<?php
    // Дефинираме името на текущата услуга (за да я скрием от менюто)
    $currentPageService = 'tsenorazpis';
    // Дефинираме заглавието на страницата
    $pageTitle = "Ценоразпис | Ветеринарен център Петкови";

    include 'header.php'; // Включваме хедъра
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/uslugi.css">
<link rel="stylesheet" href="css/price-list.css">

<main class="usluga-page-content">
    <div class="container">
        <div class="mobile-services-menu">
            <h3>Нашите Услуги</h3>
            <select id="mobileServiceSelect" onchange="goToSelectedService()">
                <option value="">Изберете друга услуга...</option>
                 <?php
                    // Включваме ценоразпис в мобилното меню
                    $includePriceList = true;
                    // Включваме файла, който генерира опциите за мобилното меню
                    include 'template-parts/mobile-services-menu.php';
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
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вторичен преглед</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Второ мнение \ консултация</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Домашно посещение</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Преглед на очи от специалист офталмолог</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Преглед на уши от специалист</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Преглед извън работно време ( от 20:00-23:00)</div>
                                    <div class="price-value">60 лв / 30.68 €</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Процедури -->
                        <div class="price-panel" id="procedures">
                            <h3><i class="fas fa-syringe"></i> Основни процедури</h3>
                            <div class="price-table">
                                <div class="price-item">
                                               <div class="price-name">Подкожно инжектиране</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Мускулно инжектиране</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Консуматив за подкожна или мускулна инжекция</div>
                                    <div class="price-value">1 лв / 0.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Венозно инжектиране</div>
                                    <div class="price-value">10 лв / 5.11 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Даване на лекарства през устата</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вътрешно обезпаразитяване (без цената на медикамента)</div>
                                    <div class="price-value">8 лв / 4.09 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване (без цената на медикамента)</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Пудрене (без цената на медикамента)</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Обливане с р-р против външни паразити (без цената на медикамента)</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Втриване на течности и мази</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Напръскване на околна среда (цената не включва препарата)</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Поставяна на венозен катетър</div>
                                    <div class="price-value">15 лв / 7.67 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Венозна инфузия</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Отстраняване на осил</div>
                                    <div class="price-value">60 лв / 30.68 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Отстраняване на чуждо тяло от око, ухо, лапа, устна кухина, нос</div>
                                    <div class="price-value">60 лв / 30.68.45 € /бр</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Отстраняване на кърлеж</div>
                                    <div class="price-value">10 лв / 5.11 € / кърлеж</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Първична обработка на рана</div>
                                    <div class="price-value">10 лв / 5.11 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Обработка устна лигавица</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Обработка на абсцес</div>
                                    <div class="price-value">30 лв / 15.34 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Промивка (вагинална, препуционална)</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Почистване на анална жлеза</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Почистване на уши (без препарат)</div>
                                    <div class="price-value">8 лв / 4.09 € / ухо</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Почистване на очи</div>
                                    <div class="price-value">8 лв / 4.09 € / око</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изрязане на нокти</div>
                                    <div class="price-value">3 лв / 1.53 € / лапа</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изрязане на зъби / Рязане на зъби</div>
                                    <div class="price-value">10 лв / 5.11 € / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Рязане на крила на папагали</div>
                                    <div class="price-value">10 лв / 5.11 € / крило</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Рязане на крила на птици</div>
                                    <div class="price-value">10 лв / 5.11 € / крило</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Клизма котка</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Клизма куче</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Катетеризация мъжко коте</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Катетеризация женско коте</div>
                                    <div class="price-value">70 лв / 35.79 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Катетеризация мъжко куче</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Катетеризация жеско куче</div>
                                    <div class="price-value">70 лв / 35.79 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Пункция</div>
                                    <div class="price-value">90 - 190 лв / 46.01 - 97.14 €</div>
                               </div>
                                <div class="price-item">
                                    <div class="price-name">Ръчно изпишкване</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Смяна на превръзка</div>
                                    <div class="price-value">10 лв / 5.11 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кожен хирургичен шев</div>
                                    <div class="price-value">10 лв / 5.11 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Сваляне на конци</div>
                                    <div class="price-value">10 лв / 5.11 €</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Операции -->
                        <div class="price-panel" id="surgeries">
                            <h3><i class="fas fa-user-md"></i> Операции</h3>
                            <div class="price-table">
                                <div class="price-item">
                                      <div class="price-name">Кастрация на мъжка котка</div>
                                    <div class="price-value">90 лв / 46.01 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кастрация на женска котка</div>
                                    <div class="price-value">200 лв / 102.26 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кастрация на мъжко куче</div>
                                    <div class="price-value">до 20кг. 200лв / 102.26 €<br>над 20кг. 300лв / 153.38 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кастрация на женско куче</div>
                                    <div class="price-value">до 20кг. 240лв / 122.71 €<br>над 20кг. 340лв / 173.84 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Кастрация на морско свинче</div>
                                    <div class="price-value">80 лв / 40.90 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Оварихистероектомия на куче</div>
                                     <div class="price-value">300 лв / 153.38 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Оварихистероектомия котка</div>
                                    <div class="price-value">250 лв / 127.82 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Пиометра котка</div>
                                    <div class="price-value">300 лв / 153.38 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Пиометра куче</div>
                                     <div class="price-value">350 лв / 178.95 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Цезарово сечение</div>
                                    <div class="price-value">300-400 лв / 153.38-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Акушерска помощ / Израждане коте</div>
                                    <div class="price-value">200 лв / 102.26 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Акушерска помощ / Израждане куче</div>
                                    <div class="price-value">400 лв / 204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Родилна помощ (на плод)</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Еакулация (взимане на семенна течност)</div>
                                    <div class="price-value">45 лв / 22.99 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Естествено заплождане на куче с подпомагане от специалист</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изкуствено заплождане на куче</div>
                                    <div class="price-value">150 лв / 76.69 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вправяне на матка</div>
                                    <div class="price-value">150-200 лв / 76.69-102.26 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вправяне на влагалище</div>
                                    <div class="price-value">100-150 лв / 51.13-76.69 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция херния</div>
                                    <div class="price-value">150-250 лв / 76.69-127.82 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция тумори на млечната жлеза на куче до 10кг и котки</div>
                                    <div class="price-value">150-300 лв / 76.69-153.38 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция тумори на млечната жлеза на куче над 11 кг</div>
                                    <div class="price-value">250-450 лв / 127.82-229.98 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Опрация вправяне на очна ябълка</div>
                                    <div class="price-value">200 лв / 102.26 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Корекция на ентропион и ектропион</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 € /око</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Хирургично лечение на бурзит на лaкътна става</div>
                                    <div class="price-value">100-150 лв / 51.13-76.69 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция резекция на главата на бедрената кост при котка</div>
                                    <div class="price-value">200-250 лв / 102.26-127.82 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция резекция на главата на бедрената кост при куче</div>
                                    <div class="price-value">300-400 лв / 153.38-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция остиосинтеза на таз</div>
                                    <div class="price-value">300-600 лв / 153.38-306.76 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция остиосинтеза на гръбнак и на крайник</div>
                                    <div class="price-value">300-800 лв / 153.38-409.01 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Опрация остиосинтеза на челюсти</div>
                                    <div class="price-value">300-400 лв / 153.38-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция остиосинтеза на крайник</div>
                                    <div class="price-value">300-600 лв / 153.38-306.76 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция луксация на патела</div>
                                    <div class="price-value">300-600 лв / 153.38-306.76 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция скъсана предна кръстосана връзка</div>
                                    <div class="price-value">300-600 лв / 153.38-306.76 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция за премахване на допълнителни пръсти</div>
                                    <div class="price-value">100-150 лв / 51.13-76.69 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Шиниране</div>
                                    <div class="price-value">15-50 лв / 7.67-25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция отстраняване на тестикуларни тумори</div>
                                    <div class="price-value">150-300 лв / 76.69-153.38 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Отохематома</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция отстраняване на жлезата на третия клепач</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 €</div>
                                </div>

                                <div class="price-item">
                                    <div class="price-name">Операция перинеални тумори</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция отстраняване на тумори на влагалището</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция отстраняване на гингивални тумори</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция пластика на кожни дефекти</div>
                                    <div class="price-value">150-300 лв / 76.69-153.38 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция ампутация на крайник</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция ороназална фистула</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция пластика на твърдо небце</div>
                                    <div class="price-value">200-400 лв / 102.26-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция гастротомия</div>
                                    <div class="price-value">300-400 лв / 153.38-204.51 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция превъртане на стомаха</div>
                                    <div class="price-value">300-450 лв / 153.38-229.98 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция ентеротомия</div>
                                    <div class="price-value">300-600 лв / 153.38-306.76 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция ентероанастомоза</div>
                                    <div class="price-value">400-700 лв / 204.51-357.90 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция на мегаколон</div>
                                    <div class="price-value">300-500 лв / 153.38-255.64 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Операция изпадане на ректума</div>
                                    <div class="price-value">300-400 лв / 153.38-204.51 €</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Стационар -->
                        <div class="price-panel" id="hospitalization">
                            <h3><i class="fas fa-hospital"></i> Стационар и хотел</h3>
                            <div class="price-table">
                                <div class="price-item">
                                   <div class="price-name">Стационар на куче (в цената не се включва лечението и храната)</div>
                                    <div class="price-value">60 лв / 30.68 € / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Стационар на котка (в цената не се включва лечението и храната)</div>
                                    <div class="price-value">60 лв / 30.68 € / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Хотел (цената на храната се заплаща допълнително или се носи от стопаните)</div>
                                    <div class="price-value">30 лв / 15.34 € / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Такса престой за зообрак на коте/куче като услуга</div>
                                    <div class="price-value">20 лв / 10.23 € / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Стационар изолатор</div>
                                    <div class="price-value">80 лв / 40.90 € / дата</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Капаро транспортна клетка</div>
                                    <div class="price-value">20-60 лв / 10.23-30.68 €</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Груминг -->
                        <div class="price-panel" id="grooming">
                            <h3><i class="fas fa-cut"></i> Подстригване и хигиена</h3>
                            <div class="price-table">
                                <div class="price-item">
                                   <div class="price-name">Подстригване на котка</div>
                                    <div class="price-value">40 - 60 лв / 20.45 - 30.68 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подсригване на куче до 20 кг</div>
                                    <div class="price-value">40 - 80 лв / 20.45 - 40.90 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подстигване на куче над 20 кг</div>
                                    <div class="price-value">2 лв / 1.02 € / кг</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подстригване около половите органи на куче</div>
                                    <div class="price-value">15 лв / 7.67 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подстригване на междупръстия</div>
                                    <div class="price-value">10 лв / 5.11 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ноктопластика</div>
                                    <div class="price-value">4 лв / 2.05 € / нокът</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Къпане на куче до 10 кг.</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Къпане на куче над 10 кг.</div>
                                    <div class="price-value">60 лв / 30.68 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Подсушаване с хавлия</div>
                                    <div class="price-value">6 лв / 3.07 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Издухване със сешоар</div>
                                    <div class="price-value">6-20 лв / 3.07-10.23 €</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Ваксини -->
                        <div class="price-panel" id="vaccinations">
                            <h3><i class="fas fa-shield-alt"></i> Ваксини и профилактика</h3>
                            <div class="price-table">
                                <div class="price-item">
                                     <div class="price-name">Първа бебешка ваксина кучета Biocan NOVEL DHPPi</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Втора бебешка ваксина кучета - Biocan NOVEL DHPPi/L4</div>
                                    <div class="price-value">45 лв / 22.99 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Трета бебешка ваксина кучета = Годишна ваксина - Biocan NOVEL DHPPi/L4R</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина срещу кучешка кашлица - Nobivac KC</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина срещу микроспоридиоза при кучета и котки - Biocan M</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Васкина бяс моновалентна - Rabisin</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина за котка тривалентна Feligen CRP</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина за котка RCHR Biofelin</div>
                                    <div class="price-value">45 лв / 22.99 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ваксина за котка Purevax RCPch FeLV</div>
                                    <div class="price-value">71 лв / 36.30 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване с Ефипро спрей бебе коте</div>
                                    <div class="price-value">22 лв / 11.25 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване с Ефипро спрей на пораснало коте</div>
                                    <div class="price-value">42 лв / 21.47 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване с Ефипро спрей на бебе куче до 3 месеца</div>
                                    <div class="price-value">42 лв / 21.47 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Външно обезпаразитяване с Ефипро спрей на пораснало куче над 3 месеца</div>
                                    <div class="price-value">62 лв / 31.70 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Европейски паспорт</div>
                                    <div class="price-value">10 лв / 5.11 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Микрочипиране / Поставяне на микрочип</div>
                                    <div class="price-value">60 лв / 30.68 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Издаване на задграничен сертификат от БАБХ</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Издаване на задграничен сертификат от Ветеринарен Център Петкови</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Диагностика -->
                        <div class="price-panel" id="diagnostics">
                            <h3><i class="fas fa-microscope"></i> Диагностика</h3>
                            <div class="price-table">
                                <div class="price-item">
                                     <div class="price-name">Рентгенография (дигитална със запис на CD)</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Ехография</div>
                                    <div class="price-value">50 лв / 25.56 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Физиотерапия</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Нагревка с комбинирана лампа (физиотерапевтично облъчване)</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                      _BGN_       </div>
                                <div class="price-item">
                                    <div class="price-name">Изследване на урина (пълно)</div>
                                    <div class="price-value">30 лв / 15.34 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изследване на фекалии</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вземане на кръв с консумативите</div>
                                    <div class="price-value">10 лв / 5.11 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Изследване на кожа и козина</div>
                                    <div class="price-value">40 лв / 20.45 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Евтаназия коте/куче (с медикамента)</div>
                                    <div class="price-value">200 лв / 102.26 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Аутопсия птица</div>
                                    <div class="price-value">30 лв / 15.34 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Аутопсия заек и котка</div>
                                    <div class="price-value">60 лв / 30.68 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Аутопсия куче</div>
                                    <div class="price-value">40-100 лв / 20.45-51.13 €</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Дентална грижа -->
                        <div class="price-panel" id="dental">
                            <h3><i class="fas fa-tooth"></i> Дентална грижа</h3>
                            <div class="price-table">
                                <div class="price-item">
                                        <div class="price-name">Екстракция на инцизиви</div>
                                    <div class="price-value">30 лв / 15.34 € / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Екстракция на канини и молари</div>
                                   <div class="price-value">40 лв / 20.45 € / зъб</div>
                                     </div>
                                <div class="price-item">
                                    <div class="price-name">Екстракция на премолари</div>
                                    <div class="price-value">40 лв / 20.45 € / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вадене на млечни зъби</div>
                                    <div class="price-value">10-30 лв / 5.11-15.34 € / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Почистване на зъбен камък (в цената не е включена упойката)</div>
                                    <div class="price-value">4 лв / 2.05 € / зъб</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Вадене на кост от устата на животно (в цената не е включена упойката)</div>
                                    <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                            </div>
                        </div>

                        <!-- Секция Анестезия -->
                        <div class="price-panel" id="anesthesia">
                            <h3><i class="fas fa-procedures"></i> Анестезия</h3>
                            <div class="price-table">
                                <div class="price-item">
                                    <div class="price-name">Местна анестезия</div>
                                       <div class="price-value">20 лв / 10.23 €</div>
                                </div>
                                <div class="price-item">
                                    <div class="price-name">Дистанционно упояване с въздушна пушка</div>
                                    <div class="price-value">100 лв / 51.13 €</div>
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

<script src="js/price-list.js"></script>

<?php include 'footer.php'; // Включваме футъра ?>
