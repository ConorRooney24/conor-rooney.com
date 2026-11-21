<?php

// Just returns the contents of file. Going to be using this for svg's so this is good for readability.
// Takes an absolute path
function cmp_svg_icon(string $path): void {
    if (!is_file($path)) {
        echo "not file";
        return;
    }

    echo file_get_contents($path);
}
