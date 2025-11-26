<?php
    $currentPageService = 'patuvane-v-chuzhbina';
    $pageTitle = "Пътуване в чужбина | Ветеринарен център Петкови";
    include 'header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="css/uslugi.css">
<main class="usluga-page-content">
    <div class="container">

        <div class="mobile-services-menu">
            <h3>Нашите Услуги</h3>
            <select id="mobileServiceSelect" onchange="goToSelectedService()">
                <option value="">Изберете друга услуга...</option>
                <?php
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
                        $selected_attr = ($file === $currentPageService) ? ' selected' : '';
                        $disabled_attr = ($file === $currentPageService) ? ' disabled' : '';
                        echo '<option value="' . $file . '.php"' . $selected_attr . $disabled_attr . '>' . $name . '</option>';
                    }
                    unset($_temp_services_for_select);
                ?>
            </select>
        </div>

        <div class="usluga-layout-grid">

            <aside class="usluga-sidebar">
                <h3>Нашите Услуги</h3>
                <nav>
                    <ul class="usluga-sidebar-menu">
                        <?php include 'template-parts/uslugi-sidebar-menu.php'; ?>
                    </ul>
                </nav>
            </aside>

            <article class="usluga-main-content">
                <h1>Пътуване с домашен любимец в чужбина</h1>

                <div class="usluga-content-wrapper">
                    <img src="images/uslugi/patuvane-v-chuzhbina.png" alt="Пътуване с домашен любимец" class="usluga-image">

                    <div class="usluga-text">
                        <h2>Подготовка за пътуване без стрес</h2>
                        <p>Ако сте решили да пътувате с домашния си любимец в друга държава, е важно да знаете какви документи и ветеринарни мерки са необходими. Ветеринарен център „Петкови" ще Ви съдейства на всяка стъпка.</p>

                        <h3>Пътуване в Европейския съюз</h3>
                        <ul class="service-features-list">
                            <li class="passport">Европейски паспорт с лични данни на стопанина и животното</li>
                            <li class="microchip">Регистриран микрочип (ISO 11784/11785)</li>
                            <li class="vaccine">Ваксинация против бяс и медальон</li>
                            <li class="parasites">Третиране срещу паразити и ехинококоза</li>
                            <li class="checkup">Клиничен преглед преди отпътуване</li>
                        </ul>

                        <h3>Пътуване извън Европейския съюз</h3>
                        <div class="service-highlights">
                            <div class="highlight-box">
                                <h4><i class="fas fa-dog"></i> Специфични изисквания</h4>
                                <p>Всяка страна има индивидуални изисквания – информирайте се чрез посолството или БАБХ.</p>
                            </div>
                            <div class="highlight-box">
                                <h4><i class="fas fa-vials"></i> Серология и ваксинации</h4>
                                <p>Някои страни изискват серологичен тест за бяс, извършен в одобрена лаборатория.</p>
                            </div>
                        </div>

                        <h3>Как можем да помогнем?</h3>
                        <div class="timeline">
                            <div class="timeline-item timeline-passport" style="--animation-order:1">
                                <div class="timeline-content">
                                    <strong>Издаване на паспорт</strong> – европейски и международен.
                                </div>
                            </div>
                            <div class="timeline-item timeline-microchip" style="--animation-order:2">
                                <div class="timeline-content">
                                    <strong>Микрочипиране</strong> – поставяне и регистрация.
                                </div>
                            </div>
                            <div class="timeline-item timeline-vaccine" style="--animation-order:3">
                                <div class="timeline-content">
                                    <strong>Ваксинации и тестове</strong> – против бяс и други задължителни.
                                </div>
                            </div>
                            <div class="timeline-item timeline-docs" style="--animation-order:4">
                                <div class="timeline-content">
                                    <strong>Сертификати и документи</strong> – съдействие при издаване и заверки от БАБХ.
                                </div>
                            </div>
                            <div class="timeline-item timeline-hotel" style="--animation-order:5">
                                <div class="timeline-content">
                                    <strong>Зоохотел</strong> – ако не можете да вземете любимеца си със себе си.
                                </div>
                            </div>
                        </div>

                        <p>За трети страни проверете официалната страница на БАБХ: <a href="http://babh.government.bg/bg/travelling-pets-third-countries.html" target="_blank">babh.government.bg</a>.</p>

                        <div class="service-cta">
                            <h3>Планирате пътуване с любимеца си?</h3>
                            <a href="kontakti.php" class="btn-white">Свържете се с нас</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>

<script>
    function goToSelectedService() {
        const select = document.getElementById('mobileServiceSelect');
        const value = select.value;
        if (value) {
            window.location.href = value;
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.classList.contains('animate')) {
                        const order = entry.target.style.getPropertyValue('--animation-order') || 0;
                        entry.target.style.animationDelay = `${order * 0.1}s`;
                        entry.target.classList.add('animate');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.timeline-item').forEach((item, index) => {
                if (!item.style.getPropertyValue('--animation-order')) {
                    item.dataset.order = index + 1;
                }
                observer.observe(item);
            });
        }
    });
</script>

<?php include 'footer.php'; ?>