<?php

use App\Jobs\UserCreateJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send', function () {
    UserCreateJob::dispatch("Salom, RabbitMQ!");
    return "Message queued!";
});
