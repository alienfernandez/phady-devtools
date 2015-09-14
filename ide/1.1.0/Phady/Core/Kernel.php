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

use Phalcon\DI\FactoryDefault;
use Phalcon\DI\FactoryDefault\CLI as CliFactory;
use Phalcon\Loader;
use Phalcon\Db\Exception;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Flash\Session;
use Phalcon\Http\Response\Cookies;
use Phalcon\Session\Adapter\Files;
use Phalcon\Config\Adapter\Yaml;

/**
  * @class Phady\Core\Kernel -  Kernel system class
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Core
  * @copyright (c) 2015
  * @version 1.0.0
  */
abstract class Kernel
{

    /**
     * const ENVIRONMENT DEVELOPMENT
     */
    const ENVIRONMENT_DEV = "dev";

    /**
     * const ENVIRONMENT PRODUCTION
     */
    const ENVIRONMENT_PROD = "prod";

    /**
     * const ENVIRONMENT TEST
     */
    const ENVIRONMENT_TEST = "test";

    /**
     * const SCOPE CLI
     */
    const SCOPE_CLI = "cli";

    /**
     * const SCOPE MVC
     */
    const SCOPE_MVC = "mvc";

    /**
     * Const of version app
     */
    const VERSION = "1.0.0";
    const VERSION_ID = "10000";
    const MAJOR_VERSION = "1";
    const MINOR_VERSION = "0";
    const RELEASE_VERSION = "0";
    const EXTRA_VERSION = "";

    /**
     * @var array modules - Modules list
     */
    protected $modules;

    /**
     * @var array ns - ns list
     */
    protected $ns;

    /**
     * @var string rootDir - Root dir app
     */
    protected $rootDir;

    /**
     * @var string environment - Environment execution app
     */
    protected $environment;

    /**
     * Dependencies container
     * @var FactoryDefault
     */
    protected $container;

    /**
     * @var string scope - Scope execution app (cli or mvc)
     */
    protected $scope;

    /**
     * @var boolean debug - Is debug mode
     */
    protected $debug;

    /**
     * @var boolean debug - Is booted app
     */
    protected $booted;

    /**
     * @var array config - Array of file config app
     */
    protected $config;

    /**
     * Instance of Command console
     * @var Phady\Console\Command
     */
    protected $command;

    protected $startTime;

    protected $security;


    /**
     * Constructor.
     *
     * @param string environment - The environment
     * @param string scope - Scope of execution [mvc | cli]
     * @param boolean debug - Whether to enable debugging or not
     * @param array modules - Array modules app
     * @api
     */
    public function __construct($environment, $debug = false, $scope, $modules) {}

    /**
     * Start the current kernel.
     *
     * @api
     */
    public function boot() {}
    
    
    /**
     * Validate external libs exist
     *
     */
    protected function validateExternalLibrary() { }

    /**
     * Initializes the service container.
     *
     * The cached version of the service container is used when fresh, otherwise the
     * container is built.
     * @return FactoryDefault
     */
    protected function initializeContainer() {}

    /**
     * Initializes namespaces.
     *
     */
    protected function initializeNamespace() {}

    /**
     * Initializes default service.
     *
     */
    protected function initializeDefaultService() {}

    /**
     * Returns the core parameters.
     *
     * @return array An array of core parameters
     */
    protected function getCoreParameters() {}


    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function getRootDir() {}

    /**
     * Set evironment
     *
     * @api
     */
    public function setEnvironment($environment){}

    /**
     * Is debug mode
     *
     * @api
     */
    public function isDebug() {}

    /**
     * Get dependencies container
     *
     * @api
     */
    public function getContainer() {}

    /**
     * Get command cli exec
     *
     * @api
     */
    public function getCommand() {}

    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function getStartTime() {}

    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function getCacheDir() {}

    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function getLogDir() {}

    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function getCharset() {}

    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function shutdown() {}

    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function getEnvironment() {}

    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function getModules() {}

    public function serialize() {}

    public function unserialize($data) {}
}
