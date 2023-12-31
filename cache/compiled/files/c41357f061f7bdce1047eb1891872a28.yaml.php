<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin-v1.7.43/grav-admin/user/plugins/readingtime/blueprints.yaml',
    'modified' => 1698210923,
    'size' => 1738,
    'data' => [
        'name' => 'Reading Time',
        'version' => '1.4.1',
        'description' => 'Add human readable reading time to your pages.',
        'icon' => 'clock-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-readingtime',
        'demo' => 'http://www.getgrav.org/blog',
        'keywords' => 'readingtime, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-readingtime/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'words_per_minute' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'append' => 'wpm',
                    'label' => 'Words-per-minute',
                    'validate' => [
                        'type' => 'int',
                        'min' => 1,
                        'max' => 1000
                    ]
                ],
                'format' => [
                    'type' => 'text',
                    'label' => 'Format',
                    'size' => 'large'
                ],
                'round' => [
                    'type' => 'select',
                    'size' => 'small',
                    'classes' => 'fancy',
                    'label' => 'Round to nearest...',
                    'options' => [
                        'seconds' => 'second',
                        'minutes' => 'minute'
                    ]
                ],
                'include_image_views' => [
                    'type' => 'toggle',
                    'label' => 'Include time for viewing images',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'seconds_per_image' => [
                    'type' => 'text',
                    'label' => 'Seconds to view images',
                    'help' => 'Comma-separated list of whole numbers where first number is the number of seconds to view the first image, second number for the second image, and so on. Example: 12,10,11',
                    'default' => '12,11,10,9,8,7,6,5,4,3',
                    'validate' => [
                        'required' => true,
                        'pattern' => '(^(\\s*\\d+\\s*))?(,\\s*\\d+\\s*)*',
                        'message' => 'Must be a comma-separated list of whole numbers (e.g. 12,11,10) with at least one number'
                    ]
                ]
            ]
        ]
    ]
];
