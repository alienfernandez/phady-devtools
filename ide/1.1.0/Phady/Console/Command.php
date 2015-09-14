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

namespace Phady\Console;

/**
  * @class Phady\Console\Command - Console class for execute command in console
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Console
  * @copyright (c) 2015
  * @version 1.0.0
  */
class Command
{
    const WINDOWS_PLATFORM = "Windows";
    const UNIX_PLATFORM = "Unix";

    /**
     * Run Application in background
     *
     * @param     string command
     * @param     int priority
     * @return     PID
     */
    public static function background($command, $priority = 0) {}

    /**
     * Check if the Application running !
     *
     * @param     string pID
     * @return     boolen
     */
    public static function isRunning($pID) {}

    /**
     * Kill Application PID
     *
     * @param  string pID
     * @return boolen
     */
    public static function kill($pID) {}
}
