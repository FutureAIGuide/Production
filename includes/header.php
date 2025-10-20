<?php
/**
 * Header Template
 * 
 * Common header section for all pages
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo esc($page_description ?? SITE_DESCRIPTION); ?>">
    <meta name="author" content="<?php echo esc(SITE_NAME); ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo esc($page_title ?? SITE_NAME); ?>">
    <meta property="og:description" content="<?php echo esc($page_description ?? SITE_DESCRIPTION); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc(SITE_URL); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo asset('images/favicon.png'); ?>">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo asset('css/main.css'); ?>">
    
    <!-- Google Fonts (Optional) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <title><?php echo esc($page_title ?? SITE_NAME); ?></title>
</head>
<body>
    <header class="navbar">
        <div class="container">
            <nav class="flex items-center justify-between">
                <div class="navbar-brand">
                    <a href="/" class="text-2xl font-bold text-primary">
                        <?php echo esc(SITE_NAME); ?>
                    </a>
                </div>
                
                <ul class="nav flex gap-4">
                    <li><a href="/" class="nav-link <?php echo is_active('index.php'); ?>">Home</a></li>
                    <li><a href="/pages/about.php" class="nav-link <?php echo is_active('about.php'); ?>">About</a></li>
                    <li><a href="/pages/components.php" class="nav-link <?php echo is_active('components.php'); ?>">Components</a></li>
                    <li><a href="/pages/contact.php" class="nav-link <?php echo is_active('contact.php'); ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
