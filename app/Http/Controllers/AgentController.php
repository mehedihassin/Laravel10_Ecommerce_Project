<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function Dashboard()
    {
     return view('backend.agent.dashboard');
    }
}
