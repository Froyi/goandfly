<?php
return [
    'project' => [
        'name' => 'Go and Fly',
        'namespace' => 'Project'
    ],
    'template' => [
        'name' => 'default',
        'dir' =>  '/default',
    ],
    'database' => [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'boilerplate'
    ],
    'controller' => [
        'namespace' => 'Controller'
    ],
    'route' => [
        'index' => [
            'controller' => 'IndexController',
            'action' => 'indexAction'
        ]
    ]
];