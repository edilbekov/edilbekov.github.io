<?php

use App\Jobs\UserCreateJob;
use Illuminate\Support\Facades\Route;

Route::get('/send', function () {
    dd(1);
    UserCreateJob::dispatch("Salom, RabbitMQ!");
    return "Message queued!";
});
