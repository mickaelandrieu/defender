<?php namespace Artisans\Guardian\Facades;

use Illuminate\Support\Facades\Facade;

class Guardian extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'guardian';
	}

}