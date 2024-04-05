<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'id',
        'publication_id',
        'client_id',
        'confirmation',
        'date',
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'publication_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Person::class, 'client_id', 'id');
    }
    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id', 'id');
    }
}
