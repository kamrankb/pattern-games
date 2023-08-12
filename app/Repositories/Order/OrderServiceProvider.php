<?php 

namespace App\Repositories\Order;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider {
    public function boot() {

    }

    public function register() {
        $this->app->bind('App\Repositories\Order\OrderInterface', 'App\Repositories\Order\OrderRepository');
    }
}