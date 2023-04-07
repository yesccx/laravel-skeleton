<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    // 规定数组为短数组写法
    'array_syntax' => ['syntax' => 'short'],
    // 数组的元素缩进
    'array_indentation' => true,
    // 移除未使用的use声明
    'no_unused_imports' => true,
    // 二元运算符应按配置被空格包围
    'binary_operator_spaces' => [
        'default' => 'single_space',
        'operators' => [
            '=>' => 'align_single_space_minimal'
        ]
    ],
    // 命名空间namespace之后保持一个空行
    'blank_line_after_namespace' => true,
    // <?php标记之后不能存在其它内容
    'blank_line_after_opening_tag' => false,
    // 某些语句之前必须有空行
    'blank_line_before_statement' => [
        'statements' => ['return'],
    ],
    // 大括号换行
    'braces' => true,
    // 转换和变量之间应该有一个空格
    'cast_spaces' => true,
    'class_attributes_separation' => [
        'elements' => [
            'const' => 'one',
            'method' => 'one',
            'property' => 'one',
        ],
    ],
    'class_definition' => [
        'multi_line_extends_each_single_line' => true,
        'single_item_single_line' => true,
        'single_line' => true,
        'space_before_parenthesis' => true
    ],
    'class_reference_name_casing' => true,
    'clean_namespace' => true,
    'compact_nullable_typehint' => true,
    'concat_space' => [
        'spacing' => 'one',
    ],
    'constant_case' => ['case' => 'lower'],
    'declare_equal_normalize' => ['space'=>'single'],
    'elseif' => true,
    'encoding' => true,
    'explicit_indirect_variable' => true,
    'explicit_string_variable' => true,
    'full_opening_tag' => true,
    'fully_qualified_strict_types' => true, // added by Shift
    'function_declaration' => true,
    'function_typehint_space' => true,
    'heredoc_to_nowdoc' => true,
    'include' => true,
    'increment_style' => ['style' => 'post'],
    'indentation_type' => true,
    'lambda_not_used_import' => true,
    'linebreak_after_opening_tag' => true,
    'line_ending' => true,
    'logical_operators' => true,
    'lowercase_cast' => true,
    'lowercase_keywords' => true,
    'lowercase_static_reference' => true, // added from Symfony
    'magic_method_casing' => true, // added from Symfony
    'magic_constant_casing' => true,
    'mb_str_functions' => true,
    'method_argument_space' => true,
    'method_chaining_indentation' => true,
    'native_function_casing' => true,
    'no_alias_functions' => true,
    'no_alternative_syntax' => true,
    'no_blank_lines_after_class_opening' => true,
    // 'no_blank_lines_after_phpdoc' => true,
    'no_closing_tag' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => [
        'tokens' => [
            'extra',
            'throw',
            'use',
            'use_trait',
            'square_brace_block',
            'curly_brace_block',
            'parenthesis_brace_block',
            'return',
            'continue',
            'break',
            'switch',
            'case',
            'default',
        ],
    ],
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_php4_constructor' => true,
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
    'no_singleline_whitespace_before_semicolons' => true,
    'no_space_around_double_colon' => true,
    'no_spaces_after_function_name' => true,
    'no_spaces_inside_parenthesis' => true,
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_trailing_whitespace' => true,
    'no_trailing_whitespace_in_comment' => true,
    'no_unneeded_import_alias' => true,
    'no_unreachable_default_argument_value' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'normalize_index_brace' => true,
    'not_operator_with_successor_space' => false,
    'nullable_type_declaration_for_default_null_value' => true,
    'object_operator_without_whitespace' => true,
    'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
    'phpdoc_align' => ['align' => 'left'],
    'phpdoc_indent' => true,
    'phpdoc_no_access' => true,
    'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    // 'phpdoc_order' => true,
    'phpdoc_scalar' => true,
    // 'phpdoc_separation' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_summary' => false,
    // 'phpdoc_to_comment' => true,
    'phpdoc_trim' => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_types' => true,
    'phpdoc_var_annotation_correct_order' => true,
    'phpdoc_var_without_name' => true,
    'self_accessor' => true,
    'short_scalar_cast' => true,
    'simplified_if_return' => true,
    'simplified_null_return' => false, // disabled by Shift
    'single_blank_line_at_eof' => true,
    'single_blank_line_before_namespace' => true,
    'single_import_per_statement' => true,
    'single_line_after_imports' => true,
    'single_line_comment_style' => [
        'comment_types' => ['hash'],
    ],
    'single_line_throw' => true,
    'single_quote' => true,
    'space_after_semicolon' => true,
    'single_trait_insert_per_statement' => false,
    'standardize_not_equals' => true,
    'static_lambda' => false,
    'switch_case_semicolon_to_colon' => true,
    'switch_case_space' => true,
    'switch_continue_to_break' => true,
    'ternary_operator_spaces' => true,
    'trim_array_spaces' => true,

    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,

    // php-cs-fixer 3: Renamed rules
    'general_phpdoc_tag_rename' => true,
    'phpdoc_inline_tag_normalizer' => true,
    'phpdoc_tag_type' => true,
    'psr_autoloading' => true,
    'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    'ordered_imports' => [
        'sort_algorithm' => 'alpha',
    ],

    // php-cs-fixer 3: Removed rootless options (*)
    'no_unneeded_control_parentheses' => [
        'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
    ],
    'no_spaces_around_offset' => [
        'positions' => ['inside', 'outside'],
    ],
    'visibility_required' => [
        'elements' => ['property', 'method', 'const'],
    ],

    'single_space_after_construct' => true,
    'return_type_declaration' => [
        'space_before' => 'none'
    ]
];

$finder = Finder::create()
    ->in([
        __DIR__.'/app',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new Config())
    ->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
