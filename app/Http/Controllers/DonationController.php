<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    private function activeCampaigns()
    {
        return Campaign::where('is_active', true)->orderBy('title')->get();
    }

    public function index()
    {
        $campaigns = $this->activeCampaigns();
        $totalDonations = Donation::sum('amount');
        $donationCount = Donation::count();
        $totalTarget = $campaigns->sum('target_amount');
        $recentDonations = Donation::with('campaign')->latest()->take(4)->get();

        return view('donate', compact('campaigns', 'totalDonations', 'donationCount', 'totalTarget', 'recentDonations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'campaign' => 'required|exists:campaigns,id',
            'amount' => 'required|numeric|min:10000',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'message' => 'nullable|string|max:500',
        ], [
            'amount.min' => 'Minimal donasi adalah Rp 10.000.',
        ]);

        $campaign = Campaign::findOrFail($request->campaign);

        Donation::create([
            'campaign_id' => $campaign->id,
            'amount' => (int) $request->amount,
            'donor_name' => $request->name,
            'donor_email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('donate')
            ->with('success', "Terima kasih {$request->name}! Donasi Anda untuk \"{$campaign->title}\" sebesar Rp " . number_format($request->amount, 0, ',', '.') . " telah diterima.");
    }
}
