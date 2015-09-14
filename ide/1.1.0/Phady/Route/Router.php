<?php
/*
+------------------------------------------------------------------------+
| Phady Framework                                                        |
+------------------------------------------------------------------------+
| Copyright (c) 2015                                                     |
+------------------------------------------------------------------------+
| Phady Framework is a complement of Phalcon Framework                   |
|                                                                        |
+------------------------------------------------------------------------+
| Authors: Alien fernandez Fuentes <alienfernandez85@gmail.com>          |
+------------------------------------------------------------------------+
*/

namespace Phady\Route;

use Phalcon\Mvc\Router as PhRouter;

/**
  * @class Phady\Route\Router -  Routing componente app
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Core
  * @copyright (c) 2015
  * @version 1.0.0
  */
class Router
{

    private $config;

    private $router;

    private $configRoutes;

    public function __construct() {}

	/**
	 * Constructor.
	 *
	 * @param string config The config route
	 * @api
	 */
	public function setConfig($config) {}

	/**
	 *
	 * @return router
	 */
	public function getRouter() {}

	/**
	 * @name setDefaultRoute - Generate default route system
	 * @return void
	 */
	public function setDefaultRoute() {}

	/**
	 * @name setSystemRoutes - Build system paths routing config file
	 * @param array rootDir - System root directory
	 * @return void
	 */
	public function setSystemRoutes($rootDir) {}
}
