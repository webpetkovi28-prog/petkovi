<?php
// proekti.php – страница „Проекти"
include 'header.php';
?>
<main class="projects-page">
    <!-- Локален стил само за тази страница -->
    <style>
        /* Контейнер за всеки PDF */
        .pdf-container {
            margin-bottom: 50px;
        }
        
        /* Заглавие на PDF секция */
        .pdf-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }
        
        /* Рамка за PDF-ите */
        .pdf-frame {
            width: 100%;
            height: 100vh;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            display: block;
            margin: 0;
            padding: 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        /* На по-малки екрани */
        @media (max-width: 768px) {
            .pdf-frame { 
                height: 80vh; 
            }
            .pdf-title {
                font-size: 1.2rem;
            }
        }
        
        /* Разделител между PDF-ите */
        .pdf-divider {
            margin: 60px 0;
            border-top: 2px solid #e9ecef;
        }
    </style>
    
    <section class="section">
        <div class="container">
            <h1 class="section-title">Нашите проекти</h1>
            
            <!-- PDF #1 - Проект BG16RFPR001-1.004-1784 -->
            <div class="pdf-container">
                <h2 class="pdf-title">Проект: Инвестиции за подобряване на производствения капацитет</h2>
                <iframe
                    src="images/eu/proekti.pdf#toolbar=0&navpanes=0&scrollbar=0"
                    class="pdf-frame"
                    scrolling="no"
                    title="Проект BG16RFPR001-1.004-1784">
                </iframe>
            </div>
            
            <!-- Разделител -->
            <div class="pdf-divider"></div>
            
            <!-- PDF #2 - Информационен лист за проекта -->
            <div class="pdf-container">
                <h2 class="pdf-title">Информационен лист - Подобряване на производствения капацитет</h2>
                <iframe
                    src="images/eu/eu.pdf#toolbar=0&navpanes=0&scrollbar=0"
                    class="pdf-frame"
                    scrolling="no"
                    title="Информационен лист за проекта">
                </iframe>
            </div>
        </div>
    </section>
</main>
<?php
include 'footer.php';
?>