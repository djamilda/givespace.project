<?php

namespace App\Http\Controllers;

use App\Models\Campaign;

class CampaignPageController extends Controller
{
    public function show(Campaign $campaign)
    {
        $campaign->loadCount('donations');
        $campaign->loadSum('donations', 'amount');

        return view('campaign.show', compact('campaign'));
    }
}
