<?php

namespace App\Providers;

use Illuminate\Broadcasting\BroadcastController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

//        $attributes = ['middleware' => ['api']];

        Broadcast::routes();

//        $this->app['router']->group($attributes, function ($router) {
//            $router->post('/broadcasting/auth', '\\'.BroadcastController::class.'@authenticate');
//        });

        require base_path('routes/channels.php');
    }
}
