<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use Illuminate\Http\Request;

class PlanningController extends Controller
{
    //
    public function index()
    {
        return Planning::all();
    }
}
