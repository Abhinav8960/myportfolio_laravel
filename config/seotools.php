<?php

return [

    'meta' => [
        'defaults' => [
            'title' => 'My Portfolio',
            'description' => 'Abhinav Pal Portfolio',
            'separator' => ' - ',
            'keywords' => ['laravel', 'portfolio', 'developer'],
            'canonical' => false,
        ],
        'webmaster_tags' => [],
    ],

    'opengraph' => [
        'defaults' => [
            'title'       => 'My Portfolio',
            'description' => 'Abhinav Pal Portfolio',
            'url'         => false,
            'type'        => 'website',
            'site_name'   => 'Portfolio',
            'images'      => [],
        ],
    ],

    'twitter' => [
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@yourhandle',
        ],
    ],

];
