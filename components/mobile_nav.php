<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/mobile_nav.css');
require_once __DIR__ . '/../helpers/js_registrar.php';
register_js('mobile_nav.js');

function cmp_mobile_nav() {
?>
<nav class="cmp-mobile-nav--menu" id="cmp-mobile-nav--menu">
    <ul>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="education.php">Education</a></li>
        <li><a href="experience.php">Experience</a></li>
        <li><a href="skills.php">Skills</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<div class="cmp-mobile-nav--button" id="cmp-mobile-nav--button">
    <span></span>
    <span></span>
    <span></span>
</div>
<?php
}
