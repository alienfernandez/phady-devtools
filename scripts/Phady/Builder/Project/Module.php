<?php

/*
  +------------------------------------------------------------------------+
  | Phalcon Developer Tools                                                |
  +------------------------------------------------------------------------+
  | Copyright (c) 2011-2014 Phalcon Team (http://www.phalconphp.com)       |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file docs/LICENSE.txt.                        |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconphp.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
  | Authors: Andres Gutierrez <andres@phalconphp.com>                      |
  |          Eduar Carvajal <eduar@phalconphp.com>                         |
  +------------------------------------------------------------------------+
*/

namespace Phady\Builder\Project;

/**
 * Module
 *
 * Builder to create module application skeletons
 *
 * @category    Phady
 * @package     Scripts
 * @copyright   Copyright (c) 2011-2014 Phady Team 
 * @license     New BSD License
 */
class Module extends ProjectBuilder
{

    private $_dirs = array(
        'config',
        'controllers',
        'models',
        'models/entities',
        'models/business',
        'models/repositories',
        'services',
        'task',
        'translations',
		'views',
        'views/index',
        'views/partials',
        '.phady'
    );

    /**
     * Create indexController file
     *
     * @param $path
     * @param $name
     */
    private function createControllerFile($path, $name)
    {
        $modelBuilder = new \Phalcon\Builder\Controller(array(
            'name' => 'index',
            'controllersDir' => $path . 'apps/frontend/controllers/',
            'namespace' => ucfirst($name) . '\Frontend\Controllers',
            'baseClass' => 'ControllerBase'
        ));
        $modelBuilder->build();
    }

    /**
     * Create .htaccess files by default of application
     *
     */
    private function createHtaccessFiles($path, $templatePath)
    {

        if (file_exists($path . '.htaccess') == false) {
            $code = '<IfModule mod_rewrite.c>' . PHP_EOL .
                "\t" . 'RewriteEngine on' . PHP_EOL .
                "\t" . 'RewriteRule  ^$ public/    [L]' . PHP_EOL .
                "\t" . 'RewriteRule  (.*) public/$1 [L]' . PHP_EOL .
                '</IfModule>';
            file_put_contents($path . '.htaccess', $code);
        }

        if (file_exists($path . 'public/.htaccess') == false) {
            file_put_contents($path . 'public/.htaccess', file_get_contents($templatePath . '/project/modules/htaccess'));
        }

        if (file_exists($path . 'index.html') == false) {
            $code = '<html><body><h1>Mod-Rewrite is not enabled</h1><p>Please enable rewrite module on your web server to continue</body></html>';
            file_put_contents($path . 'index.html', $code);
        }

    }

    /**
     * Create view files by default
     *
     */
    private function createIndexViewFiles($path, $templatePath)
    {
        $getFile = $templatePath . '/project/modules/views/index.volt';
        $putFile = $path . 'apps/frontend/views/index.volt';
        $this->generateFile($getFile, $putFile);

        $getFile = $templatePath . '/project/modules/views/index/index.volt';
        $putFile = $path . 'apps/frontend/views/index/index.volt';
        $this->generateFile($getFile, $putFile);
    }

    /**
     * Creates the configuration
     *
     * @param $path
     * @param $templatePath
     * @param $name
     * @param $type
     */
    private function createConfig($path, $templatePath, $name, $type)
    {
        $getFile = $templatePath . '/project/modules/config.' . $type;
        $putFile = $path . 'apps/frontend/config/config.' . $type;
        $this->generateFile($getFile, $putFile, $name);
    }

    /**
     * Create ControllerBase
     *
     * @param $path
     * @param $templatePath
     * @param $name
     */
    private function createControllerBase($path, $templatePath, $name)
    {
        $getFile = $templatePath . '/project/modules/ControllerBase.php';
        $putFile = $path . 'apps/frontend/controllers/ControllerBase.php';
        $this->generateFile($getFile, $putFile, $name);
    }

    /**
     * Create ControllerBase
     *
     * @param $path
     * @param $templatePath
     * @param $name
     */
    private function createModule($path, $templatePath, $name)
    {
        $getFile = $templatePath . '/project/modules/Module.php';
        $putFile = $path . 'src/frontend/Module.php';
        $this->generateFile($getFile, $putFile, $name);
    }

    /**
     * Create Bootstrap file by default of application
     *
     * @param $name
     * @param $path
     * @param $templatePath
     */
    private function createBootstrapFile($name, $path, $templatePath)
    {
        $getFile = $templatePath . '/project/modules/index.php';
        $putFile = $path . 'public/index.php';
        $this->generateFile($getFile, $putFile, $name);

        $getFile = $templatePath . '/project/modules/services.php';
        $putFile = $path . 'config/services.php';
        $this->generateFile($getFile, $putFile, $name);

        $getFile = $templatePath . '/project/modules/modules.php';
        $putFile = $path . 'config/modules.php';
        $this->generateFile($getFile, $putFile, $name);
    }

    /**
     * Build project
     *
     * @param $name
     * @param $path
     * @param $templatePath
     * @param $options
     *
     * @return bool
     */
    public function build($name, $path, $templatePath, $options)
    {

        $this->buildDirectories($this->_dirs,$path);

        $this->getVariableValues($options);

        if (isset($options['useConfigIni']) && $options['useConfigIni']) {
            $this->createConfig($path, $templatePath, $name, 'ini');
        } else {
            $this->createConfig($path, $templatePath, $name, 'php');
        }

        $this->createBootstrapFile($name, $path, $templatePath);
        $this->createHtaccessFiles($path, $templatePath);
        $this->createControllerBase($path, $templatePath, $name);
        $this->createModule($path, $templatePath, $name);
        $this->createIndexViewFiles($path, $templatePath);
        $this->createControllerFile($path, $name);

        if ($options['enableWebTools']) {
            \Phalcon\Web\Tools::install($path);
        }

        return true;
    }

}
