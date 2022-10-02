<?php defined('BLUDIT') or die('Unauthorized access!');?>
<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<?= Theme::metaTags( 'title' ); ?>
<?= Theme::metaTags( 'description' ); ?>
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="dns-prefetch" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://code.jquery.com" crossorigin>
<link rel="dns-prefetch" href="https://code.jquery.com" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css" integrity="sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css" integrity="sha256-RdH19s+RN0bEXdaXsajztxnALYs/Z43H/Cdm1U4ar24=" crossorigin="anonymous" referrerpolicy="no-referrer">
<?= Theme::css( 'css/style.css' ); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?= $site->url(); ?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $site->url(); ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $site->url(); ?>/favicon-16x16.png">
<?= Theme::favicon('favicon.ico', 'image/x-icon');?>
<link rel="manifest" href="<?= $site->url(); ?>/site.webmanifest">
<link rel="mask-icon" href="<?= $site->url(); ?>/safari-pinned-tab.svg" color="#273a3f">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#161717">
<?php Theme::plugins( 'siteHead' ); ?>
