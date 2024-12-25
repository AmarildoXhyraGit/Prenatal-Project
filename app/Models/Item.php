<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    public function parent_id(){
        return $this->belongsTo(Parent_id::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
   

}
