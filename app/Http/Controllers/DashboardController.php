<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function campaign()
    {
        return view('campaign');
    }

    public function donasi()
    {
        return view('donasi');
    }

    public function user()
    {
        return view('user');
    }

    public function laporan()
    {
        return view('laporan');
    }
}