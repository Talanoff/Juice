<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css"
          integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css"
          integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
</head>
<body <?php body_class(); ?>>

<header id="app-header" class="py-3 lg:py-0">
    <div class="container px-2">
        <div class="flex nav-container">
            <a href="#start">
                <img src="<?php echo get_theme_file_uri('images/juice-logo--white.png') ?>" alt="JUICE">
            </a>

            <div id="toggle">
                <span></span>
            </div>

            <nav id="nav">
                <a href="#start" class="is-active">Start</a>
                <a href="#about">About Us</a>
                <a href="#clients">Clients</a>
                <a href="#processes">Processes</a>
                <a href="#services">Services</a>
                <a href="#contacts">Contacts</a>
            </nav>
        </div>
    </div>
</header>

<main role="main">