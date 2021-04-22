<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencies extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes

    protected $table = 'incidencies';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','num_incident','data','hora','telefon_alertant','adreca','adreca_complement',
                            'descripcio','nom_metge','tipus_incidencies_id','alertants_id','municipis_id','usuaris_id'];

    /**
     * Get the user that owns the Incidencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipusIncidencia()
    {
        return $this->belongsTo(TipusIncidencia::class, 'tipus_incidencies_id');
    }

    /**
     * Get the user that owns the Incidencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alertant()
    {
        return $this->belongsTo(Alertant::class, 'alertants_id');
    }

    /**
     * Get the user that owns the Incidencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipis()
    {
        return $this->belongsTo(Municipis::class, 'municipis_id');
    }

    /**
     * Get the user that owns the Incidencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuaris()
    {
        return $this->belongsTo(Usuari::class, 'usuaris_id');
    }
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
}
