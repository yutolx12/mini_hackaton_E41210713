<?php
// Controller ini digunakan untuk menampilkan tampilan dashboard

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.layouts.dashboard');
    }
}
