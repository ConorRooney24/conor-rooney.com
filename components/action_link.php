<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/action_link.css');

require_once __DIR__ . '/svg_icon.php';

// Takes an absolute path
function cmp_action_link($text, $icon_path, $link) {
    ?>

    <a class= "cmp_action_link" href="<?php echo htmlspecialchars($link) ?>">
        <span><?php echo htmlspecialchars($text) ?></span>

        <?php
        cmp_svg_icon($icon_path)
        ?>

    </a>

    <?php
}
