<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicants;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all applicants from the database
        $applicants = Applicants::all();
        return view('applicant.index', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:applicants,email',
            'contactnumber' => 'required|integer|min:12',
            'applicationdate'=> 'required|date|before_or_equal:today',
        ]);
        // Create a new applicant
        $applicants = Applicants::create([
            'FirstName'=>$request->firstname,
            'LastName'=>$request->lastname,
            'Email'=>$request->email,
            'ContactNumber'=>$request->contactnumber,
            'ApplicationDate'=>$request->applicationdate,
        ]);
        if ($applicants) {
            return redirect()->route('applicant.index')->with('success', 'Applicant registered successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to register applicant');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applicant = Applicants::find($id);
        return view('applicant.update',compact('applicant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $applicant = Applicants::find($id);
        $applicant->update([
            'FirstName'=>$request->firstname,
            'LastName'=>$request->lastname,
            'Email'=>$request->email,
            'ContactNumber'=>$request->contactnumber,
            'ApplicationDate'=>$request->applicationdate
        ]);
        return redirect()->route('applicant.index')->with('success', 'Applicant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $applicant = Applicants::find($id);
        $applicant->delete();
        return redirect()->route('applicant.index')->with('success', 'Applicant deleted sucessfully');

    }
}
