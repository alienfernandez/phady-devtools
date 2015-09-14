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
  * @class Phady\Util\Text - Util class for text manipulation
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Util
  * @copyright (c) 2015
  * @version 1.0.0
  */
class Text
{
    const BACKGROUND_COLOR_DEFAULT = "#D82EE8";
  	const COLOR_DEFAULT = "#FFFFFF";
  	const BREAK_DEFAULT = ".";
  	const PAD_DEFAULT = "...";

	/**
	 * @name highlight - Highlight text to display as html
	 *
	 * @param string text Text highlight
	 * @param string query Sub searched string
	 * @param boolean first Whether to search only by First Letter
	 * @param string background_color Background color of the highlighted
	 * @param string color Font color of the highlighted
	 * @return string
	 */
    public static function highlight($text, $query, boolean first, $background_color = self::BACKGROUND_COLOR_DEFAULT, $color = self::COLOR_DEFAULT) {}

    /**
     * @name truncate - Truncate a string
     *
     * @param string text - String truncated
     * @param int limit - limit to truncate
     * @param string str_break - string to break
     * @param string pad - filling the end of the string
     * @return string
     */
    public static function truncate($text, $limit, $str_break = self::BREAK_DEFAULT, $pad = self::PAD_DEFAULT) {}

    /**
     * @name findAndReplaceUrlTags - Search mail and url and replace the complete url
     *
     * @param array text String to replace
     * @return string
     */
    public static function findAndReplaceUrlTags($text) {}

    /**
    * Transform a snake_case string into a camelCase string.
    *
    * @param string snake the string to convert
    * @return string
    */
    public static function snakeToCamel( $snake ) {}


    /**
    * Transform a camelCase string into a snake_case string.
    *
    * @param string camel the string to convert
    * @return string
    */
    public static function camelToSnake( $camel ) {}
    
	/**
    * Transform a text to uppercase.
    *
    * @deprecated	Use {@link mb_strtoupper} instead.
    *
    * @param text the text to transform.
    * @param encoding the character encoding to use. default is {@link mb_internal_encoding()}.
    * @return	the text in uppercase.
    */
    public static function toUpper( $text, $encoding = null ) {}
    
    /**
    * Transform a text to lowercase.
    *
    * @deprecated	Use {@link mb_strtolower} instead.
    *
    * @param text the text to transform.
    * @param encoding the character encoding to use. default is {@link mb_internal_encoding()}.
    * @return	the text in lowercase.
    */
    public static function toLower( $text, $encoding = null ) {}

    /**
    * Transform all the letters to lowercase and just the first letter of each word to uppercase.
    *
    * This method can be replaced by {@code mb_convert_case( "your text here", MB_CASE_TITLE )} when
    * the {@code exceptions} parameter is not given.
    *
    * How to use it:
    * #( "john von neumann", array( " von " ) ) ==> "John von Neumann"
    * #( "JOHN VON NEUMANN", array( " von " ) ) ==> "John von Neumann"
    * #( "maria da silva e castro", array( " da ", " e " ) ) ==> "Maria da Silva e Castro"
    *
    * @see {@link commonNameExceptions}.
    *
    * @param text text to transform.
    * @param exceptions array of words to ignore exceptions.
    * @param encoding the character encoding to use. default is {@link mb_internal_encoding()}.
    * @return	the transformed text.
    */
    public static function upperCaseFirst( $text, $exceptions = [], $encoding = null ) {}
    
    /**
     * Count the instances of needle in the given string
     *
     * Why is this function here? PHP has a builtin substr_count()
     * to do the same.
     *
     * @param string haystack The string to search.
     * @param string needle   The needle to search for and count.
     *
     * @return integer The numer of instances of needle in string
     */
    public static function countInstances($haystack, $needle) {}


    /**
     * Translate html input newlines to <br /> sequences.
     *
     * This function is necessary as inputted strings will contain
     * "\n\r" instead of just "\n".
     *
     * @param string text The string to operate on.
     *
     * @return string The converted string.
     */
    public static function nl2html($text) {}

    /**
     * Tokenize a string according to the given parameters.
     *
     * This function just wraps explode to provide a more java-similar syntax.
     *
     * @param string  text    The string to tokenize.
     * @param string  delimeter The delimeter to use.
     * @param int max       The maximal number of tokens to generate (optional) (default=999999).
     *
     * @return array The token array.
     */
    public static function tokenize($text, $delimeter, $max = 999999) {}
    
    /**
     * Case-Insensitive version of strpos (standard only available in PHP 5)
     *
     * @param string  haystack The string to search.
     * @param string  needle   The string to search for.
     * @param int offset   The search start offset position (optional) (default=0).
     *
     * @return array The token array.
     */
    public static function stripos($haystack, $needle, $offset = 0) {}
    
    /**
     * Returns the left x chars of a string.
     *
     * If the string is longer than x, the whole string is returned.
     *
     * @param string  text The string to operate on.
     * @param int left   The number of chars to return.
     *
     * @return string A part of the supplied string.
     */
    public static function left($text, $left = 0) {}

    /**
     * Returns the right x chars of a string.
     *
     * If the string is longer than x, the whole string is returned.
     *
     * @param string  text The string to operate on.
     * @param integer right  The number of chars to return.
     *
     * @return string A part of the supplied string.
     */
    public static function right($text, $right = 0) {}


    /**
     * Timing attack safe string comparison
     *
     * @param string knownString The string of known length to compare against
     * @param string userString   The string that the user can control
     *
     * @return bool true if the two strings are the same, false otherwise
     */
    public static function hash_equals($knownString, $userString) {}

    /**
     * Compares two strings.
     *
     * This method implements a constant-time algorithm to compare strings.
     * Regardless of the used implementation, it will leak length information.
     *
     * @param string knownString The string of known length to compare against
     * @param string userInput   The string that the user can control
     *
     * @return bool true if the two strings are the same, false otherwise
     */
    public static function equals($knownString, $userInput) {}

    /**
     * Returns the number of bytes in a string.
     *
     * @param string string The string whose length we wish to obtain
     *
     * @return int
     */
    public static function safeStrlen($text) {}


}
