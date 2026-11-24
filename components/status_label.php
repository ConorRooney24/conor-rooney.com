<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/status_label.css');

function cmp_status_label($text) {
?>
<span class="cmp-status-label">
    <span class="cmp-status-label--dot"></span>
    <span class="cmp-status-label--text"><?php echo htmlspecialchars($text) ?></span>
</span>

<?php
}
