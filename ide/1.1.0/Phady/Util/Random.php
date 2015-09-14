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
  * @class Phady\Util\Random - Util class for random string, int ...
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Util
  * @copyright (c) 2015
  * @version 1.0.0
  */
class Random
{

    /**
     * Return a seed value for the srand() function
     *
     * @deprecated Since 1.3.0, as this is not required since PHP 4.2.0.
     *
     * @return The resulting seed value
     */
    public static function getSeed() {}

    /**
     * Return a random integer between floor and ceil (inclusive).
     *
     * @param int floor The lower bound.
     * @param int ceil  The upper bound.
     *
     * @return The resulting random integer
     */
    public static function getInteger($floor, $ceil {}

    /**
     * Return a random string of specified length.
     *
     * This function uses md5() to generate the string.
     *
     * @param int length The length of string to generate.
     *
     * @return The resulting random integer.
     */
    public static function getRandomString($length) {}

    /**
     * Return a random string
     *
     * @param int minLen            The minimum string length.
     * @param int maxLen            The maximum string length.
     * @param boolean leadingCapital Whether or not the string should start with a capital letter (optional) (default=true).
     * @param boolean useUpper       Whether or not to also use uppercase letters (optional) (default=true).
     * @param boolean useLower       Whether or not to also use lowercase letters (optional) (default=true).
     * @param boolean useSpace       Whether or not to also use whitespace letters (optional) (default=true).
     * @param boolean useNumber      Whether or not to also use numeric characters (optional) (default=false).
     * @param boolean useSpecial     Whether or not to also use special characters (optional) (default=false).
     * @param boolean seed           Whether or not to seed the random number generator (unused since 1.3.0) (optional) (default=false) seeding not required for PHP>4.2.0.
     * @param array   dontuse        Array of characters not to use (optional) (default=null) eg dontuse=array("a", "b", "c");.
     *
     * @return The resulting random string.
     */
    public static function getString($minLen, $maxLen, $leadingCapital = true, $useUpper = true, $useLower = true, $useSpace = false, $useNumber = false,
									$useSpecial = false, $seed = false, $dontuse = null) {}
    
    /**
     * Return a random string suitable for use as a password or password-like code.
     *
     * The string should conform to the constraints of the current password requirements:
     * suitable for human use (readable and unambiguous), within the specified minimum and maximum lengths.
     *
     * @param integer minLength The minimum length of the string to return; optional; default = 5; constrained to 1 <= minLength <= 25.
     * @param integer maxLength The maximum length of the string to return; optional; default = minLength; constrained to minLength <= maxLength <= 25.
     *
     * @return string|bool A random string suitable for human-use as a password or password-like code; false on error.
     */
    public static function getStringForPassword($minLength = 5, $maxLength = 0) {}
}
