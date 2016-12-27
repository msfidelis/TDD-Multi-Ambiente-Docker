<?php
namespace App\Controllers;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Silex\ControllerCollection;


class CategoriasController implements ControllerProviderInterface {

	public function connect(Application $app) {
		$index = $app['controllers_factory'];

		$index->get('/', function() use ($app) {
			return $app->json(['status' =>
			'funcionando']);
		});

		return $index;
	}
}
