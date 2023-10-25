<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://quick-tray-links/quick-tray-links.yaml',
    'modified' => 1698210930,
    'size' => 240,
    'data' => [
        'enabled' => true,
        'links' => [
            0 => [
                'icon' => 'fa fa-book',
                'link' => 'https://learn.getgrav.org',
                'tooltip' => 'Grav Documentation and Tutorials',
                'external' => true
            ],
            1 => [
                'icon' => 'fa fa-info',
                'link' => '/admin/config/info',
                'tooltip' => 'PHP Information',
                'external' => true
            ]
        ]
    ]
];
