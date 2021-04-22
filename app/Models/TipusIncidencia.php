<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipusIncidencia extends Model
{
    use HasFactory;

    protected $table = 'tipus_incidencies';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','tipus','video'];

    /**
     * Get the user associated with the TipusIncidencia
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function incidencia()
    {
        return $this->hasOne(Incidencies::class, 'tipus_incidencies_id');
    }
}
