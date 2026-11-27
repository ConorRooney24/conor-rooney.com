<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('components/project_entry_row.css');

function cmp_project_entry_row($number, $title, $description, $tags, $link, $class) {
?>
<a class="cmp-project-entry-row <?php echo htmlspecialchars($class) ?>" href="<?php echo htmlspecialchars($link)?>">
    <div class="cmp-project-entry-row--header">
        <p class="cmp-project-entry-row-number"><?php echo htmlspecialchars($number) ?></p>
        <p class="cmp-project-entry-row-title"><?php echo htmlspecialchars($title) ?></p>
    </div>

    <div class="cmp-project-entry-row--content">
        <p class="cmp-project-entry-row-description"><?php echo htmlspecialchars($description) ?></p>
        <p class="cmp-project-entry-row-tags"><?php echo htmlspecialchars($tags) ?></p>
    </div>
</a>
<?php
}
