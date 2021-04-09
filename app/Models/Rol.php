<?php

namespace App\Models;

use App\Models\Usuari;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rols';
    public $timestamps = false;

    /**
     * Get all of the usuaris for the Rol
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuaris(): HasMany
    {
        return $this->hasMany(Usuari::class, 'rols_id');
    }

}
