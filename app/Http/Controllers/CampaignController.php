<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::withCount('donations')
            ->withSum('donations', 'amount')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('dashboard.campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        return view('dashboard.campaigns.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_amount' => 'required|numeric|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        Campaign::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'target_amount' => (int) $validated['target_amount'],
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('campaigns.index')->with('success', 'Kampanye berhasil dibuat.');
    }

    public function edit(Campaign $campaign)
    {
        return view('dashboard.campaigns.edit', compact('campaign'));
    }

    public function update(Request $request, Campaign $campaign)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_amount' => 'required|numeric|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $campaign->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'target_amount' => (int) $validated['target_amount'],
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('campaigns.index')->with('success', 'Kampanye berhasil diperbarui.');
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        return redirect()->route('campaigns.index')->with('success', 'Kampanye berhasil dihapus.');
    }
}
