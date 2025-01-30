<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mogitate extends Model
{
    protected $table ='products';
    protected $fillable = ['name','price','season','description','image'];
}
