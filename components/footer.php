<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/footer.css');
require_once __DIR__ . '/svg_icon.php';
require_once __DIR__ . '/action_link.php';

function cmp_footer() {
?>
<footer class="cmp-footer">
    <div class="cmp-footer--bio">
        <div class="cmp-footer--bio--info">
            <p class="cmp-footer--bio--info--name">conor rooney</p>
            <p class="cmp-footer--bio--info--description">Computer Science stutent at Queen's University Belfast.</p>
        </div>
        <ul class="cmp-footer--bio--socials">
            <li><a href="https://github.com/ConorRooney24"><?php cmp_svg_icon('assets/icons/icon_github.svg') ?></a></li>
            <li><a href="https://www.linkedin.com/in/conor-rooney-84bb50414"><?php cmp_svg_icon('assets/icons/icon_linkedin.svg') ?></a></li>
            <li><a href="https://leetcode.com/u/conorrooney24"><?php cmp_svg_icon('assets/icons/icon_leetcode.svg') ?></a></li>
        </ul>
    </div>

    <nav class="cmp-footer--nav">
        <div>
            <h3 class="cmp-footer--nav--navigation">Navigation</h3>
            <ul>
                <li><?php cmp_action_link('Projects', '', '/projects.php', '') ?></li>
                <li><?php cmp_action_link('Education', '', '/education.php', '') ?></li>
                <li><?php cmp_action_link('Contact', '', '/contact.php', '') ?></li>
            </ul>
        </div>
        <div class="cmp-footer--nav--resources">
            <h3>Resources</h3>
            <ul>
                <li><?php cmp_action_link('GitHub', 'assets/icons/icon_arrow_up_right.svg', 'https://github.com/ConorRooney24', '') ?></li>
                <li><?php cmp_action_link('LinkedIn', 'assets/icons/icon_arrow_up_right.svg', 'https://www.linkedin.com/in/conor-rooney-84bb50414', '') ?></li>
                <li><?php cmp_action_link('Download CV', 'assets/icons/icon_download.svg', '/cv.php', '') ?></li>
            </ul>
        </div>
    </nav>

    <div class="cmp-footer--version">
        <?php cmp_status_label('V' . trim(file_get_contents(__DIR__ . '/../VERSION'))) ?>
        <p>© 2026 Conor Rooney. All Rights Reserved.</p>
    </div>
</footer>
<?php
}
