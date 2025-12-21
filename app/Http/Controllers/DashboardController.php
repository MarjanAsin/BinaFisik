<?php

namespace App\Http\Controllers;

use App\Models\HasilPenilaian;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // total tes milik user yang sedang login
        $totalTes = HasilPenilaian::where('user_id', Auth::id())->count();

        return view('beranda', compact('totalTes'));
    }
}
