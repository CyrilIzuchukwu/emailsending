<?php

namespace App\Providers;

use App\Models\PrivateVacation;
use App\Models\RegisteredMail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
        View::composer('*', function ($view) {
            $mailCount = RegisteredMail::count();
            $view->with('mailCount', $mailCount);


            $feedBackCount = PrivateVacation::count();
            $view->with('feedBackCount', $feedBackCount);
        });
    }
}
