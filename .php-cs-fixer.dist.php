<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
;

$config = new PhpCsFixer\Config();

$config
    ->setFinder($finder)
    ->setRiskyAllowed(true)
;

return $config;
