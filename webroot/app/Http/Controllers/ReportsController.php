<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Report::orderBy('created_at', 'desc')->get();
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function save()
    {
        $this->validate(request(), [
           'wave_sized_in_body' => 'required',
           'wave_size' => 'required',
           'wind_speed' => 'required',
           'wind_direction' => 'required',
           'picture' => 'required',
        ]);

        $report = new Report;
        $report->create(
            request(
                [
                  'wave_size_in_body',
                  'wave_size',
                  'wind_speed',
                  'wind_direction',
                  'picture'
                ]
            )
        );

        redirect('/');

    }

    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }
}
