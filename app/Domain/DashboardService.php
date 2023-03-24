<?php

namespace App\Domain;

class DashboardService
{
    public function cards(): array
    {
        return [

            (new SectionDivider)->withTitle("🔎 Overview"),
        ];
    }
}
