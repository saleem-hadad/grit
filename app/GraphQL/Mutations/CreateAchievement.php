<?php

namespace App\GraphQL\Mutations;

use App\Models\Achievement;

use function PHPUnit\Framework\isEmpty;

class CreateAchievement
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $achievement = Achievement::create([
            'summary' => $args['summary'],
            'date' => $args['date'],
        ]);

        $achievement->metrics()->attach($args['metrics']);

        foreach(json_decode($args['links'], true) as $link) {
            if($link['url'] == '') {
                continue;
            }

            $achievement->links()->create([
                'label' => $link['label'] == '' ? 'Link' : $link['label'],
                'url' => $link['url'],
            ]);
        }

        return $achievement;
    }
}