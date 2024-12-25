<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent_id extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function item(){
        return $this->hasMany(Item::class);
    }
}
