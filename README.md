# phpcsfixer-config

<img src="https://github.com/josephscott/phpcsfixer-config/actions/workflows/tests.yml/badge.svg">

### Install

```
composer require --dev josephscott/phpcsfixer-config
```

Create a `.php-cs-fixer.dist.php` in the top level directory of your
repo with:

```
<?php
declare( strict_types = 1 );

require __DIR__ . '/vendor/autoload.php';

$fixer_config = new JosephScott\PHPCSFixer_Config( __DIR__ );
return $fixer_config->get_config();
```

If you want to make alterations, all of the rules and options are available
via public attributes on the `JosephScott\PHPCSFixer_Config()` object.  Here
is how you would alter the `array_indention` rule and the indent config
option:

```
$fixer_config = new JosephScott\PHPCSFixer_Config( __DIR__ );
$fixer_config->config_indent = '    ';
$fixer_config->rules['array_indention'] = false;
return $fixer_config->get_config();
```
