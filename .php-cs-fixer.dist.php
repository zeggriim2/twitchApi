<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude(['bin','var'])
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();

$config->setRules([
    '@PSR12'                        => true,
    '@Symfony'                      => true,
    '@Symfony:risky'                => true,
    'array_syntax'                  => ['syntax' => 'short'],
    'concat_space'                  => ['spacing' => 'one' ],
    'phpdoc_order'                  => true,
    'linebreak_after_opening_tag'   => true,
    'mb_str_functions'              => true,
    'no_php4_constructor'           => true,
    'no_useless_else'               => true,
    'no_useless_return'             => true,
    'no_useless_sprintf'            => true,
    'ordered_imports'               => true,
    'semicolon_after_instruction'   => true,
    'strict_comparison'             => true,
    'strict_param'                  => true,
])->setFinder($finder);

return $config;