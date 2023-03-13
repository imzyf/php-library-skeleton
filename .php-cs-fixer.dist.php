<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->ignoreDotFiles(false)
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();

// https://cs.symfony.com/doc/rules/index.html
// https://cs.symfony.com/doc/ruleSets/index.html
return $config
    ->setRiskyAllowed(true)
    ->setRules([
        // 严格模式拉满
        'declare_strict_types' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        '@Symfony:risky' => true,
        '@Symfony' => true,
    ])
    ->setFinder($finder)
;
