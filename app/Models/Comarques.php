<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comarques extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
=======

    protected $table = 'comarques';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','nom','provincies_id'];

    /**
     * Get the user that owns the Comarques
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincies()
    {
        return $this->belongsTo(Provincies::class, 'provincies_id');
    }


>>>>>>> Stashed changes
}
