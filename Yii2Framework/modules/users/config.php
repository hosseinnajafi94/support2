<?php
return [
    'components' => [
    ],
    'params' => [
        //----------------------------------------------------------------------
        'group.Admin' => 1,
        'group.User' => 2,
        //----------------------------------------------------------------------
        'status.Active' => 1,
        'status.Delete' => 2,
        //----------------------------------------------------------------------
        'defaultPassword' => '123456',
        'defaultAvatar' => 'default.png',
        'rememberMeExpire' => 60 * 60 * 24 * 30, // 30 Days
        //----------------------------------------------------------------------
    ],
];