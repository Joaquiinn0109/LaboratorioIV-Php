<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $table = 'fields';

    protected $fillable = [
        'id',
        'name',
        'postal_code',
        'department',
        'province',
        'latitude',
        'longitude',
    ];

    public function people()
    {
        return $this->belongsToMany(Person::class, 'people_fields', 'field_id', 'person_id');
    }

}
