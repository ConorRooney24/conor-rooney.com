<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('global.css');
require_once __DIR__ . '/../components/header.php';
require_once __DIR__ . '/../components/action_link.php';
require_once __DIR__ . '/../components/status_label.php';
require_once __DIR__ . '/../components/project_entry_row.php';
register_css('index.css');
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
                    cmp_action_link('GitHub', 'assets/icons/icon_arrow_up_right.svg', 'https://github.com/ConorRooney24', 'section-hero--main--action-link');
                    cmp_action_link('Email', 'assets/icons/icon_arrow_up_right.svg', 'mailto:conor.disrupt739@passmail.net', 'section-hero--main--action-link');
                    ?>
                </div>
            </div>
            <div class="section-hero--side">
                <p>Currently seeking 2027-28 software placement.</p>
            </div>
        </section>

        <section class="section-projects">
            <div class="section-projects--title-bar">
                <h2>Selected Projects</h2>
                <?php cmp_action_link('All Projects', 'assets/icons/icon_arrow_up_right.svg', '/projects.php', 'section-projects--action-link') ?>
            </div>

            <div class="section-projects--table">
                <?php cmp_project_entry_row('01', 'Ardan Engine', 'CPU-Based 3D voxel ray-casting engine', 'C - Python - SDL2 - pthreads', '/projects.php', 'section-projects--table--01') ?>
                <?php cmp_project_entry_row('02', 'AIT', 'Linux AppImage Integration Tool', 'C - Linux - CLI', '/projects.php', 'section-projects--table--02') ?>
                <?php cmp_project_entry_row('03', 'Boru', 'C SDK for AVR Microcontrollers', 'C - AVR - Embedded', '/projects.php', 'section-projects--table--03') ?>
            </div>
        </section>
    </main>
</body>
