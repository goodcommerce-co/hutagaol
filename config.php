<?php

return [
    'production' => false,
    'baseUrl' => 'http://hutagaol.test',
    'siteTitle' => 'Stephan Hutagaol, SH., MKn., MSi., CMed.',
    'description' => 'Official profile of Stephan Hutagaol, an experienced lawyer with over 20 years of practice, international exposure, and global legal connections.',
    'collections' => [
        'testimonials' => [
            'items' => function ($config) {
                $testimonials = json_decode(file_get_contents($config['baseUrl'] . '/testimonials.json'));
                
                return collect($testimonials)->map(function ($testimony) {
                    return [
                        'name' => $testimony->name,
                        'title'   => $testimony->title,
                        'testimonial' => $testimony->testimonial,
                    ];
                });
            }
        ],
    ],
];
