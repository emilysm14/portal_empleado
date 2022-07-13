<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CategoriaReceta;
use View;

class CategoriasProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view) {
            $categorias = CategoriaReceta::all();
            $view->with('categorias', $categorias);

        });
    }
}
