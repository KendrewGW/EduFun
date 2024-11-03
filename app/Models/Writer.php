<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //
    use HasFactory;
    protected $table ='writer';
    protected $fillable = [
        'id',
        'name',
        'category_id',
        'profile_image'
    ];

    public function content(){
        return $this->hasMany(Content::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
