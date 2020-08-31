<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wp4vUser extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->hasMany(wp4vPost::class);
    }
}
