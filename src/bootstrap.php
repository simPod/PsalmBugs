<?php

declare(strict_types=1);

namespace SimPod\PsalmBugs;

return
    /**
     * @return array{string, bool}
     */
    static function (): array {
        require __DIR__ . '/../vendor/autoload.php';

        $env = $_SERVER['SYMFONY_ENV'];

        $debug = (bool) ($_ENV['SYMFONY_DEBUG'] ?? false);

        return [$env, $debug];
    };
