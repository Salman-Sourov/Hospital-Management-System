<?php

namespace App\Providers;
use App\Models\Department;
use App\Models\service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

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
        Schema::defaultstringLength(191);
        Paginator::useBootstrap();

        view()->composer(
            'include.header', 
            function ($view) {
                $dept = Department::orderBy('dept_name', 'asc')->get();
                $data = service::orderBy('title', 'asc')->get();
                $view->with('departments', $dept)->with('services', $data);
            }
        );


        }
}
