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

namespace Phady\Builder\Project;

/**
 * ProjectBuilder
 *
 * Abstract Builder to create application skeletons
 *
 * @category  Phady
 * @package   Scripts
 * @copyright   Copyright (c) 2011-2014 Phady Team (team@Phadyphp.com)
 * @license   New BSD License
 */
abstract class ProjectBuilder
{
    /* Stores variable values depending on parameters */
    protected $variableValues;

    abstract public function build($name, $path, $templatePath, $options);

    public function buildDirectories(array $directoryList,$path)
    {
        foreach ($directoryList as $dir) {
            @mkdir(rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $dir);
			@chmod(rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $dir, 0777);
        }
    }

    /**
     * Generate variable values depending on parameters
     *
     * @param $options
     */
    protected function getVariableValues($options) 
    {
        $variableValuesResult = array();
        $variablesJsonFile = $options['templatePath'].'/project/'.$options['type'].'/variables.json';
        if(file_exists($variablesJsonFile)) {
            $variableValues = json_decode(file_get_contents($variablesJsonFile), true);
            if($variableValues) {
              foreach($options as $k => $option) {
                  if(!isset($variableValues[$k])) {
                      continue;
                  }
                  $valueKey = $option ? 'true':'false';
                  $variableValuesResult = $variableValues[$k][$valueKey];
              }
            }
            $this->variableValues = $variableValuesResult;
        }
    }

    /**
    * Generate file $putFile from $getFile, replacing @@variableValues@@
    * @param $getFile
    * @param $putFile
    * @param $name
    */
    protected function generateFile($getFile, $putFile, $name = '') {

       if (file_exists($putFile) == false) {
            $str = file_get_contents($getFile);
            if($name) {
                $str = preg_replace('/@@name@@/', $name, $str);
                $str = preg_replace('/@@namespace@@/', ucfirst($name), $str);
            }
            if(sizeof($this->variableValues) > 0) {
                foreach($this->variableValues as $variableValueKey => $variableValue) {
                    $variableValueKeyRegEx = '/@@'.preg_quote($variableValueKey, '/').'@@/';
                    $str = preg_replace($variableValueKeyRegEx, $variableValue, $str);
                }
            }
            file_put_contents($putFile, $str);
        }

    }
	
    /**
    * Co file $putFile from $getFile, replacing @@variableValues@@
    * @param $getFile
    * @param $putFile
    * @param $name
    */
    protected function copyFiles($path, $pathTo) {
		$adminFile = new \Phady\Builder\AdministradorArchivo();
		$copyAll = $adminFile->recurse_copy($path, $pathTo);
    }
}
