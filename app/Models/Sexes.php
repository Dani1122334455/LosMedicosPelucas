<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexes extends Model
{
    use HasFactory;

    protected $table = 'sexes';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','sexe'];

    /**
     * Get all of the comments for the Sexes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function afectats()
    {
        return $this->hasMany(Afectats::class, 'sexes_id');
    }
}
