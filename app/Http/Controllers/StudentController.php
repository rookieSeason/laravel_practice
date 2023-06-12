<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index()
    {


        return view('students.index');
    }
}
