<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use function Laravel\Prompts\confirm;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('long-confirm-label', function () {
    $date = now()->format('Y-m-d');

    if (confirm("The current date is [<comment>{$date}</comment>]. The label for this prompt is very long. Is this okay?")) {
        $this->info('You chose to continue');
    } else {
        $this->info('You chose to cancel');
    }
});
