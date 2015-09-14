#!/usr/bin/env php
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

error_reporting(E_ALL);

use Phady\Script;
use Phady\Version;
use Phady\Exception as PhadyException;

use Phady\Script\Color;
use Phady\Commands\CommandsListener;
use Phalcon\Loader;
use Phalcon\Events\Manager as EventsManager;

try {

    $extensionLoaded = true;
    if (!extension_loaded('phalcon')) {
        $extensionLoaded = false;
        throw new Exception('Phalcon extension isn\'t installed, follow these instructions to install it: http://docs.phalconphp.com/en/latest/reference/install.html');
    }
	if (!extension_loaded('phady')) {
        $extensionLoaded = false;
        throw new Exception('Phady extension isn\'t installed, follow these instructions to install it: URL');
    }

    $loader = new Loader();

    $loader->registerDirs(array(
        __DIR__ . '/scripts/'
    ));

    $loader->registerNamespaces(array(
        'Phady' => __DIR__ . '/scripts/'
    ));

    $loader->register();

    if (Version::getId() < Script::COMPATIBLE_VERSION) {
        throw new PhadyException('Your Phady version isn\'t compatible with Developer Tools, download the latest at: URL');
    }

    if (!defined('TEMPLATE_PATH')) {
        define('TEMPLATE_PATH', __DIR__ . '/templates');
    }

    $vendor = sprintf('Phady DevTools (%s)', Version::get());
    print PHP_EOL . Color::colorize($vendor, Color::FG_GREEN, Color::AT_BOLD) . PHP_EOL . PHP_EOL;

    $eventsManager = new EventsManager();

    $eventsManager->attach('command', new CommandsListener());

    $script = new Script($eventsManager);

    $commandsToEnable = array(
        '\Phady\Commands\Builtin\Project'
    );
    foreach ($commandsToEnable as $command) {
        $script->attach(new $command($script, $eventsManager));
    }
	//print_r(1111);die;

    $script->run();

} catch (PhadyException $e) {
    if ($extensionLoaded) {
        print Color::error($e->getMessage()) . PHP_EOL;
    } else {
        print 'ERROR: ' . $e->getMessage() . PHP_EOL;
    }

} catch (Exception $e) {
    if ($extensionLoaded) {
        print Color::error($e->getMessage()) . PHP_EOL;
    } else {
        print 'ERROR: ' . $e->getMessage() . PHP_EOL;
    }
}
