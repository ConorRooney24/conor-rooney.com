<?php

$registered_css = [];

function register_css(string $path): void
{
    global $registered_css;

    $registered_css[$path] = true;
}

function generate_css_links(): void
{
    global $registered_css;

    foreach (array_keys($registered_css) as $path) {
        echo '<link rel="stylesheet" href="' . htmlspecialchars($path, ENT_QUOTES, 'UTF-8') . '">' . PHP_EOL;
    }
}
