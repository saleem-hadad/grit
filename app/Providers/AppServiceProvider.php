<?php

namespace App\Providers;

use App\Domain\Ranges\CurrentMonth;
use App\Domain\Ranges\CurrentYear;
use App\Domain\Ranges\LastMonth;
use App\Domain\Ranges\LastTwelveMonths;
use App\Domain\Ranges\LastYear;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('findRangeByKey', function($_, $params) {
            $key = $params['key'];

            return collect([
                new CurrentMonth,
                new LastMonth,
                new CurrentYear,
                new LastYear,
                new LastTwelveMonths,
            ])->first(function ($range) use($key) {
                return $key === $range->key();
            }) ?: null;
            
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
