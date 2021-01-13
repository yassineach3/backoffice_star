<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Star extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'image', 'description'];

    public function getImageAttribute($value)
    {
        $image = Str::of($value)->ltrim('public');
        return 'storage'.$image;
    }

}
