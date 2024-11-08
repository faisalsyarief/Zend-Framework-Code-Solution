'router' => [
    'routes' => [
        'product' => [
            'type' => 'Literal',
            'options' => [
                'route' => '/product',
                'defaults' => [
                    'controller' => ProductController::class,
                    'action' => 'index',
                ],
            ],
            'may_terminate' => true,
            'child_routes' => [
                'detail' => [
                    'type' => 'Segment',
                    'options' => [
                        'route' => '/detail[/:id]',
                        'defaults' => [
                            'action' => 'detail',
                        ],
                        'constraints' => [
                            'id' => '[0-9]+',
                        ],
                    ],
                ],
            ],
        ],
    ],
],
