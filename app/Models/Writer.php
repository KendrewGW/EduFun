<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //
    protected $table = 'writer';
    protected $fillable=[
        'title',
        'content',
        'posted_at',
        'profile_image'
    ];

    public function writer(){
        return $this->hasMany(Content::class);
    }
}
