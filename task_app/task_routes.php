<?php

use TaskApp\ChangeTaskState;
use TaskApp\DeleteTask;
use TaskApp\ShowTaskEditForm;
use TaskApp\TaskStoreController;
use TaskApp\TaskStoreResponses\Responses;
use TaskApp\Controllers\TaskController;

Route::get('tasks', [TaskController::class, 'index'])
     ->name('tasks.index')->middleware('auth:web');

Route::view('tasks/create', 'Task::tasks.create')
     ->name('tasks.create');

Route::post('tasks', [TasksController::class, 'store'])
     ->name('tasks.store');

Route::get('tasks/{task}/edit', [TasksController::class, 'edit'])
     ->name('tasks.edit');

Route::put('tasks/{task}', [TasksController::class, 'update'])
     ->name('tasks.update');

Route::delete('tasks/{task}', [TasksController::class, 'destroy'])
     ->name('tasks.destroy');
