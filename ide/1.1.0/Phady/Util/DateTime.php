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
  * @class Phady\Util\DateTime - Util class for date and time manipulation
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Util
  * @copyright (c) 2015
  * @version 1.0.0
  */
class DateTime
{
    const FORMAT_DAYWEEK_DAY_MONTH_YEAR = "%A, %d de %B del %Y";
    const FORMAT_DAY_MONTH_YEAR = "%d de %B del %Y";
    const FORMAT_DAYWEEK_DAY_MONTH_YEAR_TIME = "%A, %d de %B del %Y a las %H:%I";
    const DEFAULT_LANGUAGE_DATE = "es_ES";

    const DATEFORMAT_FIXED = "%Y-%m-%d %H:%M:%S";
    const DATEONLYFORMAT_FIXED = "%Y-%m-%d";

    /**
     * @name getDateByLanguage - Get a date given language
     * @param array time date
     * @param array language Language return date
     * @param array format Format return date
     * @return string
     */
    public static function getDateByLanguage($time, $language = self::DEFAULT_LANGUAGE_DATE, format = self::FORMAT_DAYWEEK_DAY_MONTH_YEAR) {}

    /**
     * @name getDateMoment - Get the date as a $in days , months ...
     * @param $datetime date example. 2014-09-28 12:22:44
     * @param $showTime Whether to display the time
     * @return string
     */
    public static function getDateMoment ($datetime, $showTime = false) {}

    /**
     * Return a the number of days in the given month/year.
     *
     * @param integer month The (human) month number to check.
     * @param integer year  The year number to check.
     *
     * @return integer The number of days in the given month/year
     */
    public static function getDaysInMonth($month, $year) {}

    /**
     * Return an array of weekdays for the given month.
     *
     * @param integer month The (human) month number to check.
     * @param integer year  The year number to check.
     *
     * @return integer The number of days in the given month/year.
     */
    public static function getWeekdaysInMonth($month, $year) {}

    /**
     * Return the translated name of a specific timezone if exists.
     *
     * @param integer tz Timezone identifier.
     *
     * @return $Timezone translation (hour value).
     */
    public static function getTimezoneText($tz=null) {}
    /**
     * Return the translated list of timezones.
     *
     * @return array Timezones values and gettext strings.
     */
    public static function getTimezones() {}
}
