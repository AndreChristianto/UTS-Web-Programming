<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function publishers() {
        return $this->hasOne(Publishers::class);
    }

    public function categories() {
        return $this->hasMany(Categories::class);
    }
}
