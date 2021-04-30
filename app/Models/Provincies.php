<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincies extends Model
{
    use HasFactory;

    protected $table = 'provincies';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','nom'];

    /**
     * Get all of the comments for the Provincies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comarques()
    {
        return $this->hasMany(Comarques::class, 'provincies_id');
    }
}
