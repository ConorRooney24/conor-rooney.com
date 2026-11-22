<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('global.css');
require_once __DIR__ . '/../components/header.php';
register_css('coming_soon.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Conor Rooney - Coming Soon</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content=""/>
    <?php generate_css_links(); ?>
</head>

<body>
    <?php cmp_header(); ?>

    <main>
        <h1>Coming Soon</h1>
        <p>This content is currently not available as this website is still in development.</p>
        <p>Please check back in a few day's or take a look at the <a style="text-decoration: underline;"  href="https://github.com/ConorRooney24/conor-rooney.com">GitHub Repo</a> for this site.</p>
    </main>
</body>
