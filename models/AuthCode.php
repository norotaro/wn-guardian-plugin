<?php

namespace Norotaro\Guardian\Models;

use Model;
use Illuminate\Support\Str;

/**
 * Model
 */
class AuthCode extends Model
{
    use \Norotaro\Guardian\Traits\Activable;
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'norotaro_guardian_codes';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'value' => 'string|required',
        'active' => 'boolean',
    ];

    public $belongsTo = [
        'client' => Client::class,
    ];

    public function getValueAttribute()
    {
        return $this->exists ? $this->attributes['value'] : Str::random(32);
    }
}
