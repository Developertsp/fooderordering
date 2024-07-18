<?php

namespace App\Constants;

class MyConstants
{
    public const CATEGORY_TYPES = [
        'CATEGORY' => 1,
        'SUB_CATEGORY' => 2,
    ];

    public const CATEGORY_STATUSES = [
        'ACTIVE' => 1,
        'INACTIVE' => 2,
        'DRAFT' => 3,
    ];
} 

return [
    'SOFTWARE_MANAGER' => 1,
    'SUPER_ADMIN' => 2,
    'SHOP_ADMIN' => 3,
    
    'USER_ROLES_NAME' => [
        1 => 'Software Manager',
        2 => 'Super Admin',
        3 => 'Shop Admin'
    ],

    'YES_NO' => [
        1 => 'Yes',
        2 => 'No',
    ],

    'PRODUCT_OPTIONS_TYPE' => [
        1 => 'Radio',
        2 => 'Checkbox',
    ],
];
