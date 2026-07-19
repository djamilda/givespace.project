<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $donationCount = Donation::count();
        $totalDonations = Donation::sum('amount');

        return view('dashboard', compact('donationCount', 'totalDonations'));
    }

    public function campaign()
    {
        return view('campaign');
    }

    public function donasi()
    {
        $campaigns = collect([
            (object) [
                'id' => 1,
                'title' => 'Bantu Pendidikan Anak',
                'description' => 'Kampanye pendidikan untuk anak-anak kurang mampu.',
                'target_amount' => 50000000,
            ],
            (object) [
                'id' => 2,
                'title' => 'Pangan untuk Keluarga',
                'description' => 'Membantu keluarga yang membutuhkan paket sembako.',
                'target_amount' => 30000000,
            ],
        ]);

        $recentDonations = collect([
            (object) [
                'donor_name' => 'Rina',
                'campaign' => (object) ['title' => 'Bantu Pendidikan Anak'],
                'amount' => 100000,
                'created_at' => now()->subDay(),
            ],
            (object) [
                'donor_name' => 'Budi',
                'campaign' => (object) ['title' => 'Pangan untuk Keluarga'],
                'amount' => 250000,
                'created_at' => now()->subDays(2),
            ],
        ]);

        $donationCount = $recentDonations->count();
        $totalDonations = $recentDonations->sum('amount');
        $totalTarget = $campaigns->sum('target_amount');

        return view('donasi', compact(
            'campaigns',
            'recentDonations',
            'donationCount',
            'totalDonations',
            'totalTarget'
        ));
    }

    public function user()
    {
        $users = User::latest()->get();

        return view('user', compact('users'));
    }

    public function laporan()
    {
        $donations = Donation::latest()->get();
        $donationCount = $donations->count();
        $totalDonations = $donations->sum('amount');

        return view('laporan', compact('donations', 'donationCount', 'totalDonations'));
    }
}