<?php

namespace Guywarner\LaravelSingleStoreScout\Commands;

use Illuminate\Console\Command;

class LaravelSingleStoreScoutCommand extends Command
{
    public $signature = 'laravel-singlestore-scout';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
