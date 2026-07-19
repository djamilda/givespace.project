<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::orderByDesc('created_at')->paginate(10);

        return view('dashboard.campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        return view('dashboard.campaigns.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_amount' => 'required|numeric|min:0',
            'is_active' => 'sometimes|accepted',
        ]);

        $data['is_active'] = isset($data['is_active']);

        Campaign::create($data);

        return redirect()->route('campaigns.index')
            ->with('success', 'Kampanye berhasil dibuat.');
    }

    public function edit(Campaign $campaign)
    {
        return view('dashboard.campaigns.edit', compact('campaign'));
    }

    public function update(Request $request, Campaign $campaign)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_amount' => 'required|numeric|min:0',
            'is_active' => 'sometimes|accepted',
        ]);

        $data['is_active'] = isset($data['is_active']);

        $campaign->update($data);

        return redirect()->route('campaigns.index')
            ->with('success', 'Kampanye berhasil diperbarui.');
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        return redirect()->route('campaigns.index')
            ->with('success', 'Kampanye berhasil dihapus.');
    }
}
