<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function campaign()
    {
        $campaigns = Campaign::orderByDesc('created_at')->get();

        return view('campaign', compact('campaigns'));
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