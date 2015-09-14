<?php
namespace Phady\Config;

/**
 * Phady\Config\Yaml
 *
 * Reads YAML files and converts them to Phady\Config objects.
 *
 * Given the following configuration file:
 *
 *<code>
 * phady
 *   baseuri: /phady/
 * models:
 *   metadata: memory
 *</code>
 *
 * You can read it as follows:
 *
 *<code>
 * $config = new Phady\Config\Yaml();
 * $config->parse("path/config.yaml")
 * echo $config->phady->baseuri;
 * echo $config->models->metadata;
 *</code>
 *
 */
class Yaml
{

	/**
	 * Phady\Config\Yaml constructor
	 *
	 * @param  string                    $filePath
	 * @param  array                     $callbacks
	 * @throws \Phady\Exception
	 */
    public static function parse($filePath, $callbacks = null){ }
}