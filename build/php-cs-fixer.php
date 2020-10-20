<?php
/**
 * @version php-cs-fixer 2.12
 * php-cs-fixer fix --config ./build/php-cs-fixer.php --diff-format udiff
 */
$baseDir = dirname(__DIR__);

$finder = PhpCsFixer\Finder::create()
    ->exclude([
        'vendor',
    ])->in($baseDir);

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        'array_indentation' => true,
        'function_typehint_space' => true,
        'linebreak_after_opening_tag' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_unused_imports' => true,
        'no_extra_blank_lines' => true,
    ])
    ->setFinder($finder);
