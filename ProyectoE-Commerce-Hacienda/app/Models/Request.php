<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'requests';

    protected $fillable = [
        'id',
        'publication_id',
        'client_id',
        'fecha',
        'confirmation',
    ];
    
    public function client()
    {
        return $this->belongsTo(Person::class, 'client_id', 'id');
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'publication_id', 'id');
    }
    
}
