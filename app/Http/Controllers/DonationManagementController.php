<?php

namespace App\Http\Controllers;

use App\Models\Donation;

class DonationManagementController extends Controller
{
    public function index()
    {
        $donations = Donation::with('campaign')
            ->latest()
            ->paginate(15);

        return view('dashboard.donations.index', compact('donations'));
    }
}
