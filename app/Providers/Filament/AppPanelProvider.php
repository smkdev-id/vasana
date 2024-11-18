<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\Navigation\NavigationItem;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
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
            ->id('tools')
            ->path('tools')
            ->login()
            ->brandLogo('https://smkdev.storage.googleapis.com/wp/SMKDEV-Logo-Long-150x38.png')
            ->favicon(url('https://smkdev.storage.googleapis.com/wp/icon-50x50.png'))
            ->registration()
            // ->passwordReset()
            // ->emailVerification()
            ->font("Poppins")
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/User/Resources'), for: 'App\\Filament\\User\\Resources')
            ->discoverPages(in: app_path('Filament/User/Pages'), for: 'App\\Filament\\User\\Pages')
            ->discoverClusters(in: app_path('Filament/User/Clusters'), for: 'App\\Filament\\User\\Clusters')
            ->discoverWidgets(in: app_path('Filament/User/Widgets'), for: 'App\\Filament\\User\\Widgets')
            ->pages([
                Pages\Dashboard::class,
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
            // ->sidebarCollapsibleOnDesktop()
            // ->topNavigation()
            // ->databaseNotifications()
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
