<?php return [
    'plugin' => [
        'name' => 'Routes Guardian',
        'description' => 'Easily restrict access to routes to clients that are not registered in the backend.',
    ],
    'models' => [
        'id' => 'ID',
        'name' => 'Name',
        'description' => 'Description',
        'active' => 'Active',
        'created_at' => 'Created at',
        'updated_at' => 'Updated at',
        'deleted_at' => 'Deleted at',
    ],
    'client' => [
        's_name' => 'Client',
        'p_name' => 'Clients',
        'shortname' => 'Shortname',
        'shortname_comment' => 'This is the value that clients need to send at <code>User-Agent</code> header',
        'tab_codes' => 'Codes',
        'tab_description' => 'Description',
        'create_title' => 'Create new Client',
        'update_title' => 'Update Client',
        'section_codes' => 'Authorization codes',
        'section_codes_comment' => 'The client needs to send an active code at <code>Authorization</code> header',
    ],
    'permissions' => [
        'manage_clients' => 'Manage clients',
    ],
    'menu' => [
        'main_menu' => 'Guardian',
        'clients' => 'Clients',
    ],
    'authcode' => [
        's_name' => 'Code',
        'value' => 'Value',
    ],
];