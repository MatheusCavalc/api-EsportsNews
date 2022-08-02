<?php

namespace App\Http\Controllers;

use App\Models\Report;

class ReportController extends Controller
{
    private $report;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function index() {

        return $this->report->all();

    }

    public function show($id) {

        return $this->report->find($id);

    }
}
