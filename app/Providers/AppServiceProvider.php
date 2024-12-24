<?php

namespace App\Providers;

use App\Models\PopUp;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME     = '/superadmin/dashboard';
    public const HOME_TWO = '/customer/dashboard';

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
        $currentDate = now()->toDateTimeString();

        $popups = PopUp::where('start_date', '<=', $currentDate)
            ->where('end_date', '>=', $currentDate)
            ->orderBy('priority', 'asc')
            ->get()
            ->each(function ($popup) {
                $popup->status = 1;
            });

        // session()->forget('popups');
        // session(['popups' => $popups]);

        Paginator::useBootstrap();
    }
}