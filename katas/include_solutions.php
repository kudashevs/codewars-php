<?php declare(strict_types=1);

$files = glob(__DIR__ . '{*/*/*,*/*/*/*}_solution.php', GLOB_BRACE);

if (empty($files)) {
    throw new RuntimeException('Failed to load any solutions');
}

foreach ($files as $file) {
    require_once $file;
}

unset($files);
