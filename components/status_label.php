<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/status_label.css');

function cmp_status_label($text) {
?>
<span class="cmp_status_label">
    <span class="cmp_status_label__dot"></span>
    <span class="cmp_status_label__text"><?php echo htmlspecialchars($text) ?></span>
</span>

<?php
}
