<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['langId','sectionNo','title','header','subheader','content','image'];

    public function languages()
    {
        return $this->belongsTo(Language::class);
    }
}
