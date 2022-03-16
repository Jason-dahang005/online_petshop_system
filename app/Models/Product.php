<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'prodCat_id',
        'stock',
        'price',
        'image',
    ];

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'prodCat_id');
    }
}
