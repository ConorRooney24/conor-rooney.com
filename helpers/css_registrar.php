<?php

$registered_css = [];

// Registered paths start at /public/assets/css/
// So if you want to add the file /public/assets/css/components/button.css, you just do register_css('components/button.css');
function register_css(string $path): void
{
    global $registered_css;
    $path = 'assets/css/' . $path;
    $registered_css[$path] = true;
}

function generate_css_links(): void
{
    global $registered_css;

    foreach (array_keys($registered_css) as $path) {
        echo '<link rel="stylesheet" href="' . htmlspecialchars($path, ENT_QUOTES, 'UTF-8') . '">' . PHP_EOL;
    }
}
