<?php
declare( strict_types = 1 );

test( 'rule-change', function () {
	$js_config = new JosephScott\PHPCSFixer_Config( __DIR__ );

	$js_config->rules['array_indention'] = false;
	$new_config = $js_config->get_config();

	$string_config = var_export( $new_config, true );
	expect( $string_config )->toContain( "'array_indention' => false," );
} );
