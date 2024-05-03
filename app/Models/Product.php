<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'image',
        'stock',
        'kode_satuan',
        'description',
        'price',
    ];
    protected $primaryKey = 'id';
}
