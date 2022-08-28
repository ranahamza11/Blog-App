<?php

namespace App\Providers;

use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(Newsletter::class, function() {
            return new Newsletter(
                (new ApiClient())->setConfig([
                    'apiKey' => config('services.mailchimp.key'),
                    'server' => 'us12'
                ])
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();
        // Paginator::useBootstrap();
    }
}
