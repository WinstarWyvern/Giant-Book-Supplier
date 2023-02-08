<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $hasRun = DB::table('migrations')->where('migration', '2017_09_17_230130_create_assets_table')->exists();
        if($hasRun != null){
            
        }
        // view()->share('categories', Category::all());
    }
}
