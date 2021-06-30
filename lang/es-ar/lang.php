<?php return [
    'plugin' => [
        'name' => 'Guardian',
        'description' => 'Plugin para proteger rutas',
    ],
    'models' => [
        'id' => 'ID',
        'name' => 'Nombre',
        'description' => 'Descripción',
        'active' => 'Activo',
        'created_at' => 'Creado el',
        'updated_at' => 'Actualizado el',
        'deleted_at' => 'Eliminado el',
    ],
    'client' => [
        's_name' => 'Cliente',
        'p_name' => 'Clientes',
        'shortname' => 'Nombre corto',
        'shortname_comment' => 'Es el valor que el cliente debe enviar en la cabecera <code>User-Agent</code>',
        'tab_codes' => 'Códigos',
        'tab_description' => 'Descripción',
    ],
    'permissions' => [
        'manage_clients' => 'Administrar clientes',
    ],
    'menu' => [
        'main_menu' => 'Guardian',
        'clients' => 'Clientes',
    ],
    'authcode' => [
        's_name' => 'Código',
        'value' => 'Valor',
    ],
];