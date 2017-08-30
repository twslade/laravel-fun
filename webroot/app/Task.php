<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query){
        return $query->where('is_complete', 0)->get();
    }
}
