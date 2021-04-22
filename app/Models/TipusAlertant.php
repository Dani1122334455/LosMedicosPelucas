<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipusAlertant extends Model
{
    use HasFactory;

    protected $table = 'tipus_alertants';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','tipus'];

    /**
     * Get the user associated with the TipusAlertant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function alertants()
    {
        return $this->hasOne(Alertant::class, 'tipus_alertants_id');
    }
}
