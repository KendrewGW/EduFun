<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    use HasFactory;
    protected $table = 'content';
    protected $fillable = [
        'id',
        'title',
        'body',
        'writer_id',
        'category_id',
        'image'
    ];

    public function writer(){
        return $this->belongsTo(Writer::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
