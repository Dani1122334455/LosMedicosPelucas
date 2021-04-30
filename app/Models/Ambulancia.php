<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulancia extends Model
{
    use HasFactory;

    protected $table = 'incidencies_has_recursos';
    protected $primaryKey = ['incidencies_id', 'recursos_id'];
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['incidencies_id','recursos_id','hora_activacio','hora_mobilitzacio','hora_assistencia','hora_transport',
                            'hora_arribada_hospital','hora_transferencia','hora_finalitzacio','prioritat','desti'];

    /**
     * Get the incidencies that owns the Ambulancia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function incidencies()
    {
        return $this->belongsTo(Incidencies::class, 'incidencies_id');
    }

    /**
     * Get the recursos that owns the Ambulancia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recursos()
    {
        return $this->belongsTo(Recursos::class, 'recursos_id');
    }

    protected function setKeysForSaveQuery($query)
    {
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }

        foreach ($keys as $keyName) {
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }

        return $query;
    }

    protected function getKeyForSaveQuery($keyName = null)
    {
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }

        if(isset($this->original[$keyName])){
            return $this->original[$keyName];
        }

        return $this->getAttribute($keyName);
    }


}
