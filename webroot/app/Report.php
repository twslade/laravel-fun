<?php

namespace App;

class Report extends Model
{

    public function pics()
    {
        return $this->hasMany(Pic::class);
    }

}
