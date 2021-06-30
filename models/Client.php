<?php

namespace Norotaro\Guardian\Models;

use Model;

/**
 * Model
 */
class Client extends Model
{
    use \Norotaro\Guardian\Traits\Activable;
    use \Winter\Storm\Database\Traits\Sluggable;
    use \Winter\Storm\Database\Traits\SoftDelete;
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'norotaro_guardian_clients';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'string|required',
        'shortname' => 'string|required',
        'description' => 'string',
        'active' => 'boolean',
    ];

    protected $dates = ['deleted_at'];

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['shortname' => 'name'];

    public $hasMany = [
        'codes' => AuthCode::class,
    ];
}
