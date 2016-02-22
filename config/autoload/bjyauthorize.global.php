<?php
/**
 * File: bjyauthorize.global.php
 */

return [
    'bjyauthorize' => [
        'default_role' => 'guest',
        'identity_provider' => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',

        'role_providers' => [
            'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'role_entity_class' => 'Application\Entity\Role',
            ],
            'BjyAuthorize\Provider\Role\Config' => [
                'guest' => []
            ]
        ],

        'resource_providers' => [
            'BjyAuthorize\Provider\Resource\Config' => [
                'Ticket' => [],
                'Home' => []
            ]
        ],

        'rule_providers' => [
            'BjyAuthorize\Provider\Rule\Config' => [
                'allow' => [
                    ['authenticated', 'Home', 'see'],
                    ['user', 'Ticket', 'create'],
                    ['agent', 'Ticket', ['change_status', 'read']]
                ]
            ]
        ],
    ]
];