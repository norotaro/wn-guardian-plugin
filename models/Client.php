<?php

namespace Norotaro\Guardian\Models;

use Model;

/**
 * Model
 */
class Client extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'norotaro_guardian_clients';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'string|required',
        'description' => 'string',
        'active' => 'boolean',
    ];

    public $hasMany = [
        'codes' => AuthCode::class,
    ];
}
