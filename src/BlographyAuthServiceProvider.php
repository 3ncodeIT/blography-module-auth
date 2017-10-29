<?php
/**
 * Created by PhpStorm.
 * User: 3ncode
 * Date: 2017/10/29
 * Time: 4:07 PM
 */

namespace _3ncode\Auth;


use Illuminate\Support\ServiceProvider;

class BlographyAuthServiceProvider extends ServiceProvider {

    public function boot() {
        require __DIR__ . '/../vendor/autoload.php';
    }

    public function register() {

        try {
            rename(base_path('resources/views/auth'), base_path('resources/views/auth-original'));
            rename(base_path('resources/assets/js/components'), base_path('resources/assets/js/components-original'));
        } catch(\Exception $e) {

        }

        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/auth'),
            __DIR__.'/resources/assets/js/components' => base_path('resources/assets/js/components')
        ]);
    }

}