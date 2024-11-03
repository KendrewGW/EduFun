<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'id',
        'name'
    ];

    public function writer(){
        return $this->hasMany(Writer::class);
    }

    public function content(){
        return $this->hasMany(Content::class);
    }
}
