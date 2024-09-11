<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Annex
 *
 * @property $id
 * @property $entreprise_id
 * @property $manager_id
 * @property $nom
 * @property $ville
 * @property $created_at
 * @property $updated_at
 *
 * @property Entreprise $entreprise
 * @property Manager $manager
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Annex extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['entreprise_id', 'manager_id', 'nom', 'ville'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entreprise()
    {
        return $this->belongsTo(\App\Models\Entreprise::class, 'entreprise_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager()
    {
        return $this->belongsTo(\App\Models\Manager::class, 'manager_id', 'id');
    }
    
}
