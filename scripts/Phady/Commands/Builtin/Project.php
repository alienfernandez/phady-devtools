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

namespace Phady\Commands\Builtin;

use Phady\Script\Color;
use Phady\Commands\Command;
use Phady\Commands\CommandsInterface;
use Phady\Builder\Project as ProjectBuilder;

/**
 * CreateProject
 *
 * Creates project skeletons
 *
 * @category 	Phalcon
 * @package		Command
 * @subpackage  Project
 * @copyright	Copyright (c) 2011-2014 Phalcon Team (team@phalconphp.com)
 * @license		New BSD License
*/
class Project extends Command implements CommandsInterface
{

    protected $_possibleParameters = array(
        'name' => 'Name of the new project',
        'directory=s' => 'Base path on which project will be created [optional]',
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

        $projectName = $this->getOption(array('name', 1), null, 'default');
        $projectPath = $this->getOption(array('directory', 2), null, '');
        $templatePath = $this->getOption(array('template-path'), null, TEMPLATE_PATH);
        $useConfigIni = $this->getOption('use-config-yml');
		//print_r($projectName);die;
        $builder = new ProjectBuilder(array(
            'name' => $projectName,
            'directory' => $projectPath,
            'templatePath' => $templatePath,
            'useConfigYml' => $useConfigIni
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
        return array('project', 'create-project');
    }

    /**
     * Checks whether the command can be executed outside a Phalcon project
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
        print Color::colorize('  Creates a project') . PHP_EOL . PHP_EOL;

        print Color::head('Arguments:') . PHP_EOL;
        print Color::colorize('  help', Color::FG_GREEN);
        print Color::colorize("\tShows this help text") . PHP_EOL . PHP_EOL;

        print Color::head('Example') . PHP_EOL;
        print Color::colorize('  phalcon project store simple', Color::FG_GREEN) . PHP_EOL . PHP_EOL;

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
