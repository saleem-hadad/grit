<?php

namespace App\Domain;

use App\GraphQL\Queries\AchievementsTrend;
use App\GraphQL\Queries\CompetenciesReport;

class DashboardService
{
    public function cards(): array
    {
        return [

            (new SectionDivider)->withTitle("🔎 Overview"),
            (new AchievementsTrend),
            (new SectionDivider)->withTitle("🧩 Competencies report"),
            (new CompetenciesReport),
        ];
    }
}
