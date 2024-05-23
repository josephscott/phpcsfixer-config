<?php
declare( strict_types = 1 );

namespace JosephScott;

class PHPCSFixer_Config {
	public string $scan_dir;

	public object $config;

	public object $finder;

	public bool $config_risky_allowed = true;

	public string $config_indent = "\t";

	public bool $config_using_cache = false;

	public string $finder_name = '*.php';

	public bool $finder_ignore_dot_files = true;

	public bool $finder_ignore_vcs = true;

	public array $rules = [
		'array_indentation' => true,
		'array_syntax' => [
			'syntax' => 'short',
		],
		'binary_operator_spaces' => [
			'default' => 'single_space',
			'operators' => [
				'=>' => null,
			],
		],
		'blank_line_after_namespace' => true,
		'blank_line_after_opening_tag' => false,
		'braces_position' => [
			'functions_opening_brace' => 'same_line',
			'anonymous_functions_opening_brace' => 'same_line',
			'classes_opening_brace' => 'same_line',
			'anonymous_classes_opening_brace' => 'same_line',
		],
		'cast_spaces' => true,
		'class_attributes_separation' => [
			'elements' => [
				'const' => 'one',
				'method' => 'one',
				'property' => 'one',
				'trait_import' => 'none',
			],
		],
		'class_definition' => [
			'multi_line_extends_each_single_line' => true,
			'single_item_single_line' => true,
			'single_line' => true,
		],
		'concat_space' => [
			'spacing' => 'one',
		],
		'constant_case' => ['case' => 'lower'],
		'declare_equal_normalize' => [
			'space' => 'single',
		],
		'elseif' => true,
		'encoding' => true,
		'full_opening_tag' => true,
		'fully_qualified_strict_types' => false,
		'function_declaration' => true,

		'type_declaration_spaces' => true,
		'general_phpdoc_tag_rename' => true,
		'heredoc_to_nowdoc' => true,
		'include' => true,
		'increment_style' => ['style' => 'post'],
		'indentation_type' => true,
		'linebreak_after_opening_tag' => true,
		'line_ending' => true,
		'lowercase_cast' => true,
		'lowercase_keywords' => true,
		'lowercase_static_reference' => true,
		'magic_method_casing' => true,
		'magic_constant_casing' => true,
		'method_argument_space' => [
			'on_multiline' => 'ignore',
		],
		'multiline_whitespace_before_semicolons' => [
			'strategy' => 'no_multi_line',
		],
		'native_function_casing' => true,
		'native_function_invocation' => [
			'scope' => 'namespaced',
		],
		'no_alias_functions' => true,
		'no_extra_blank_lines' => [
			'tokens' => [
				'extra',
				'throw',
				'use',
			],
		],

		'no_blank_lines_after_class_opening' => true,
		'no_blank_lines_after_phpdoc' => true,
		'no_closing_tag' => true,
		'no_empty_phpdoc' => true,
		'no_empty_statement' => true,
		'no_leading_import_slash' => true,
		'no_leading_namespace_whitespace' => true,
		'no_mixed_echo_print' => [
			'use' => 'echo',
		],
		'no_multiline_whitespace_around_double_arrow' => true,
		'no_short_bool_cast' => true,
		'no_singleline_whitespace_before_semicolons' => true,
		'no_spaces_after_function_name' => true,
		'no_spaces_around_offset' => [
			'positions' => ['inside', 'outside'],
		],
		'spaces_inside_parentheses' => [
			'space' => 'single',
		],
		'no_trailing_comma_in_singleline' => [
			'elements' => [ 'arguments', 'array_destructuring', 'array', 'group_import' ],
		],

		'no_trailing_whitespace' => true,
		'no_trailing_whitespace_in_comment' => true,
		'no_unneeded_control_parentheses' => [
			'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
		],
		'no_unreachable_default_argument_value' => true,
		'no_useless_return' => true,
		'no_whitespace_before_comma_in_array' => true,
		'no_whitespace_in_blank_line' => true,
		'normalize_index_brace' => true,
		'not_operator_with_successor_space' => true,
		'object_operator_without_whitespace' => true,
		'ordered_imports' => ['sort_algorithm' => 'alpha'],
		'psr_autoloading' => false,
		'phpdoc_indent' => true,
		'phpdoc_inline_tag_normalizer' => true,
		'phpdoc_no_access' => true,
		'phpdoc_no_package' => true,
		'phpdoc_no_useless_inheritdoc' => true,
		'phpdoc_scalar' => true,
		'phpdoc_single_line_var_spacing' => true,
		'phpdoc_summary' => false,
		'phpdoc_to_comment' => false, // override to preserve user preference
		'phpdoc_tag_type' => true,
		'phpdoc_trim' => true,
		'phpdoc_types' => true,
		'phpdoc_var_without_name' => true,
		'self_accessor' => true,
		'short_scalar_cast' => true,
		'simplified_null_return' => false, // disabled as "risky"
		'single_blank_line_at_eof' => true,
		'blank_lines_before_namespace' => [
			'min_line_breaks' => 1,
		],
		'single_class_element_per_statement' => [
			'elements' => ['const', 'property'],
		],
		'single_import_per_statement' => true,
		'single_line_after_imports' => true,
		'single_line_comment_style' => [
			'comment_types' => ['hash'],
		],
		'single_quote' => true,
		'space_after_semicolon' => true,
		'standardize_not_equals' => true,
		'switch_case_semicolon_to_colon' => true,
		'switch_case_space' => true,
		'ternary_operator_spaces' => true,
		'trailing_comma_in_multiline' => ['elements' => ['arrays']],
		'trim_array_spaces' => false,
		'unary_operator_spaces' => true,
		'visibility_required' => [
			'elements' => ['method', 'property'],
		],
		'whitespace_after_comma_in_array' => true,

		'single_line_empty_body' => true,
		'octal_notation' => true,

	];

	public function __construct( string $scan_dir ) {
		$this->scan_dir = $scan_dir;
	}

	public function build_config() : void {
		$this->config = ( new \PhpCsFixer\Config )
			// The type hints in phpcsfixer might be wrong, it is
			// asking for something else, but this still works.
			// This is how they recommend doing it
			// https://cs.symfony.com/doc/config.html#the-simplest-config
			// so ignore this for now
			->setFinder( $this->finder ) // @phpstan-ignore-line
			->setRules( $this->rules )
			->setRiskyAllowed( $this->config_risky_allowed )
			->setIndent( $this->config_indent )
			->setUsingCache( $this->config_using_cache );

	}

	public function build_finder() : void {
		$dirs = scandir( $this->scan_dir );
		foreach ( $dirs as $k => $v ) {
			// Leave the '.' dir so that we can scan top level PHP files
			if (
				$v === '..'
				|| $v === '.git'
				|| $v === 'vendor'
			) {
				unset( $dirs[$k] );
				continue;
			}

			if ( ! is_dir( $dirs[$k] ) ) {
				unset( $dirs[$k] );
			}
		}

		$this->finder = ( new \PhpCsFixer\Finder() )
			->in( $dirs )
			->name( $this->finder_name )
			->ignoreDotFiles( $this->finder_ignore_dot_files )
			->ignoreVCS( $this->finder_ignore_vcs );
	}

	public function get_config() : object {
		$this->build_finder();
		$this->build_config();

		return $this->config;
	}
}
