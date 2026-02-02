<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
 
Artisan::command('say:hello', function () {
    $this->info('Hello from console!');
});

Artisan::command('say:bye', function () {
    $this->warn('Goodbye!');
});
