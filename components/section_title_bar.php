<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/section_title_bar.css');
require_once __DIR__ . '/action_link.php';

function cmp_section_title_bar($title = 'Title',
                               $large_text = NULL,
                               $large_icon = 'assets/icons/icon_download.svg',
                               $medium_text = NULL,
                               $medium_icon = NULL,
                               $small_text = NULL,
                               $small_icon = NULL,
                               $class = '') {

    if ($large_text == NULL) {
        $large_text = 'Large';
        $medium_text = 'Medium';
        $small_text = 'Small';
    }

    $medium_icon = $large_icon;
    $small_icon = $medium_icon;
?>
<div class="cmp-section-title-bar <?php echo htmlspecialchars($class) ?>">
    <h2><?php echo htmlspecialchars($title) ?></h2>
    <?php cmp_action_link($large_text, $large_icon, $link, 'cmp-section-title-bar--action-link-large') ?>
    <?php cmp_action_link($medium_text, $medium_icon, $link, 'cmp-section-title-bar--action-link-medium') ?>
    <?php cmp_action_link($small_text, $small_icon, $link, 'cmp-section-title-bar--action-link-small') ?>
</div>
<?php
}
