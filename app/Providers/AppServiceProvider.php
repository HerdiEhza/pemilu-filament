<?php

namespace App\Providers;

use App\Filament\Resources\DataPartaiResource;
use App\Filament\Resources\DataTpsResource;
use App\Filament\Resources\IndonesiaProvincesResource;
use App\Filament\Resources\IndonesiaCitiesResource;
use App\Filament\Resources\IndonesiaDistrictsResource;
use App\Filament\Resources\IndonesiaVilagesResource;
use App\Filament\Resources\KategoriPemiluResource;
use App\Filament\Resources\PasanganCalonResource;
use App\Filament\Resources\UserResource;
use Illuminate\Support\ServiceProvider;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationItem;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::navigation(function (NavigationBuilder $builder): NavigationBuilder {
            return $builder
                ->items([
                    NavigationItem::make('Dashboard')
                        ->icon('heroicon-o-home')
                        ->activeIcon('heroicon-s-home')
                        ->isActiveWhen(fn (): bool => request()->routeIs('filament.pages.dashboard'))
                        ->url(route('filament.pages.dashboard')),
                ])
                ->groups([
                    NavigationGroup::make('TPS Management')
                        ->items([
                            ...DataTpsResource::getNavigationItems(),
                        ]),
                ])
                ->groups([
                    NavigationGroup::make('PASLON Management')
                        ->items([
                            ...PasanganCalonResource::getNavigationItems(),
                        ]),
                ])
                ->groups([
                    NavigationGroup::make('Data Pemilu')
                        ->items([
                            ...KategoriPemiluResource::getNavigationItems(),
                            ...DataPartaiResource::getNavigationItems(),
                        ]),
                ])
                ->groups([
                    NavigationGroup::make('Data Pemenangan')
                        ->items([
                            ...IndonesiaProvincesResource::getNavigationItems(),
                            ...IndonesiaCitiesResource::getNavigationItems(),
                            ...IndonesiaDistrictsResource::getNavigationItems(),
                            ...IndonesiaVilagesResource::getNavigationItems(),
                        ]),
                    ])
                ->groups([
                    NavigationGroup::make('User Management')
                        ->items([
                            ...UserResource::getNavigationItems(),
                        ]),
                ]);
        });
    }
}
