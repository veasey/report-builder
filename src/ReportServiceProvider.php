<?php
namespace Veasey\ReportBuilder;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ReportServiceProvider extends IlluminateServiceProvider
{
  protected $defer = false;

  /**
   * Register the service provider.
   * @return void
   */
  public function register()
  {
    $this->app->bind('array.generator', function ($app) {
      return new ArrayGenerator ($app);
    });
    $this->app->bind('collection.generator', function ($app) {
      return new CollectionGenerator ($app);
    });

    $this->registerAliases();
  }

  public function boot()
  {
    // ...
  }

  protected function registerAliases()
  {
    if (class_exists('Illuminate\Foundation\AliasLoader')) {
      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
      $loader->alias('ReportArray', \Veasey\ReportBuilder\Facades\ReportArray::class);
      $loader->alias('ReportCollection', \Veasey\ReportBuilder\Facades\ReportCollection::class);
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
