<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipis extends Model
{
    use HasFactory;

    protected $table = 'municipis';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','nom','comarques_id'];

    /**
     * Get all of the comments for the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function alertants()
    {
        return $this->hasMany(Alertant::class, 'municipis_id');
    }
<<<<<<< Updated upstream
=======

    /**
     * Get all of the comments for the Municipis
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidencies()
    {
        return $this->hasMany(Incidencies::class, 'municipis_id');
    }
>>>>>>> Stashed changes
}
