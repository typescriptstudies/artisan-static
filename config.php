<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisan-static-demo.netlify.com',
    'site' => [
        'title' => 'lishadowapps blog',
        'description' => 'Personal blog of lishadowapps.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'lishadowapps',
        'twitter' => 'johndoe',
        'github' => 'typescriptstudies',
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'cloudinary' => 'artisanstatic',
        'jumprock' => 'artisanstatic',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
