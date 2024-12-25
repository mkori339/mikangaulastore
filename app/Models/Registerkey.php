<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registerkey extends Model
{
    protected $table = '_registerkey';
    use HasFactory;
    protected $fillable = [
        "registerkey",
    ];
}
