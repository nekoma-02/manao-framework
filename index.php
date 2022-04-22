<?php
require_once('fw/init.php');

$app->header();

$app->includeComponent('fw:work.news', 'default', ['title' => 'work progress']);
$app->includeComponent(
    'fw:interface.form',
    'default',
    [
        'action' => '/',
        'method' => 'post',
        'class' => 'window--full-form',
        'attr' => [
            'id' => 'form-123'
        ],
        'elements' => [
            [
                'type' => 'text',
                'name' => 'login',
                'class' => 'js-login',
                'title' => 'Логин',
                'placeholder' => 'Введите имя',
                'multiple' => true,
                'attr' => [
                    'id' => '1'
                ]
            ],
            [
                'type' => 'text',
                'name' => 'password',
                'class' => 'password',
                'title' => 'Пароль',
                'placeholder' => 'Введите пароль',
                'attr' => [
                    'id' => '2'
                ]
            ],
            [
                'type' => 'select',
                'name' => 'server',
                'class' => 'js-select',
                'value' => 'Выберите сервер',
                'multiple' => true,
                'attr' => [
                    'id' => '3'
                ],
                'list' => [
                    [
                        'title' => 'Онлайнер',
                        'value' => 'onliner',
                        'class' => 'mini--option',
                        'attr' => [
                            'id' => '31'
                        ],
                        'selected' => true
                    ],
                    [
                        'title' => 'тут бай',
                        'value' => 'tut',
                        'class' => 'mini--option',
                        'attr' => [
                            'id' => '32'
                        ]
                    ]
                ]
            ],
            [
                'type' => 'textarea',
                'class' => 'js-area',
                'rows' => '3',
                'attr' => [
                    'id' => '2'
                ]
            ]
        ]
    ]
);
$app->footer();
