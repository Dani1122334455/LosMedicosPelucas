<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afectats extends Model
{
    use HasFactory;

    protected $table = 'afectats';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','telefon','cip','nom','cognoms','edat','te_cip','sexes_id'];

    /**
     * Get the user that owns the Afectats
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sexes()
    {
        return $this->belongsTo(Sexes::class, 'sexes_id');
    }
}
