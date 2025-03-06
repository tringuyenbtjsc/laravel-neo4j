<?php

namespace BeeTech\Neo4j;

use BeeTech\Neo4j\Commands\Neo4jCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class Neo4jServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-neo4j')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_neo4j_table')
            ->hasCommand(Neo4jCommand::class);
    }
}
