<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobpositions;
class JobpositionController extends Controller
{
    public function index(){
        // Fetch all job positions from the database
        $jobpositions = Jobpositions::all();
        return view('job.index', compact('jobpositions'));
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'description' => 'required|string',
            'requiredQualifications' => 'required|string',
        ]);

        // Create a new job position
        $jobposition = Jobpositions::create([
            'Title' => $request->title,
            'Department' => $request->department,
            'Description' => $request->description,
            'RequiredQualifications' => $request->requiredQualifications,
        ]);
           $jobposition->save();
          // Redirect back to the job positions page with a success message
        return redirect()->route('job.index')->with('success', 'Job position created successfully.');

    }

    public function show_update($id){
        $jobposition = Jobpositions::find($id);
        return view('job.update', compact('jobposition'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'description' => 'required|string',
            'requiredQualifications' => 'required|string',
        ]);

        // Find the job position by ID and update it
        $jobposition = Jobpositions::find($id);
        $jobposition->Title = $request->title;
        $jobposition->Department = $request->department;
        $jobposition->Description = $request->description;
        $jobposition->RequiredQualifications = $request->requiredQualifications;
        $jobposition->save();

        // Redirect back to the job positions page with a success message
        return redirect()->route('job.index')->with('success', 'Job position updated successfully.');
    }

    public function destroy($id){
        $jobposition = Jobpositions::find($id);
        $jobposition->delete();

        // Redirect back to the job positions page with a success message
        return redirect()->route('job.index')->with('success', 'Job position deleted successfully.');
    }
}
