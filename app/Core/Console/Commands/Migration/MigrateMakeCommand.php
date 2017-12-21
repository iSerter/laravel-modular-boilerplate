<?php

namespace App\Core\Console\Commands\Migration;


class MigrateMakeCommand extends \Illuminate\Database\Console\Migrations\MigrateMakeCommand
{

    protected $signature = 'core:make:migration {name : The name of the migration.}
        {--create= : The table to be created.}
        {--table= : The table to migrate.}
        {--path= : The location where the migration file should be created.}';

    /**
     * Get migration path (either specified by '--path' option or default location).
     *
     * @return string
     */
    protected function getMigrationPath()
    {
        if (! is_null($targetPath = $this->input->getOption('path'))) {
            return $this->laravel->basePath().'/'.$targetPath;
        }

        return app_path('Core/Data/Migrations');
    }
}
