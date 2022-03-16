<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetCategory extends Model
{
    use HasFactory;

    protected $table = 'pet_categories';
    protected $fillable = [
        'name',
        'description',
        'status'
    ];
}
