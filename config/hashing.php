<?php

return [
    'driver' => 'bcrypt',
    
    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 12),
    ],
    
    'argon' => [
        'memory' => 1024,
        'threads' => 2,
        'time' => 2,
    ],
];