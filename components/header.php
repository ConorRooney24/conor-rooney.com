<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/header.css');
require_once __DIR__ . '/action_link.php';

function cmp_header() {
?>
<header class="cmp_header">
    <a href="/index.php" class="cmp_header__title"><h1>Conor Rooney</h1></a>

    <nav class="cmp_header__nav">
        <ul>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li><a href="skills.php">Skills</a></li>
            <li><a href="contact.php">Sontact</a></li>
        </ul>
    </nav>

    <?php cmp_action_link('Download CV', '../public/assets/icons/icon_download.svg', 'cv.php', 'cmp_header__download'); ?>
</header>
<?php
}
