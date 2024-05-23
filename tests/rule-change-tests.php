<?php
declare( strict_types = 1 );

test( 'rule-change', function () {
	$fixer_config = new JosephScott\PHPCSFixer_Config( __DIR__ );

	$fixer_config->rules['array_indention'] = false;
	$new_config = $fixer_config->get_config();

	$string_config = var_export( $new_config, true );
	expect( $string_config )->toContain( "'array_indention' => false," );
} );
