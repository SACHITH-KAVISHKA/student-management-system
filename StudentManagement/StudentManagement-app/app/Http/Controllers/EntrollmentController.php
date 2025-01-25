<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Enrollment;
use App\Models\Student;

class EntrollmentController extends Controller
{
    public function index(): view
    {
        $enrollments = Enrollment::all();
        return view ('enrollments.index')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $students = Student::pluck('name', 'id');
        $batches = Batch::pluck('name', 'id');
        return view('enrollments.create', compact('students', 'batches'));
        // return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $enrollments = Enrollment::find($id);
        $students = Student::pluck('name', 'id');
        $batches = Batch::pluck('name', 'id');
        return view('enrollments.edit', compact('enrollments', 'students', 'batches'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!'); 
    }
}
