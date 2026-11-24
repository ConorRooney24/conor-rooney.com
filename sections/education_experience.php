<?php
require_once __DIR__ . '/../helpers/css_registrar.php';
register_css('sections/education_experience.css');
require_once __DIR__ . '/../components/experience_card.php';
require_once __DIR__ . '/../components/section_title_bar.php';

function sec_education_experience() {
?>
<section class="sec-education-experience">
    <section class="sec-education-experience--education">
        <?php cmp_section_title_bar(title: 'Education', large_icon: 'assets/icons/icon_arrow_up_right.svg', large_text: 'All Education', medium_text: 'Education', small_text: 'All') ?>

        <?php cmp_experience_card('Queen\'s University Belfast', 'BSc Computer Science', '2025 - 2029', 'First Class Results in First Year', '/education.php') ?>
        <?php cmp_experience_card('Southern Regional College', 'Level 3 National Extended Diploma in IT', '2023 - 2025', 'Top Marks Equivalent to A*A*A* at A-Level', '/education.php') ?>
    </section>

    <section class="sec-education-experience--experience">
        <?php cmp_section_title_bar(title: 'Experience', large_icon: 'assets/icons/icon_arrow_up_right.svg', large_text: 'All Experience', medium_text: 'Experience', small_text: 'All') ?>

        <?php cmp_experience_card('Electronic Repairs Technician', 'Freelance', '2021 - Present', 'Experience with Diagnosing and Repairing Hardware.', '/education.php') ?>
        <?php cmp_experience_card('IT Support Technician', 'SRC Newry East Campus', '2025', 'Offering IT Support to 15+ Team Members Daily.', '/education.php') ?>
    </section>
</section>
<?php
}
