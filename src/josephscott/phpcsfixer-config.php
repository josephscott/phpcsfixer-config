<?php
declare( strict_types = 1 );

namespace JosephScott;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class PHPCSFixer_Config {
	public array $scan_paths = [];

	public function __construct( string $top_dir ) {

	}

	public function build_scan_paths( string $top_dir ) : array {
		$in_dir = scandir( $top_dir );
		foreach ( $in_dir as $k => $v ) {
			# Leave the '.' dir so that we can scan top level PHP files
			if (
				$v === '..'
				|| $v === '.git'
				|| $v === 'vendor'
			) {
				unset( $in_dir[$k] );
				continue;
			}

			if ( !is_dir( $in_dir[$k] ) ) {
				unset( $in_dir[$k] );
			}
		}

		$this->scan_paths = $in_dir;
	}
}
