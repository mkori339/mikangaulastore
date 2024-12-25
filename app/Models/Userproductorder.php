<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userproductorder extends Model
{
    protected $table = 'userproductorder';
    use HasFactory;
    protected $fillable = [
        "description",
        "pname",
        "quantity",
        "imgpath",
        "phone",
    ];
}
