<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registration';
    use HasFactory;
    protected $fillable = [
        "name",
        "password",
        "phone",
        "status",
    ];
    public function Userpost()
    {
       return $this->hasMany(Userpost::class);
    }
    public function Userpostbland()
    {
       return $this->hasMany(Userpostbland::class);
    }
    public function Userpostmatangazo()
    {
       return $this->hasMany(Userpostmatangazo::class);
    }
}
