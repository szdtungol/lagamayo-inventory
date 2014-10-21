<?php namespace Composers;

use Config;

class BaseComposer
{
	public function compose($view)
	{
		$view->with('site_name',Config::get('site.name'));
		$view->with('site_url',Config::get('site.url'));
		$view->with('site_encoding',Config::get('site.encoding'));
		$view->with('site_keywords',Config::get('site.keywords'));
		$view->with('site_description',Config::get('site.description'));
		$view->with('site_author',Config::get('site.author'));
		$view->with('site_version',Config::get('site.version'));
	}
}
