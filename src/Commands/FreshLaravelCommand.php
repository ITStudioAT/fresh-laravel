<?php

namespace Itstudioat\FreshLaravel\Commands;

use Illuminate\Console\Command;

class FreshLaravelCommand extends Command
{
    public $signature = 'fresh-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
