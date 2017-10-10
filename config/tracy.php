<?php

return [
    'enabled' => null,
    'showBar' => false,
    'useLavavelSession' => false,
    'accepts' => [
        'text/html',
    ],
    'editor' => 'phpstorm://open?file=%file&line=%line',
    'maxDepth' => 4,
    'maxLength' => 1000,
    'scream' => true,
    'showLocation' => true,
    'strictMode' => true,
    'editorMapping' => [],
    'panels' => [
        'routing' => true,
        'database' => true,
        'view' => true,
        'event' => false,
        'session' => true,
        'request' => true,
        'auth' => true,
        'html-validator' => false,
        'terminal' => true,
    ],
];
