<?php

namespace App\Filament\Widgets;

use App\Models\TpsResult;
use Filament\Widgets\BarChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BlogPostsChart extends BarChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $data = TpsResult::where('is_active', true)->count();
        
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts',
                    'data' => $data->map(fn (TpsResult $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TpsResult $value) => $value->date),
        ];
        
    }
}
