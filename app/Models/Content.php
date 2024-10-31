<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = 'content';
    protected $fillable =[
        'name', 
        'category', 
        'specialist'
    ];

    public function writer(){
        return $this->belongsTo(Writer::class);
    }
}
