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
  * @class Phady\Util\Tools - Util class tools for app, server vars, ini values, etc...
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Util
  * @copyright (c) 2015
  * @version 1.0.0
  */
class Tools
{
    const REQUEST_PROTOCOL_HTTP = "http";
    const REQUEST_PROTOCOL_HTTPS = "https";

    /**
     * Get the server variable SERVER_NAME
     *
     * @return string server name
     */
    public static function getServerName() {}

    /**
     * Get the server variable HTTP_HOST
     *
     * @return string host http name
     */
    public static function getHttpHost() {}

    /**
     * Get the protocol used by the app - http|https
     *
     * @return string
     */
    public function getRequestProtocol() {}

    /**
     * Get the server variable REMOTE_ADDR, or the first ip of HTTP_X_FORWARDED_FOR (when using proxy)
     *
     * @return string $remote_addr ip of client
     */
    public static function getRemoteAddr() {}

    /**
     * Check if the current page use SSL connection on not
     *
     * @return bool uses SSL
     */
    public static function usingSecureMode() {}

    /**
     * getMemoryLimit allow to get the memory limit in octet
     *
     * @return int the memory limit value in octet
     */
    public static function getMemoryLimit() {}

    /**
     * getOctet allow to gets the value of a configuration option in octet
     *
     * @return int the value of a configuration option in octet
     */
    public static function getOctets($option) {}

    /**
     * getHostName Get host name
     *
     * @return string
     */
    public static function getHostName() {}

    /**
     * getUserAgent Get user agent
     *
     * @return string
     */
    public static function getUserAgent() {}

}
