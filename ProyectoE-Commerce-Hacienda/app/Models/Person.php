<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'id',
        'user_id',
        'dni',
        'address',
        'phone_number',
        'firs_name',
        'last_name',
        'business_name',
        'cuil',
        'city',
        'province',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function fields()
    {
        return $this->belongsToMany(Field::class, 'people_fields', 'person_id', 'field_id');
    }
    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'requests');
    }
    public function publicationsAsignadas()
    {
    return $this->hasMany(Publication::class, 'consignee_id');
    }
    
}
