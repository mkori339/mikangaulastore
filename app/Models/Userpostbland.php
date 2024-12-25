<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userpostbland extends Model
{
   
    protected $table = 'userpostbland';
    use HasFactory;
    protected $fillable = [
        "description",
        "phone",
        "cost",
        "imgpath",
        "ownerid",
    ];

    public function Registration()
    {

        return $this->belongsTo(Registration::class);
    }
}
