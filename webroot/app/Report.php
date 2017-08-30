<?php

namespace App;

class Report extends Model
{

    public function pics()
    {
        return $this->hasMany(Pic::class);
    }

    public function addPic(){
        $pic = new Pic;
        $pic->create([
            'comment' => request('comment'),
            'picture_location' => request('pic'),
            'report_id' => $this->id
        ]);

    }
}
