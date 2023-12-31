<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin-v1.7.43/grav-admin/user/plugins/quick-tray-links/blueprints.yaml',
    'modified' => 1698210930,
    'size' => 1696,
    'data' => [
        'name' => 'Quick Tray Links',
        'type' => 'plugin',
        'slug' => 'quick-tray-links',
        'version' => '1.1.1',
        'description' => 'Easily add customizable admin quick tray links',
        'icon' => 'link',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'devs@trilbymedia.com'
        ],
        'homepage' => 'https://github.com/trilbymedia/grav-plugin-quick-tray-links',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/trilbymedia/grav-plugin-quick-tray-links/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-quick-tray-links/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'links' => [
                    'type' => 'list',
                    'label' => 'PLUGIN_QUICK_TRAY_LINKS.LINKS',
                    'help' => 'PLUGIN_QUICK_TRAY_LINKS.LINKS_HELP',
                    'fields' => [
                        '.icon' => [
                            'type' => 'iconpicker',
                            'label' => 'PLUGIN_QUICK_TRAY_LINKS.ICON',
                            'default' => 'fa fa-question-circle',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.link' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_QUICK_TRAY_LINKS.LINK',
                            'default' => 'http://somelink.com',
                            'validate' => [
                                'required' => true
                            ]
                        ],
                        '.tooltip' => [
                            'type' => 'textarea',
                            'label' => 'PLUGIN_QUICK_TRAY_LINKS.TOOLTIP'
                        ],
                        '.external' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_QUICK_TRAY_LINKS.EXTERNAL.LABEL',
                            'help' => 'PLUGIN_QUICK_TRAY_LINKS.EXTERNAL.HINT',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                0 => 'PLUGIN_QUICK_TRAY_LINKS.NO',
                                1 => 'PLUGIN_QUICK_TRAY_LINKS.YES'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
