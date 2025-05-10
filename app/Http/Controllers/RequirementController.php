<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requirement;
class RequirementController extends Controller
{
    public function index()
    {
        $requirements = Requirement::all();
        return view('admin.admin-requirements', compact('requirements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        Requirement::create($request->all());
        return redirect()->route('admin.requirements')->with('success', 'Requirement created successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $requirement = Requirement::find($id);
        $requirement->update($request->all());
        return redirect()->route('admin.requirements')->with('success', 'Requirement updated successfully');    
    }
    
    public function destroy($id)
    {
        $requirement = Requirement::find($id);
        $requirement->delete();
        return redirect()->route('admin.requirements')->with('success', 'Requirement deleted successfully');
    }
}
