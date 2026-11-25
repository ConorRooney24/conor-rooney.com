<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
require_once __DIR__ . '/svg_icon.php';
register_css('components/notification.css');

function cmp_notification($title = 'Title', $description = 'description') {
?>
<div class="cmp-notification">
    <?php cmp_svg_icon('assets/icons/icon_x.svg') ?>
    <p class="cmp-notification--title"><?php echo htmlspecialchars($title) ?></p>
    <p><?php echo htmlspecialchars($description) ?></p>
</div>
<?php
}
