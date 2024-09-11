<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Manager
 *
 * @property $id
 * @property $nom
 * @property $prenom
 * @property $email
 * @property $telephone
 * @property $created_at
 * @property $updated_at
 *
 * @property Annex[] $annexes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Manager extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nom', 'prenom', 'email', 'telephone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function annexes()
    {
        return $this->hasMany(\App\Models\Annex::class, 'id', 'manager_id');
    }
    
}
