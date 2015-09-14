<?php

/*
  +------------------------------------------------------------------------+
  | Phady Developer Tools                                                  |
  +------------------------------------------------------------------------+
  | Copyright (c) 2015                                                     |
  +------------------------------------------------------------------------+
  | Phady Framework is a complement of Phalcon Framework                   |
  |                                                                        |
  +------------------------------------------------------------------------+
  | Authors: Alien fernandez Fuentes <alienfernandez85@gmail.com>          |
  +------------------------------------------------------------------------+
*/

namespace Phady\Commands\Builtin;

use Phalcon\Script\Color;
use Phalcon\Commands\Command;
use Phalcon\Commands\CommandsInterface;
use Phalcon\Builder\Module as ModuleBuilder;

/**
 * CreateModule
 *
 * Creates Module skeletons
 *
 * @category 	Phalcon
 * @package		Command
 * @subpackage  Module
 * @copyright	Copyright (c) 2011-2014 Phalcon Team (team@phalconphp.com)
 * @license		New BSD License
*/
class Module extends Command implements CommandsInterface
{

    protected $_possibleParameters = array(
        'name' => 'Name of the new Module',
        'directory=s' => 'Base path on which Module will be created [optional]',
        'template-path' => 'Specify a template path [optional]',
        'use-config-yml' => 'Use a yml file as configuration file [optional]',
        'trace' => 'Shows the trace of the framework in case of exception. [optional]',
        'help' => 'Shows this help'
    );

    /**
     * Executes the current command
     *
     * @param  array $parameters
     * @return mixed
     */
    public function run($parameters)
    {

        $ModuleName = $this->getOption(array('name', 1), null, 'default');
        $ModulePath = $this->getOption(array('directory', 2), null, '');
        $templatePath = $this->getOption(array('template-path'), null, TEMPLATE_PATH);
        $useConfigYml = $this->getOption('use-config-yml');

        $builder = new ModuleBuilder(array(
            'name' => $ModuleName,
            'type' => $ModuleType,
            'directory' => $ModulePath,
            'enableWebTools' => $enableWebtools,
            'templatePath' => $templatePath,
            'useConfigIni' => $useConfigIni
        ));

        return $builder->build();
    }

    /**
     * Returns the command identifier
     *
     * @return array
     */
    public function getCommands()
    {
        return array('module', 'create-module');
    }

    /**
     * Checks whether the command can be executed outside a Phalcon Module
     */
    public function canBeExternal()
    {
        return true;
    }

    /**
     * Prints the help for current command.
     *
     * @return void
     */
    public function getHelp()
    {
        print Color::head('Help:') . PHP_EOL;
        print Color::colorize(' Creates a Module') . PHP_EOL . PHP_EOL;

        print Color::head('Usage:') . PHP_EOL;
        print Color::colorize(' Module [name] [directory] ', Color::FG_GREEN) . PHP_EOL . PHP_EOL;

        print Color::head('Arguments:') . PHP_EOL;
        print Color::colorize('  help', Color::FG_GREEN);
        print Color::colorize("\tShows this help text") . PHP_EOL . PHP_EOL;

        $this->printParameters($this->_possibleParameters);
    }

    /**
     * Returns number of required parameters for this command
     *
     * @return int
     */
    public function getRequiredParams()
    {
        return 1;
    }
}
