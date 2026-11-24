<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('global.css');
require_once __DIR__ . '/../components/header.php';
require_once __DIR__ . '/../components/project_entry_row.php';
require_once __DIR__ . '/../components/experience_card.php';
require_once __DIR__ . '/../components/mobile_nav.php';
require_once __DIR__ . '/../components/section_title_bar.php';
require_once __DIR__ . '/../sections/hero.php';
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

        <section class="section-projects">
            <?php cmp_section_title_bar(title: 'Selected Projects', large_icon: 'assets/icons/icon_arrow_up_right.svg', large_text: 'All Projects', medium_text: 'Projects', small_text: 'All') ?>

            <div class="section-projects--table">
                <?php cmp_project_entry_row('01', 'Ardan Engine', 'CPU-Based 3D voxel ray-casting engine', 'C - Python - SDL2 - pthreads', '/projects.php', 'section-projects--table--01') ?>
                <?php cmp_project_entry_row('02', 'AIT', 'Linux AppImage Integration Tool', 'C - Linux - CLI', '/projects.php', 'section-projects--table--02') ?>
                <?php cmp_project_entry_row('03', 'Boru', 'C SDK for AVR Microcontrollers', 'C - AVR - Embedded', '/projects.php', 'section-projects--table--03') ?>
            </div>
        </section>

        <section class="section-education-experience">

            <section class="section-education">
                <?php cmp_section_title_bar(title: 'Education', large_icon: 'assets/icons/icon_arrow_up_right.svg', large_text: 'All Education', medium_text: 'Education', small_text: 'All') ?>

                <?php cmp_experience_card('Queen\'s University Belfast', 'BSc Computer Science', '2025 - 2029', 'First Class Results in First Year', '/education.php') ?>
                <?php cmp_experience_card('Southern Regional College', 'Level 3 National Extended Diploma in IT', '2023 - 2025', 'Top Marks Equivalent to A*A*A* at A-Level', '/education.php') ?>
            </section>

            <section class="section-experience">
                <?php cmp_section_title_bar(title: 'Experience', large_icon: 'assets/icons/icon_arrow_up_right.svg', large_text: 'All Experience', medium_text: 'Experience', small_text: 'All') ?>

                <?php cmp_experience_card('Electronic Repairs Technician', 'Freelance', '2021 - Present', 'Experience with Diagnosing and Repairing Hardware.', '/education.php') ?>
                <?php cmp_experience_card('IT Support Technician', 'SRC Newry East Campus', '2025', 'Offering IT Support to 15+ Team Members Daily.', '/education.php') ?>
            </section>
        </section>
    </main>

    <?php cmp_mobile_nav() ?>
</body>
