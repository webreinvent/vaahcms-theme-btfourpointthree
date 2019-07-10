<?php
namespace VaahCms\Themes\BtFourPointThree\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use VaahCms\Modules\Cms\Providers\RouteServiceProvider;

class BtFourPointThreeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->registerMiddleware($router);
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->registerSeeders();
        $this->registerAssets();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $this->registerHelpers();
    }


    /**
     *
     */
    private function registerMiddleware($router) {
        //register middleware
    }

    /**
     *
     */
    private function registerHelpers() {

        //load all the helpers
        foreach (glob(__DIR__.'/../Helpers/*.php') as $filename){
            require_once($filename);
        }

    }

    /**
     *
     */
    private function registerSeeders() {

        //load all the helpers
        foreach (glob(__DIR__.'/../Database/Seeds/*.php') as $filename){
            require_once($filename);
        }

    }


    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'btfourpointthree'
        );
    }

    /**
     * Register assets.
     *
     * @return void
     */
    public function registerAssets()
    {
        $viewPath = resource_path('/views/vaahcms/themes/btfourpointthree');

        $sourcePath = __DIR__.'/../Resources/assets';

        $this->publishes([$sourcePath => $viewPath],'assets');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/views/vaahcms/themes/btfourpointthree';
        }, \Config::get('view.paths')), [$sourcePath]), 'btfourpointthree');
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('/views/vaahcms/themes/btfourpointthree');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/views/vaahcms/themes/btfourpointthree';
        }, \Config::get('view.paths')), [$sourcePath]), 'btfourpointthree');

    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('/views/vaahcms/themes/btfourpointthree/lang');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'btfourpointthree');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'btfourpointthree');
        }

    }



    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
