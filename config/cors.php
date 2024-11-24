<?php

return [

    'paths'                => ['api/*'],

    'allowed_methods'      => ['*'],

    'allowed_origins'      => ['*'], // or specify 'http://localhost:8000' if you want to restrict

    'allowed_origins_patterns' => [],

    'allowed_headers'      => ['*'],

    'exposed_headers'      => false,

    'max_age'              => 0,

    'supports_credentials' => false,

];
