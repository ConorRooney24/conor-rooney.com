<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('global.css');
register_css('index.css');
require_once __DIR__ . '/../components/header.php';
require_once __DIR__ . '/../components/action_link.php';
require_once __DIR__ . '/../components/status_label.php';
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

    <main>
        <section class="section-hero">
            <div class="section-hero--main">
                <?php cmp_status_label('COMPUTER SCIENCE STUDENT BELFAST') ?>
                <h1>Building software</h1>
                <h1>close to the machine.</h1>
                <p>I'm a second year Computer Science student at Queen's University Belfast, with a strong interest in systems programming, low-level computing, and building practical software projects</p>
                <div>
                    <?php
                    cmp_action_link('GitHub', 'assets/icons/icon_download.svg', 'https://github.com/', '');
                    cmp_action_link('Email', 'assets/icons/icon_download.svg', 'https://github.com/', '');
                    ?>
                </div>
            </div>
            <div class="section-hero--side">
                <p>Currently seeking 2027-28 software placement.</p>
            </div>
        </section>
    </main>
</body>
