<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable =["id","category","name","description","photo","description_photo","price"];

    public $timestamps = false;
}
