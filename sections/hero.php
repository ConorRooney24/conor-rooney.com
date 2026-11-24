<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('sections/hero.css');
require_once __DIR__ . '/../components/action_link.php';
require_once __DIR__ . '/../components/status_label.php';
require_once __DIR__ . '/../components/button_icon.php';

function sec_hero() {
?>
<section class="sec-hero">
    <div class="sec-hero--main">
        <?php cmp_status_label('COMPUTER SCIENCE STUDENT BELFAST') ?>
        <h1>Building software</h1>
        <h1>close to the machine.</h1>
        <p>I'm a second year Computer Science student at Queen's University Belfast, with a strong interest in systems programming, low-level computing, and building practical software projects</p>
        <div>
            <?php
            cmp_action_link('GitHub', 'assets/icons/icon_arrow_up_right.svg', 'https://github.com/ConorRooney24', 'sec-hero--main--action-link');
            cmp_action_link('Email', 'assets/icons/icon_arrow_up_right.svg', 'mailto:conor.disrupt739@passmail.net', 'sec-hero--main--action-link');
            cmp_button_icon('assets/icons/icon_download.svg', 'Download CV', '/cv.php');
            ?>
        </div>
    </div>
    <div class="sec-hero--side">
        <p>Currently seeking 2027-28 software placement.</p>
    </div>
</section>
<?php
}
