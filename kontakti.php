<?php
    // Дефинираме заглавието на страницата
    $pageTitle = "Контакти | Ветеринарен център Петкови";

    include 'header.php'; // Включваме хедъра
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/uslugi.css">
<main class="contact-page-content">
    <!-- Голяма снимка под менюто по цялата ширина -->
    <div class="contact-banner">
        <img src="images/kontakti1.jpg" alt="Ветеринарен център Петкови" class="contact-banner-image">
    </div>

    <div class="container">
        <h1 class="section-title">Свържете се с нас</h1>

        <!-- Контактна информация -->
        <div class="contact-info-section">
            <div class="contact-boxes">
                <div class="contact-box">
                    <div class="box-content">
                        <strong><i class="fas fa-map-marker-alt"></i> Адрес</strong>
                        <p>гр. Варна, кв. Левски, ул. „Никола Козлев" 5</p>
                        <a href="https://www.google.com/maps?q=43.222234,27.916975" class="btn-directions" target="_blank">
                            <i class="fas fa-directions"></i> Направление
                        </a>
                    </div>
                </div>

                <div class="contact-box">
                    <div class="box-content">
                        <strong><i class="fas fa-phone-alt"></i> Телефони</strong>
                        <div class="phone-group">
                            <a href="tel:052333379">052 333 379</a>
                            <a href="tel:0888951387">0888 95 13 87</a>
                        </div>
                        <div class="phone-group">
                            <a href="tel:052300100">052 300 100</a>
                        </div>
                    </div>
                </div>

                <div class="contact-box">
                    <div class="box-content">
                        <strong><i class="fas fa-envelope"></i> Имейл и социални мрежи</strong>
                        <p><a href="mailto:vkpetkovi@abv.bg">vkpetkovi@abv.bg</a></p>
                        <div class="social-icons">
                            <a href="#" class="social-link facebook-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Карта на цял екран за по-добра видимост -->
        <div class="full-width-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.9361939571416!2d27.91439967665068!3d43.22223737112369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a455d047435c2d%3A0x44c26f7a1255a97e!2z0JLQtdGC0LXRgNC40L3QsNGA0LXQvdGLINC40L3RgtGC0YAg0J_QtdGC0LrQvtCy0Lg!5e0!3m2!1sbg!2sbg!4v1712422013774!5m2!1sbg!2sbg"
                width="100%" height="450" style="border:0;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- Как да стигнете до нас - всички елементи на един ред -->
        <div class="directions-section">
            <div class="directions-row">
                <!-- Снимка карта -->
                <div class="direction-item map-image">
                    <img src="images/karta.jpg" alt="Карта" width="397" height="216">
                </div>

                <!-- С автомобил -->
                <div class="direction-item transport-info">
                    <div class="info-content">
                        <strong><i class="fas fa-car"></i> С автомобил</strong>
                        <p>До клиниката има удобен паркинг, който можете да използвате безплатно по време на посещението си.</p>
                    </div>
                </div>

                <!-- С автобус -->
                <div class="direction-item transport-info">
                    <div class="info-content">
                        <strong><i class="fas fa-bus"></i> С&nbsp;автобус</strong>
                        <p>В близост минават автобусни линии 409 и 209. Слезте на спирка "ХЕИ" на бул. Васил Левски и след 5 минути пеша ще достигнете до нас.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Стилове за страницата с контакти */
    .contact-page-content {
        padding: 0 0 40px 0; /* Премахнат горен падинг заради банер снимката */
    }

    /* Стил за голямата снимка под менюто */
    .contact-banner {
        width: 100%;
        margin-bottom: 30px;
        overflow: hidden;
    }

    .contact-banner-image {
        width: 100%;
        display: block;
    }

    .contact-info-section,
    .directions-section {
        margin-bottom: 30px;
    }

    /* Хоризонтално подреждане на контактните боксове */
    .contact-boxes {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 30px;
    }

    /* Стилове за всеки контактен бокс */
    .contact-box {
        background-color: var(--white);
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        overflow: hidden;
        position: relative;
        height: 100%;
        display: flex;
    }

    .contact-box::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px; /* По-тънка синя линия */
        background-color: var(--secondary-color); /* Светлосин цвят */
    }

    .box-content {
        padding: 25px;
        flex-grow: 1;
    }

    .box-content strong {
        display: flex;
        align-items: center;
        font-size: 1.1rem;
        color: var(--primary-color);
        margin-bottom: 15px;
    }

    .box-content strong i {
        margin-right: 10px;
        color: var(--secondary-color);
    }

    .box-content p {
        margin-bottom: 15px;
        color: var(--text-color);
    }

    .phone-group {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 10px;
    }

    .phone-group:last-child {
        margin-bottom: 0;
    }

    .phone-group a {
        color: var(--text-color); /* Същият цвят като адреса */
        text-decoration: none;
        font-weight: normal; /* Премахнат bold */
    }

    .phone-group a:hover {
        text-decoration: underline;
        color: var(--secondary-color);
    }

    .btn-directions {
        display: inline-flex;
        align-items: center;
        background-color: var(--secondary-color);
        color: var(--white);
        padding: 8px 15px;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s;
        font-weight: 500;
        margin-top: 10px;
    }

    .btn-directions:hover {
        background-color: var(--accent-color);
        color: var(--white);
    }

    .btn-directions i {
        margin-right: 8px;
    }

    /* Социални мрежи */
    .social-icons {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 15px;
    }

    .social-link {
        display: inline-flex;
        align-items: center;
        color: var(--text-color); /* Същият цвят като адреса */
        text-decoration: none;
        transition: color 0.3s;
    }

    .facebook-link {
        color: #1877F2; /* Син цвят за Facebook */
    }

    .social-link:hover {
        text-decoration: underline;
        color: var(--secondary-color);
    }

    .facebook-link:hover {
        color: #0e5dc4; /* По-тъмен син цвят при hover за Facebook */
    }

    .social-link i {
        margin-right: 5px;
    }

    /* Карта */
    .full-width-map {
        margin-bottom: 30px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Секция с насоки в един ред */
    .directions-row {
        display: grid;
        grid-template-columns: 397px 1fr 1fr;
        gap: 20px;
        align-items: stretch;
    }

    /* Стил за снимката */
    .map-image {
        border-radius: 8px;
        overflow: hidden;
    }

    .map-image img {
        display: block;
        width: 397px;
        height: 216px;
        object-fit: cover;
    }

    /* Стил за елементите с информация за транспорт */
    .transport-info {
        position: relative;
        padding-left: 0; 
        height: 100%;
    }

    .info-content {
        padding: 15px 15px 15px 20px;
        height: 100%;
        position: relative;
        border-left: 3px solid var(--secondary-color); /* По-тънка синя линия */
        background-color: var(--white);
    }

    .info-content strong {
        display: flex;
        align-items: center;
        font-size: 1.1rem;
        color: var(--primary-color);
        margin-bottom: 10px;
    }

    .info-content strong i {
        margin-right: 10px;
        color: var(--secondary-color);
    }

    .info-content p {
        color: var(--text-color);
        margin: 0;
    }

    /* Медийни заявки за малки екрани */
    @media (max-width: 1100px) {
        .directions-row {
            grid-template-columns: 1fr 1fr;
        }

        .map-image {
            grid-column: 1 / span 2;
            text-align: center;
        }

        .map-image img {
            width: 100%;
            max-width: 397px;
            height: auto;
        }
    }

    @media (max-width: 992px) {
        .contact-boxes {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .contact-page-content {
            padding-bottom: 20px;
        }

        .full-width-map iframe {
            height: 300px;
        }

        .contact-boxes {
            grid-template-columns: 1fr;
        }

        .phone-group {
            flex-direction: column;
            gap: 8px;
        }

        .directions-row {
            grid-template-columns: 1fr;
        }

        .map-image {
            grid-column: 1;
        }
    }

    @media (max-width: 576px) {
        .full-width-map iframe {
            height: 250px;
        }
    }
</style>

<?php include 'footer.php'; // Включваме футъра ?>
