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

namespace Phady\Core;

use Phalcon\Mvc\Application;

/**
  * @class Phady\Core\KernelMvc -  Kernel mvc
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Core
  * @copyright (c) 2015
  * @version 1.0.0
  */
class KernelMvc extends \Phady\Core\Kernel
{
    /**
     * @var <Phalcon\Mvc\Application> application - Instance of app
     */
    protected application;

    /**
     * @param string environment - development environment [dev | prod | test]
     * @param string scope - Scope of execution [mvc | cli]
     * @param string debug - Whether to enable debugging or not
     * @param array modules - Array modules
     */
    public function __construct($environment, $debug, $scope, $modules) { }
    
	/**
     * Initializes modules.
     *
     */
    protected function initializeModules() {}

    /**
     * @var <Phalcon\Mvc\Application> Get instance app
     */
    public function getApplication() {}
}
