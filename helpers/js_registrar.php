<?php

$registered_js = [];

// Registered paths start at /public/assets/js/
function register_js(string $path): void
{
    global $registered_js;
    $path = 'assets/js/' . $path;
    $registered_js[$path] = true;
}

function generate_js_scripts(): void
{
    global $registered_js;

    foreach (array_keys($registered_js) as $path) {
        echo '<script src="' . htmlspecialchars($path, ENT_QUOTES, 'UTF-8') . '" defer></script>' . PHP_EOL;
    }
}
