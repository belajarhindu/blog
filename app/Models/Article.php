<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function tags()
    {
        return $this->belongsToMany(
            Role::class,
            'user_roles',
            'user_id',
            'role_id');
    }
}
