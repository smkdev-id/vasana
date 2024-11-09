<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use App\Filament\Pages\Settings;
use Filament\Navigation\MenuItem;
use Filament\Panel;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('app')
            ->path('app')
            ->login()
            ->registration()
            // ->passwordReset()
            ->emailVerification()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->brandLogo('https://smkdev.storage.googleapis.com/wp/SMKDEV-Logo-Long-150x38.png')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverClusters(in: app_path('Filament/Clusters'), for: 'App\\Filament\\Clusters')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->sidebarCollapsibleOnDesktop()
            ->userMenuItems([
                MenuItem::make()
                    ->label('Settings')
                    ->url(fn (): string => Settings::getUrl())
                    ->icon('heroicon-o-cog-6-tooth'),
                // ...
            ])
            ->navigationItems([
                NavigationItem::make('SMKDEV Website')
                    ->url('https://www.smk.dev/', shouldOpenInNewTab: true)
                    ->icon('heroicon-m-user-group')
                    ->group('Official')
                    ->sort(3),
                NavigationItem::make('LMS SMKDEV')
                    ->url('https://lms.smk.dev/', shouldOpenInNewTab: true)
                    ->icon('heroicon-s-book-open')
                    ->group('Official')
                    ->sort(3),
            ])
            // ->darkMode(false)
            // ->viteTheme('resources/css/filament/app/theme.css')
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
