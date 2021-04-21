<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alertant extends Model
{
    use HasFactory;

    protected $table = 'alertants';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','telefon','nom','adreca','municipis_id','tipus_alertants_id'];

    /**
     * Get all of the municipis for the Alertant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function municipis()
    {
        return $this->belongsTo(Municipis::class, 'municipis_id');
    }

    /**
     * Get the user associated with the Alertant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function tipusAlertant()
    {
        return $this->belongsTo(TipusAlertant::class, 'tipus_alertants_id');
    }
}
