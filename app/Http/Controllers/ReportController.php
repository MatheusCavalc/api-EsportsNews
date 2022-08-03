<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

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


    /*
    //new
    
    public function create(Request $request)
    {
        $report = $this->report->create($request->all());

        return response()->json($report, 201);
    }

    public function update($id, Request $request)
    {
        $report = $this->report->findOrFail($id);
        $report->update($request->all());

        return response()->json($report, 200);
    }

    public function delete($id)
    {
        $this->report->findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
    
    */
}
