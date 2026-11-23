<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/button_icon.css');
require_once __DIR__ . '/svg_icon.php';

function cmp_button_icon($icon_path, $text, $link) {
?>
<a class="cmp-button-icon" href="<?php echo htmlspecialchars($link) ?>">
    <?php cmp_svg_icon($icon_path) ?>
    <p><?php echo htmlspecialchars($text) ?></p>
</a>
<?php
}
