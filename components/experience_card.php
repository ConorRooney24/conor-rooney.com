<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/experience_card.css');

function cmp_experience_card($title, $subtitle, $date, $description, $link) {
?>
    <a class="cmp-experience-card" href="<?php echo htmlspecialchars($link) ?>">
    <h3 class="cmp-experience-card--title"><?php echo htmlspecialchars($title) ?></h3>
    <p class="cmp-experience-card--subtitle"><?php echo htmlspecialchars($subtitle) ?></p>
    <p class="cmp-experience-card--date"><?php echo htmlspecialchars($date) ?></p>
    <p class="cmp-experience-card--description"><?php echo htmlspecialchars($description) ?></p>
</a>
<?php
}
