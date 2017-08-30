<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function create(){
        return view('reports.create');
    }

    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }
}
