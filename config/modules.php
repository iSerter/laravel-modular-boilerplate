<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'App\Modules',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

    'stubs' => [
        'enabled' => true,
        'path' => base_path('stubs'),
        'files' => [
            'start' => 'start.php',
            'routes' => 'UI/Http/Web/routes.php',
            'apiRoutes' => 'UI/Http/Api/routes.php',
            'views/index' => 'UI/Http/Web/Views/index.blade.php',
            'views/master' => 'UI/Http/Web/Views/layouts/master.blade.php',
            'scaffold/config' => 'Config/config.php',
            'composer' => 'composer.json',
        ],
        'replacements' => [
            'start' => ['LOWER_NAME', 'ROUTES_LOCATION'],
            'routes' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE'],
            'apiRoutes' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE'],
            'json' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE'],
            'views/index' => ['LOWER_NAME'],
            'views/master' => ['STUDLY_NAME'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer' => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
            ],
        ],
        'gitkeep' => true,
    ],

    'paths' => [
        
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will be added
        | automatically to list of scanned folders.
        |
        */

        'modules' => base_path('app/Modules'),

        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),

        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key to false to not generate that folder
        */
        'generator' => [
            'config' => ['path' => 'Config', 'generate' => true],
            'migration' => ['path' => 'Data/Migrations', 'generate' => true],
            'seeder' => ['path' => 'Data/Seeders', 'generate' => true],
            'factory' => ['path' => 'Data/Factories', 'generate' => true],
            'repository' => ['path' => '/Data/Repositories', 'generate' => true],
            'model' => ['path' => 'Data/Models', 'generate' => true],
            'observer' => ['path' => 'Data/Observers', 'generate' => true],
            'lang' => ['path' => 'Resources/Language', 'generate' => true],
            'command' => ['path' => 'UI/Console', 'generate' => true],
            'apiController' => ['path' => 'UI/Http/Api/Controllers', 'generate' => true],
            'apiFilter' => ['path' => 'UI/Http/Api/Middleware', 'generate' => true],
            'apiRequest' => ['path' => 'UI/Http/Api/Requests', 'generate' => true],
            'apiResources' => ['path' => 'UI/Http/Api/Transformers', 'generate' => true],
            'controller' => ['path' => 'UI/Http/Web/Controllers', 'generate' => true],
            'filter' => ['path' => 'UI/Http/Web/Middleware', 'generate' => true],
            'request' => ['path' => 'UI/Http/Web/Requests', 'generate' => true],
            'assets' => ['path' => 'UI/Http/Web/Assets', 'generate' => true],
            'views' => ['path' => 'UI/Http/Web/Views', 'generate' => true],
            'provider' => ['path' => 'Providers', 'generate' => true],
            'test' => ['path' => 'Tests', 'generate' => true],
            'event' => ['path' => 'Events', 'generate' => false],
            'listener' => ['path' => 'Listeners', 'generate' => false],
            'policies' => ['path' => 'Policies', 'generate' => false],
            'rules' => ['path' => 'Rules', 'generate' => false],
            'jobs' => ['path' => 'Jobs', 'generate' => true],
            'emails' => ['path' => 'Mails', 'generate' => false],
            'emailTemplates' => ['path' => 'Mails/Templates', 'generate' => false],
            'notifications' => ['path' => 'Notifications', 'generate' => false],
            'resource' => ['path' => 'Transformers', 'generate' => false],
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    |
    */

    'composer' => [
        'vendor' => 'app',
        'author' => [
            'name' => 'Ilyas Serter',
            'email' => 'info@ilyasserter.com',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */
    'cache' => [
        'enabled' => false,
        'key' => 'laravel-modules',
        'lifetime' => 60,
    ],
    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register' => [
        'translations' => true,
    ],
];
