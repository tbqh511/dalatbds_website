<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //HuyTBQ: config prefix for table of databds.com project
        Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        if (env('DB_PREFIX')) {
            $this->ignoreExistingTables();
        }
    }

    /**
    * Ignore the existing tables with specified prefix.
    */
    protected function ignoreExistingTables()
    {
        $prefix = env('DB_PREFIX');
        $schemaBuilder = Schema::getConnection()->getSchemaBuilder();

        $schemaBuilder->blueprintResolver(function ($table, $callback) use ($prefix) {
            return new \Illuminate\Database\Schema\Blueprint($table, $callback, $prefix);
        });
    }
}
