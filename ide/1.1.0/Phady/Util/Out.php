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

namespace Phady\Util;

/**
  * @class Phady\Util\Out - Util class for print
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Util
  * @copyright (c) 2015
  * @version 1.0.0
  */
class Out
{

    /**
     * Display a variable"s contents using nice HTML formatting and will
     * properly display the value of booleans as true or false
     *
     * @see var_dump_plain()
     *
     * @param  mixed $The variable to dump
     * @return string
     */
    public static function dump($varToDump, $returnDump = false, $expandLevel = 1) {}

    /**
     * Display a variable"s contents using nice HTML formatting (Without
     * the <pre> tag) and will properly display the values of variables
     * like booleans and resources. Supports collapsable arrays and objects
     * as well.
     *
     * @param  mixed $The variable to dump
     * @return string
     */
    public static function var_dump_plain($varToDump, $expLevel, $depth = 0, $done = []) {}

    /**
     * Convert entities, while preserving already-encoded entities.
     *
     * @param  string string The text to be converted
     * @return string
     */
    public static function htmlentities($text, $preserve_encoded_entities = false) {}
    
    /**
     * Wrapper to prevent errors if the user doesn't have the mbstring
     * extension installed.
     *
     * @param  string encoding
     * @return string
     */
    protected static function mbInternalEncoding($encoding = null) {}
}
