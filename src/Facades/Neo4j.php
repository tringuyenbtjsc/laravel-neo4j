<?php

namespace BeeTech\Neo4j\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BeeTech\Neo4j\Neo4j
 */
class Neo4j extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \BeeTech\Neo4j\Neo4j::class;
    }
}
