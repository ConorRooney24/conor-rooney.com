<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('sections/projects.css');
require_once __DIR__ . '/../components/project_entry_row.php';
require_once __DIR__ . '/../components/section_title_bar.php';

function sec_projects() {
?>
<section class="sec-projects">
    <?php cmp_section_title_bar(title: 'Selected Projects', large_icon: 'assets/icons/icon_arrow_up_right.svg', large_text: 'All Projects', medium_text: 'Projects', small_text: 'All') ?>

    <div class="sec-projects--table">
        <?php cmp_project_entry_row('01', 'Ardan Engine', 'CPU-Based 3D voxel ray-casting engine', 'C - Python - SDL2 - pthreads', '/projects.php', 'sec-projects--table--01') ?>
        <?php cmp_project_entry_row('02', 'AIT', 'Linux AppImage Integration Tool', 'C - Linux - CLI', '/projects.php', 'sec-projects--table--02') ?>
        <?php cmp_project_entry_row('03', 'Boru', 'C SDK for AVR Microcontrollers', 'C - AVR - Embedded', '/projects.php', 'sec-projects--table--03') ?>
    </div>
</section>
<?php
}
