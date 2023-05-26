<?php

namespace App\GraphQL\Queries;

use App\Domain\Metrics\Metric;
use App\Domain\Ranges\AllTime;
use App\Domain\Ranges\LastYear;
use App\Domain\Ranges\CurrentYear;
use App\Domain\Ranges\LastTwelveMonths;
use App\Models\Competency;

class CompetenciesReport extends Metric
{
    protected $component = 'competencies-report';

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

        $query = Competency::with(['metrics', 'metrics.achievements' => function ($query) use($rangeData) {
            if($rangeData) {
                return $query->whereBetween('achievements.created_at', [$rangeData->start(), $rangeData->end()])
                ->orderBy('achievements.date', 'desc');
            }

            return $query;
        }]);

        
            
        return $query->get();
    }
}