<?php
// Файл: za-nas.php
// Включваме хедъра на сайта (който зарежда основния CSS и Font Awesome)
include 'header.php';
?>

<style>
    /* Секция Въведение */
    .about-intro-section {
        padding: 50px 0 20px; /* Намалих долния padding от 50px на 20px */
        background-color: var(--white);
    }
    .about-intro-content {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
    }
    .about-intro-content h1 {
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        font-size: 2.5rem;
    }
    
    /* Стил за цялостна кутия с лява синя линия */
    .about-content-box {
        background-color: var(--white);
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        overflow: hidden;
        margin-bottom: 30px;
        position: relative;
        padding: 25px 25px 25px 45px;
        border-left: 3px solid var(--secondary-color); /* Единична синя линия отляво */
    }
    
    .about-content-box p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: var(--text-color);
        margin-bottom: 20px;
    }
    
    .about-content-box p:last-child {
        margin-bottom: 0;
    }
    
    .about-content-box strong {
        font-weight: 600;
        color: var(--primary-color);
    }

    /* Секция Ценности/Философия */
    .values-section {
        padding: 30px 0 60px; /* Намалих горния padding от 60px на 30px */
        background-color: var(--light-blue);
    }
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Адаптивен грид */
        gap: 30px;
        margin-top: 2rem;
    }
    
    /* Нов стил за value-card с лява синя линия */
    .value-card {
        background-color: var(--white);
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        overflow: hidden;
        position: relative;
        padding: 25px 25px 25px 45px;
        border-left: 3px solid var(--secondary-color); /* Синя линия отляво */
        transition: var(--transition);
        display: flex;
        flex-direction: column;
        text-align: left; /* Текстът е ляво подравнен */
    }
    
    .value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(49, 86, 163, 0.1);
    }
    
    .value-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    
    .value-icon {
        font-size: 1.8rem;
        color: var(--secondary-color);
        margin-right: 15px;
        display: inline-block;
        line-height: 1;
    }
    
    .value-card h3 {
        color: var(--primary-color);
        font-size: 1.2rem;
        margin: 0;
        font-weight: 600;
    }
    
    .value-card p {
        font-size: 1rem;
        line-height: 1.6;
        color: var(--text-color);
        margin: 0;
    }

    /* Модификация для Цитатите на Лекарите */
    .doctors-section .doctor-quote {
        position: relative;
        margin-top: 15px;
        padding: 25px 15px 15px 15px;
        min-height: 140px;
        background-color: var(--light-blue);
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .doctors-section .doctor-quote i.fa-quote-left {
        position: absolute;
        top: 12px;
        left: 15px;
        font-size: 1.2rem;
        color: var(--secondary-color);
        opacity: 0.8;
    }

    /* Триъгълен акцент (опашка на балонче) */
    .doctors-section .doctor-quote::after {
        content: '';
        position: absolute;
        top: -10px;
        right: 18px;
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-bottom: 10px solid var(--light-blue);
        z-index: 1;
    }
    .doctors-section .doctor-quote p {
        font-style: italic;
        color: var(--text-color);
        font-size: 0.9rem;
        line-height: 1.5;
        margin-top: 5px;
        z-index: 2;
        position: relative;
    }

    /* Адаптивност за секциите */
    @media (max-width: 768px) {
        .about-intro-section { padding: 40px 15px 20px; }
        .about-intro-content h1 { font-size: 2rem; }
        .about-content-box { 
            padding: 20px 20px 20px 35px;
        }
        .about-content-box p { font-size: 1rem; }
        .values-section { padding: 20px 15px 40px; }
        .value-card {
            padding: 20px 20px 20px 35px;
        }

        /* Корекции за цитатите на мобилни */
        .doctors-section .doctor-quote {
            padding: 20px 12px 12px 12px;
            min-height: 120px;
        }
        .doctors-section .doctor-quote i.fa-quote-left {
            top: 8px;
            left: 12px;
            font-size: 1.1rem;
        }
         .doctors-section .doctor-quote::after {
             right: 15px;
             border-left-width: 10px;
             border-right-width: 10px;
             border-bottom-width: 8px;
             top: -8px;
         }
        .doctors-section .doctor-quote p {
            font-size: 0.85rem;
            line-height: 1.4;
        }
    }
     @media (max-width: 576px) {
         .about-intro-content h1 { font-size: 1.8rem; }
         .values-grid { gap: 20px; }
         .value-icon { font-size: 1.6rem; }
         .value-card h3 { font-size: 1.1rem; }
         .value-card p { font-size: 0.9rem; }
     }
</style>

<section class="about-intro-section">
    <div class="container">
        <div class="about-intro-content">
            <h1>Ветеринарен Център Петкови</h1>
        </div>
        
        <div class="about-content-box">
            <p>
                Ветеринарен Център Петкови отваря врати през <strong>2008 година</strong>. Още при изграждането му е заложена идеята за множество кабинети с различни ветеринарни функции – визия, която днес е напълно реализирана.
            </p>
            
            <p>
                Ние ценим своите пациенти и клиенти и се стремим да превърнем всяко посещение в изживяване с <strong>минимално количество стрес и страх</strong> за вашите домашни любимци.
            </p>
            
            <p>
                Знаем колко е важно вашето време, затова сме осигурили обслужване <strong>365 дни в годината</strong>. Удобството е допълнено от непосредствената близост до голям паркинг.
            </p>
        </div>
    </div>
</section>

<section class="values-section">
    <div class="container">
        <h2 class="section-title">Нашата Философия</h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-header">
                    <i class="fas fa-stethoscope value-icon"></i>
                    <h3>Компетентност и Комплексност</h3>
                </div>
                <p>Предлагаме ветеринарно медицинско обслужване, базирано на знания, опит и широк спектър от услуги.</p>
            </div>
            <div class="value-card">
                <div class="value-header">
                    <i class="fas fa-handshake value-icon"></i>
                    <h3>Коректност и Вежливост</h3>
                </div>
                <p>Държим на откритите и уважителни отношения както с пациентите, така и с техните стопани.</p>
            </div>
            <div class="value-card">
                <div class="value-header">
                    <i class="fas fa-shipping-fast value-icon"></i>
                    <h3>Бързина и Ефективност</h3>
                </div>
                <p>Стараем се да осигурим навременна помощ, защото знаем, че бързата реакция често е ключова.</p>
            </div>
            <div class="value-card">
                <div class="value-header">
                    <i class="fas fa-shield-alt value-icon"></i>
                    <h3>Профилактика</h3>
                </div>
                <p>Вярваме, че превенцията е изключително важна. Насочваме и подпомагаме стопаните за стриктното ѝ спазване.</p>
            </div>
            <div class="value-card">
                <div class="value-header">
                    <i class="fas fa-comments value-icon"></i>
                    <h3>Ясна Комуникация</h3>
                </div>
                <p>Обясняваме състоянието на домашния любимец по лесен и достъпен начин, за да сте информирани и да участвате активно.</p>
            </div>
            <div class="value-card">
                <div class="value-header">
                    <i class="fas fa-lightbulb value-icon"></i>
                    <h3>Непрекъснато Развитие</h3>
                </div>
                <p>Екипът ни се стреми към постоянно усъвършенстване и подобряване на ветеринарната практика.</p>
            </div>
        </div>
    </div>
</section>

<section class="doctors-section" style="background-color: var(--white); padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
        <h2 class="section-title">Нашият екип</h2> 
        <div class="doctors-row">
            <div class="doctor-card">
                <div class="doctor-image"><img src="images/dr-Dimityr-Petkov.jpg" alt="Д-р Димитър Петков"></div>
                <h3>Д-р Димитър Петков</h3>
                <p class="doctor-title">Ветеринарен лекар</p>
                <div class="doctor-quote"><i class="fas fa-quote-left"></i><p>Запазвайки живота и здравето на животните, да запазим живота и здравето на хората.</p></div>
            </div>
            <div class="doctor-card">
                <div class="doctor-image"><img src="images/dr-Dradomir-Raikov.jpg" alt="Д-р Драгомир Райков"></div>
                <h3>Д-р Драгомир Райков</h3>
                <p class="doctor-title">Ветеринарен лекар</p>
                <div class="doctor-quote"><i class="fas fa-quote-left"></i><p>Ако не можем да помогнем, да не навредим.</p></div>
            </div>
            <div class="doctor-card">
                <div class="doctor-image"><img src="images/dr-Manoela_Yanlazova.jpg" alt="Д-р Маноела Янлъзова"></div>
                <h3>Д-р Маноела Янлъзова</h3>
                <p class="doctor-title">Ветеринарен лекар</p>
                <div class="doctor-quote"><i class="fas fa-quote-left"></i><p>Максимално доближаване на Ветеринарно - медицинската практика у нас до Хуманно - медицинската практика.</p></div>
            </div>
            <div class="doctor-card">
                <div class="doctor-image"><img src="images/zdraven-menidjar-Krasimira-Petkova.jpg" alt="Красимира Петкова"></div>
                <h3>Красимира Петкова</h3>
                <p class="doctor-title">Здравен мениджър</p>
                <div class="doctor-quote"><i class="fas fa-quote-left"></i><p>Бързо, коректно, вежливо, компетентно, комплексно медицинско и търговско обслужване.</p></div>
            </div>
        </div>
    </div>
</section>

<?php
// Включваме футъра на сайта
include 'footer.php';
?>