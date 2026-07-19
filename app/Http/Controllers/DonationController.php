<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'campaign' => 'nullable|integer',
            'amount' => 'required|integer|min:10000',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        Donation::create([
            'campaign_id' => $validated['campaign'] ?? null,
            'donor_name' => $validated['name'],
            'email' => $validated['email'],
            'amount' => $validated['amount'],
            'message' => $validated['message'] ?? null,
        ]);

        return Redirect::back()->with('success', 'Donasi berhasil disimpan.');
    }
}
