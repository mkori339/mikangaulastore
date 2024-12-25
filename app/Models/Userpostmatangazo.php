<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userpostmatangazo extends Model
{
    protected $table = 'userpostmatangazo';
    use HasFactory;
    protected $fillable = [
        "description",
        "head",
        "imgpath",
        "ownerid",
    ];

    public function Registration()
    {

        return $this->belongsTo(Registration::class);
    }
}
