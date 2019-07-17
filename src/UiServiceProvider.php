<?php

namespace Cdz\Ui;

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider 
{

	/**
	 * Commands
	 * @var array
	 */
	protected $commands = [
        'Cdz\Ui\Commands\UiStarter'
    ];
	
	/**
	 * Register services.
	 * 
	 * @return void
	 */
	public function register() 
	{
		$this->commands($this->commands);
    	include 'helpers.php';
    }
}