<?php namespace MGBlog\Providers;

use InspireCommand;
use Illuminate\Support\ServiceProvider;

class ArtisanServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->commands('MGBlog\Console\InspireCommand');
        $this->commands('MGBlog\Console\ImportFlightclub');
        $this->commands('MGBlog\Console\ImportSneakerhead');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['MGBlog\Console\InspireCommand','MGBlog\Console\ImportFlightclub','MGBlog\Console\ImportSneakerhead'];
	}

}
