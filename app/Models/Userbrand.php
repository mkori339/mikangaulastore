<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userbrand extends Model
{
    
    protected $table = 'userbrand';
    use HasFactory;
    protected $fillable = [
        "description",
        "describ",
        "quantity",
        "imgpath",
        "phone",
    ];
}
