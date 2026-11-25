<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('global.css');
require_once __DIR__ . '/../components/header.php';
require_once __DIR__ . '/../components/mobile_nav.php';
require_once __DIR__ . '/../components/notification.php';
require_once __DIR__ . '/../sections/hero.php';
require_once __DIR__ . '/../sections/projects.php';
require_once __DIR__ . '/../sections/education_experience.php';
register_css('index.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Conor Rooney - Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content=""/>
    <link rel="icon" href="/assets/favicons/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="/assets/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/assets/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="apple-touch-icon" href="/assets/favicons/apple-touch-icon.png">
    <?php generate_css_links(); ?>
    <?php generate_js_scripts(); ?>
</head>

<body>
    <?php cmp_header(); ?>

    <main>
        <?php sec_hero(); ?>
        <?php sec_projects(); ?>
        <?php cmp_notification(title: 'Work In Progress.', description: 'This website is still a work in progress. Many features are missing. The latest changes and progress can be seen on my GitHub.'); ?>
        <?php sec_education_experience(); ?>
    </main>

    <?php cmp_mobile_nav() ?>
</body>
