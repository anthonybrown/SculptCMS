<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php site_title(); ?> : <?php page_title(); ?></title>

    <!-- Add to homescreen -->
    <link rel="manifest" href="manifest.json">

    <!-- Fallback to homescreen for Chrome <39 on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <meta name="theme-color" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- Page styles -->
    <link rel="stylesheet" href="./system/appearance/system.css">
    <link rel="stylesheet" href="extras/themes/gwsk/css/main.css">
  </head>
  <body>
    <header class="app-bar promote-layer">
      <div class="app-bar-container">
<button class="menu"><img src="<?php theme_location(); ?>images/hamburger.png" alt="Menu"></button>        <h1 class="logo"><?php site_title(); ?></h1>
        <section class="app-bar-actions">
        <!-- Put App Bar Buttons Here -->
        <!-- e.g <button><i class="icon icon-star"></i></button> -->
        </section>
      </div>
    </header>

    <nav class="navdrawer-container promote-layer">
      <h4>Navigation</h4>
      <?php
        show_nav();
      ?>
    </nav>

    <main>
      <div id="content" class="sc-content-main">
        <?php page_text($current_page);?>
      </div>
    </main>

    <!-- build:js scripts/main.min.js -->
    <script src="extras/themes/gwsk/scripts/main.js"></script>
    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Built with love using Web Starter Kit -->
  </body>
</html>
