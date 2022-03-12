<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $primary_key = 'category_id';

    protected $table = 'product_categories';

    protected $fillable = [
        'name',
        'description'
    ];
}
