<?php

namespace App\Providers;

use App\Models\homework;
use App\Models\students;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
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
        Model::unguard();

        Gate::define('homework', function (students $student, homework $homework) {
            return $student->teacher_id === $homework->teacher->id;
        });

        Blade::if('admin', function () {
            return request()->user()?->can('homework');
        });
    }
}
