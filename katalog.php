<?php include 'header.php'; ?>

<section class="catalog-section">
    <div class="container">
        <h2 class="section-title">Продуктов каталог</h2>

        <div class="product-grid">
            <?php
            $products = [
                'Classic-Friends-пелети-за-гризачи-60-л',
                'Oscar cat 20кг микс меса',
                'Гребен двустранен',
                'Гребен филиращ',
                'Комплект твърди гумени играчки',
                'Легла - камъшит',
                'Нагръдник MC Leather',
                'Нагръдник светлоотразителен регулируем син',
                'Нагръдник светлоотразителен регулируем',
                'Нашийник Zooleszcz',
                'Нашийник кожа Super Doggy1',
                'Строг нашийник',
                'Тоалетна STARTER KITTEN white 37 см',
                'Тоалетна закрита ъглова Flip-Cat',
                'Тоалетна с борд ARIST-O-TRAY 42 см',
                'Тоалетна с борд Hercules SILHOUETTE',
                'Транспорта чанта Mendi',
                'Трева за котки Zolux',
                'Трева за котки',
                'Удавник двоен колие',
                'Хранилка PVC',
                'Цветна топка плетена',
                'Четка двустранна голяма',
                'Четки иглени'
            ];

            $counter = 1;
            foreach ($products as $product) {
                $imagePath = "images/catalog/{$product}.png";
                ?>
                <div class="product-card">
                    <div class="product-number"><?php echo $counter; ?></div>
                    <div class="product-image-container">
                        <img src="<?php echo $imagePath; ?>" alt="<?php echo $product; ?>" class="product-image" onclick="openModal('<?php echo $imagePath; ?>', '<?php echo $product; ?>')">
                    </div>
                    <h3 class="product-name"><?php echo $product; ?></h3>
                </div>
                <?php
                $counter++;
            }
            ?>
        </div>
    </div>
</section>

<!-- Модален прозорец за увеличаване на снимки -->
<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <img id="modalImage" src="" alt="">
        <div id="modalCaption"></div>
    </div>
</div>

<script src="js/catalog-modal.js"></script>

<?php include 'footer.php'; ?>
