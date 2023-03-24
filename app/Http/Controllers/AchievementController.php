<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AchievementController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Achievement/Index');
    }
}
