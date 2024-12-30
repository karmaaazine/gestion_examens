<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        
        // Render the dashboard view
        return view('dashboard');
    }
}
