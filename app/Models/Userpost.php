<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userpost extends Model
{
    protected $table = 'userpost';
    use HasFactory;
    protected $fillable = [
        "pname",
        "description",
        "cost",
        "imgpath",
        "ownerid",
    ];

   /* protected static function booted():void
    {
        self::deleting(function(Userpost $userposti){
            Storage::disk('public')->delete($userposti->imgpath);
        });
    }*/

    public function Registration()
    {

        return $this->belongsTo(Registration::class);
    }
}