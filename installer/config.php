<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'packages' => [
        'laravel-lang/common' => [
            'version' => '^3.1',
        ],
        'yesccx/better-laravel' => [
            'version' => '^1.0',
        ],
        'yesccx/laravel-database-logger' => [
            'version' => '^1.0',
        ],
        'yesccx/laravel-enum' => [
            'version' => '^1.0',
        ],
        'yesccx/laravel-preparation' => [
            'version' => '^1.0',
        ],
        'barryvdh/laravel-ide-helper' => [
            'version' => '^2.12',
        ],
    ],
    'require-dev' => [
        'barryvdh/laravel-ide-helper',
        'laravel-lang/common'
    ],
    'questions' => [
        'laravel-lang/common' => [
            'question' => 'Do you want to use laravel-lang/common ?',
            'default' => 'y',
            'required' => true,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'laravel-lang/common'
                    ],
                    'resources' => [
                    ],
                ],
            ],
        ],
        'yesccx/better-laravel' => [
            'question' => 'Do you want to use yesccx/better-laravel（Laravel tools kit） ?',
            'default' => 'y',
            'required' => false,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'yesccx/better-laravel'
                    ],
                    'resources' => [
                    ],
                ]
            ],
        ],
        'yesccx/laravel-database-logger' => [
            'question' => 'Do you want to use yesccx/laravel-database-logger（Mysql、Mongo Executed Logger） ?',
            'default' => 'y',
            'required' => false,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'yesccx/laravel-database-logger'
                    ],
                    'resources' => [
                    ],
                ]
            ],
        ],
        'yesccx/laravel-enum' => [
            'question' => 'Do you want to use yesccx/laravel-enum ?',
            'default' => 'y',
            'required' => false,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'yesccx/laravel-enum'
                    ],
                    'resources' => [
                    ],
                ]
            ],
        ],
        'yesccx/laravel-preparation' => [
            'question' => 'Do you want to use yesccx/laravel-preparation  （A simple http preparation handler） ?',
            'default' => 'y',
            'required' => false,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'yesccx/laravel-preparation'
                    ],
                    'resources' => [
                    ],
                ]
            ],
        ],
        'barryvdh/laravel-ide-helper' => [
            'question' => 'Do you want to use barryvdh/laravel-ide-helper （IDE Helper Generator for Laravel） ?',
            'default' => 'y',
            'required' => false,
            'custom-package' => true,
            'options' => [
                'y' => [
                    'name' => 'yes',
                    'packages' => [
                        'barryvdh/laravel-ide-helper'
                    ],
                    'resources' => [
                    ],
                ]
            ],
        ],
    ],
];
