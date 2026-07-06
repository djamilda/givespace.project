<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignPageController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query('q');
        $sort = $request->query('sort', 'latest');

        $campaigns = Campaign::query()
            ->where('is_active', true)
            ->when($query, fn ($q) => $q->where(function ($sub) use ($query) {
                $sub->where('title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            }))
            ->withCount('donations')
            ->withSum('donations', 'amount')
            ->when($sort === 'popular', fn ($q) => $q->orderByDesc('donations_sum_amount'))
            ->when($sort === 'target', fn ($q) => $q->orderByDesc('target_amount'))
            ->when($sort === 'oldest', fn ($q) => $q->orderBy('created_at'))
            ->when($sort === 'latest', fn ($q) => $q->orderByDesc('created_at'))
            ->paginate(9)
            ->withQueryString();

        return view('campaign.index', compact('campaigns'));
    }

    public function show(Campaign $campaign)
    {
        $campaign->loadCount('donations');
        $campaign->loadSum('donations', 'amount');

        return view('campaign.show', compact('campaign'));
    }
}
