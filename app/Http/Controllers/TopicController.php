<?php

namespace App\Http\Controllers;

class TopicController extends Controller
{
    public function show(string $slug)
    {
        $top3 = [
            ['medal' => 'Gold', 'name' => 'Dr A', 'score' => 96, 'confidence' => 'High'],
            ['medal' => 'Silver', 'name' => 'Dr B', 'score' => 93, 'confidence' => 'High'],
            ['medal' => 'Bronze', 'name' => 'Dr C', 'score' => 91, 'confidence' => 'High'],
        ];

        $top10 = [];
        for ($i = 1; $i <= 10; $i++) {
            $top10[] = [
                'rank' => $i,
                'name' => "Doctor $i",
                'totalScore' => 90 - ($i - 1),
                'breakdown' => [
                    'academic' => 80 - ($i - 1),
                    'outcomes' => null,
                    'reputation' => 75 - ($i - 1),
                    'crosscheck' => 85 - ($i - 1),
                ],
                'evidence' => [
                    ['label' => 'Registry verified', 'level' => 'strong'],
                    ['label' => 'Publications indexed', 'level' => 'medium'],
                    ['label' => 'Verified reviews', 'level' => 'medium'],
                    ['label' => 'Claims cross-checked', 'level' => 'strong'],
                ],
                'updatedAt' => now()->toISOString(),
            ];
        }

        return response()->json([
            'slug' => $slug,
            'updatedAt' => now()->toISOString(),
            'top3' => $top3,
            'top10' => $top10,
        ]);
    }
}