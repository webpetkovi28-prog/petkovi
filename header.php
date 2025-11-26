<?php
// header.php – обновен с Font Awesome 6.5.0
?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ветеринарен център Петкови</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome 6.5.0 с integrity -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          />

    <!-- Основен стил -->
    <link rel="stylesheet" href="css/gem-style2.css">
    <link rel="stylesheet" href="css/catalog.css">
</head>
<body>
<header class="main-header">
    <div class="container">
        <div class="header-top">
            <div class="logo-container">
                <img src="images/logo.jpg" alt="Лого Ветеринарен център Петкови" class="site-logo">
                <div class="site-title">
                    <h1>Ветеринарен център Петкови</h1>
                </div>
            </div>
            <div class="emergency-phone">
                <a href="tel:0888951387" class="btn-primary phone-button">
                    <i class="fas fa-phone-volume"></i>
                    <span class="btn-separator"></span>
                    0888 95 13 87
                </a>
            </div>

            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>

    <div class="nav-wrapper">
        <div class="container">
            <nav class="main-nav">
                <?php include 'template-parts/nav-menu.php'; ?>
            </nav>
        </div>
    </div>
</header>
