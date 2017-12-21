<?php

namespace App\Core;

use App\Core\Providers\EventServiceProvider;
use Illuminate\Support\ServiceProvider;


/**
 * Interface CoreServiceProvider
 * @package App\Core
 * @author Ilyas Serter <ilyasserter@teknasyon.com>
 */
class CoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(app_path('Core\Data\Migrations'));
    }

    public function register()
    {
        $this->app->register(EventServiceProvider::class);
    }
}