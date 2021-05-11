<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token2 extends Model
{
    use HasFactory;

    public function token2s()
    {
        return $this->hasMany('App\Models\Token2', 'user_id');
    }
}
