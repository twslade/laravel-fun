<?php

namespace App\Http\Controllers;

use App\Report;

class PicsController extends Controller
{
    public function save(Report $report){

        $report->addPic();
    }
}
