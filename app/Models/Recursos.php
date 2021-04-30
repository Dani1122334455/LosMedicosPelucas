<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;

    protected $table = 'recursos';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','codi','actiu','tipus_recursos_id'];

    /**
     * Get all of the inci for the Recursos
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidencies_has_recursos()
    {
        return $this->hasMany(Ambulancia::class, 'recursos_id');
    }
}
