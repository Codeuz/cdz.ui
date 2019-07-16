<?php

namespace Cdz\Ui;

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider {
	
	/**
	 * Register services.
	 * 
	 * @return void
	 */
	public function register() {
    	include 'helpers.php';
    }
}