<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wp4vPost extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'ID';
    public function comment()
    {
        return $this->hasMany(wp4vComment::class,'comment_post_ID');
    }

    public function user()
    {
        return $this->belongsTo(wp4vUser::class);
    }
}
