<?php

namespace App\Models;

use App\Models\Rol;
// use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuari extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuaris';
    public $timestamps = false;

    /**
     * Get the rol that owns the Usuari
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rols_id');
    }

    /**
     * Get all of the comments for the Usuari
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidencies()
    {
        return $this->hasMany(Incidencies::class, 'foreign_key', 'local_key');
    }

}
