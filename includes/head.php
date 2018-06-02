<?php
    $config_files = file_get_contents("includes/config.json");
    $config = json_decode($config_files, FALSE);
?>
<title><?= $config->title ?></title>

<!-- Metatags básicas do site -->
<meta charset="UTF-8">
<meta http-equiv="content-language" content="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= $config->desc ?>">
<meta name="author" content="<?= $config->author ?>">

<!-- Metatags para redes sociais -->
<meta property="og:title" content="<?= $config->title ?>">
<meta property="og:description" content="<?= $config->desc ?>">
<meta property="og:url" content="<?= $config->url ?>">
<meta name="twitter:card" content="summary_large_image">

<!-- Links de Favicon para diferentes situações -->
<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
<link rel="manifest" href="img/favicons/site.webmanifest">
<link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="<?= $config->color ?>">
<link rel="shortcut icon" href="img/favicons/favicon.ico">

<!-- Informaçoes de cores da página para navegadores Mobile -->
<meta name="msapplication-config" content="site/img/icons/browserconfig.xml">
<meta name="theme-color" content="<?= $config->color ?>">
<meta name="msapplication-TileColor" content="<?= $config->color ?>">
<meta name="msapplication-navbutton-color" content="<?= $config->color ?>">
<meta name="apple-mobile-web-app-status-bar-style" content="<?= $config->color ?>">

<script src="js/jquery.min.js"></script>
<script src="js/ripple.js"></script>

<!-- Informações de estilização -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">