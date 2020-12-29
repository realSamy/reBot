<?php /** @noinspection PhpIncludeInspection */
spl_autoload_register(static function ($name) {
    $path = __DIR__ . '/' . str_replace(['\\', 'realSamy/'], ['/', ''], $name) . '.php';
    if (file_exists($path)) {
        include $path;
    }
});