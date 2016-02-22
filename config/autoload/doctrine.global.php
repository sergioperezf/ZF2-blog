<?php
/**
 * File: doctrine.global.php.
 * Project: UsersRolesPermissionsZF2
 * 2016
 */

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306'
                ]
            ]
        ]
    ]
];
