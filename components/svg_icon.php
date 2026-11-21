<?php

// Just returns the contents of file. Going to be using this for svg's so this is good for readability.
function cmp_svg_icon(string $path): void {
    $path = __DIR__ . $path;

    if (!is_file($path)) {
        return;
    }

    echo file_get_contents($path);
}
