<?php
declare( strict_types = 1 );

require __DIR__ . '/src/josephscott/phpcsfixer-config.php';

$js_config = new JosephScott\PHPCSFixer_Config( __DIR__ );
return $js_config->get_config();
