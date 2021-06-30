<?php

namespace Norotaro\Guardian\Traits;

/**
 * Activable trait for Winter Models
 */
trait Activable
{
    /**
     * @var string Name of activable field.
     *
     * protected $activableField = 'active';
     */

    public function scopeActive($query, $value = true)
    {
        $query->where($this->getActivableField(), $value);
    }

    protected function getActivableField()
    {
        return $this->activableField ?? 'active';
    }
}
