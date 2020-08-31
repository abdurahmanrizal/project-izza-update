<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wp4vComment extends Model
{
    protected $guarded = [];

    public $table = 'wp4v_comments';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(wp4vPost::class);
    }
}
