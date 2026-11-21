<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('global.css');
require_once __DIR__ . '/../components/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Conor Rooney - Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content=""/>
    <?php generate_css_links(); ?>
</head>

<body>
    <?php cmp_header(); ?>
</body>
