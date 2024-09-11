<?php

Kirby\Cms\App::plugin('test/test-field', [
    'fields' => [
        'test-field' => [
            'extends' => 'pages',

            'props' => [
                'disabled' => function () {
                    return true;
                },

                'value' => function ($value = null) {
                    $value = $this->model->relatedPagesPanel()->value();

                    $value = $this->toPages($value);

                    return $value;
                },
            ],
        ]
    ],

]);
