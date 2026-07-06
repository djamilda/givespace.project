<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDonations = Donation::sum('amount');
        $totalDonors = Donation::count();
        $activeCampaigns = Campaign::where('is_active', true)->count();
        $totalTarget = Campaign::sum('target_amount');
        $targetReached = $totalTarget > 0 ? min(100, (int) round($totalDonations / $totalTarget * 100)) : 0;

        $campaigns = Campaign::withSum('donations', 'amount')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $recentDonations = Donation::with('campaign')
            ->orderByDesc('created_at')
            ->take(5)
            ->get();

        return view('dashboard.index', compact(
            'totalDonations',
            'totalDonors',
            'activeCampaigns',
            'targetReached',
            'campaigns',
            'recentDonations'
        ));
    }
}
