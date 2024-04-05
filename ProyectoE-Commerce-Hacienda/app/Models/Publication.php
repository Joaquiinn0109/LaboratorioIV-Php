<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';

    protected $fillable = [
        'id',
        'image_url',
        'date',
        'health_status',
        'diet',
        'purpose',
        'breed',
        'category',
        'average_weight',
        'age',
        'quantity',
        'seller_id',
        'consignee_id',
        'field_id',
        'pricekg',
        'total',
        'status',
        'body_status',
    ];
    
    public function seller()
    {
        return $this->belongsTo(Person::class, 'seller_id', 'id');
    }

    public function consignee()
    {
        return $this->belongsTo(Person::class, 'consignee_id', 'id');
    }
    public function people()
    {
        return $this->belongsToMany(Person::class, 'requests');
    }
    public function requests()
    {
    return $this->hasMany(Request::class, 'publication_id');
    }
    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}
