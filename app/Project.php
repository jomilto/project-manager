<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'project_id';

    public function scopeActive($query) {
        return $query->where('is_active', 1);
    }

    // para enviar un valor default en el campo
    // protected $attributes = [
    //     'name' => 'hola',
    // ];

    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';
    // protected $connection = 'connection-name';
}
