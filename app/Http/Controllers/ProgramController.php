<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        // Ambil semua program
        $programs = Program::all();
        return view('program.index', compact('programs'));
    }

    public function show($id)
    {
        $program = Program::findOrFail($id);
        return view('program.show', compact('program'));
    }
}
