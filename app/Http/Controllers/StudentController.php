<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    //

    public function index()
    {
        $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->simplePaginate(10));
        return view('students.index', $data);
    }
    public function create()
    {

        return view('students.create')->with('title', 'Add New Student');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'min:4'],
            'last_name' => ['required', 'min:4'],
            'gender' => ['required'],
            'age' => ['required'],
            'email' => ['required', 'email', Rule::unique('students', 'email')],

        ]);

        Students::create($validated);

        return redirect('/')->with('message', 'New Student added successfully!');
    }
    public function show($id)
    {
        $data = Students::findOrFail($id);
        return view('students.edit', ['student' => $data]);
    }

    public function update(Request $request, string $id)
    {
        $student = Students::find($id);
        $validated = $request->validate([
            'first_name' => ['required', 'min:4'],
            'last_name' => ['required', 'min:4'],
            'gender' => ['required'],
            'age' => ['required'],
            'email' => ['required', 'email'],
        ]);
        $student->update($validated);
        return redirect('/')->with('message', 'Data was successfully updated!');
    }

    public function destroy(Request $request, string $id)
    {
        $student = Students::find($id);
        $input = $request->all();
        $student->delete($input);

        return redirect('/')->with('message', 'Deleted Successfully!');
    }
}
