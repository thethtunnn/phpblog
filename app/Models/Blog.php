<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded=[];
    // protected $fillable=['title','intro','body'];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
