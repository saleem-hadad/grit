<?php

namespace App\Http\Controllers;

use App\Domain\DashboardService;
use Inertia\Inertia;
use App\Models\Achievement;

class DashboardController extends Controller
{
    public function index(DashboardService $dashboardService): \Inertia\Response
    {
        return Inertia::render('Dashboard', [
            'metrics' => $dashboardService->cards(),
            'hasData' => (bool) Achievement::count()
        ]);
    }
}
