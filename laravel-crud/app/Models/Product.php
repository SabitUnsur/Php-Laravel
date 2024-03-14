<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'stock', 'is_published'
    ];
    use HasFactory,SoftDeletes; //soft delete işlemi yapabilmek için SoftDeletes traitini ekliyoruz
}
