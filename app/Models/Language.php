<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['lang'];

    public function home()
    {
        return $this->hasMany(Home::class);
    }

    public function about()
    {
        return $this->hasMany(About::class);
    }
}
