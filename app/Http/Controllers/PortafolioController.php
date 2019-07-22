<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the proyectos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portafolio', [
            'projects' => Project::latest()->paginate()
        ]);
    }
}
