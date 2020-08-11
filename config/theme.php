<?php

return [
    'template_path' => resource_path('views'),
    'excludes' => ['errors', 'vendor'],
    'templates' => [
        'frontend' => [
            'path' => 'frontend',
            'template' => 'default',
            'default' => 'default',
        ],
        'backend' => [
            'path' => 'backend',
            'template' => 'default',
            'default' => 'default',
        ],
        'mobile' => [
            'path' => 'mobile',
            'template' => 'default',
            'default' => 'default',
        ],
    ],
];
