<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class People extends Model
{
    use HasFactory;

    /**
     * A person comes from one planet
     *
     * @return HasOne
     */
    public function planets(): HasOne
    {
        return $this->hasOne(Planets::class);
    }

    /**
     * A person is only one specie
     *
     * @return HasOne
     */
    public function species(): HasOne
    {
        return $this->hasOne(Species::class);
    }
}
