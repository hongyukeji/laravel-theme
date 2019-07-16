<?php

return [
    'path' => resource_path('views'),
    'excludes' => ['errors', 'vendor'],
    'templates' => [
        'frontend' => [
            'path_prefix' => 'resources/views/frontend',
            'relative_path_name' => 'frontend',
            'template' => 'default',
            'template_default' => 'default',
        ],
        'backend' => [
            'path_prefix' => 'resources/views/backend',
            'relative_path_name' => 'backend',
            'template' => 'default',
            'template_default' => 'default',
        ],
        'mobile' => [
            'path_prefix' => 'resources/views/mobile',
            'relative_path_name' => 'mobile',
            'template' => 'default',
            'template_default' => 'default',
        ],
    ],
];