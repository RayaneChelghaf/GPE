<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        $reports = Report::all();
        return view('reports.create', compact('reports'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|max:1000',
            'result' => 'required|string|max:255',
            'racism' => 'required|integer',
            'sexism' => 'required|integer',
            'homophobia' => 'required|integer',
            'islamophobia' => 'required|integer',
            'antisemitism' => 'required|integer',
        ]);
        Report::create($validatedData);
        return redirect()->route('reports.index');
    }

    public function edit(Report $report)
    {
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|max:1000',
            'result' => 'required|string|max:255',
            'racism' => 'required|integer',
            'sexism' => 'required|integer',
            'homophobia' => 'required|integer',
            'islamophobia' => 'required|integer',
            'antisemitism' => 'required|integer',
        ]);
        $report->update($validatedData);
        return redirect()->route('reports.index');
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('reports.index')->with('success', 'Report supprimée avec succès');
    }
}
