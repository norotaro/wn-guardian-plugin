<?php

namespace Norotaro\Guardian\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Clients extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
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

    public function relationExtendManageWidget($widget, $field, $model)
    {
        traceLog('binding');
        $widget->bindEvent('form.extendModel', function () {
            traceLog('it works!');
        });
    }
}
