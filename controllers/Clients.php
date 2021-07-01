<?php

namespace Norotaro\Guardian\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Clients extends Controller
{
    public $implement = [
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\RelationController::class,
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'norotaro.guardian.manage_clients'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Norotaro.Guardian', 'main-menu', 'side-menu-clients');
    }
}
