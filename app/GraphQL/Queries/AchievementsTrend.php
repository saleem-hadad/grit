<?php

namespace App\GraphQL\Queries;

use App\Domain\Ranges\AllTime;
use App\Domain\Ranges\LastYear;
use Illuminate\Support\Facades\DB;
use App\Domain\Ranges\CurrentYear;
use App\Domain\Metrics\TrendMetric;
use App\Domain\Ranges\LastTwelveMonths;
use App\Models\Achievement;

class AchievementsTrend extends TrendMetric
{
    public function ranges()
    {
        return [
            new LastTwelveMonths,
            new CurrentYear,
            new LastYear,
            new AllTime,
        ];
    }

    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $rangeData = app('findRangeByKey', ["key" => $args['range']]);

        $query = Achievement::query()
            ->select(DB::raw("date_format(date, '%Y-%m') as label, count(achievements.id) as value"))
            ->groupBy(DB::raw("label"))
            ->orderBy("label");

        if($rangeData) {
            $query->whereBetween('achievements.date', [$rangeData->start(), $rangeData->end()]);
        }
            
        return $query->get();
    }
}