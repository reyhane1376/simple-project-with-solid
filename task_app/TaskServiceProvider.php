<?php

namespace TaskApp;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TaskServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Route::middleware('web')->group(base_path('task_app/task_routes.php'));
        $this->loadMigrationsFrom([
            base_path('task_app/migration')
        ]);
        $this->loadViewsFrom(base_path('task_app/views'), 'Task');
    }
}
