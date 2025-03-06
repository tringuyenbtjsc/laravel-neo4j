<?php

namespace BeeTech\Neo4j\Commands;

use Illuminate\Console\Command;

class Neo4jCommand extends Command
{
    public $signature = 'laravel-neo4j';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
