<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goldfish extends Model
{
    use HasFactory;
    
    protected $table = 'goldfish';

    protected $fillable = [
        'name',
        'description',
        'petCat_id',
        'stock',
        'price',
        'image',
        'status'
    ];

    public function category(){
        return $this->belongsTo(PetCategory::class, 'petCat_id');
    }
}
