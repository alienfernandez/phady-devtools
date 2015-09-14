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

namespace Phady\Http;

/**
 * @class Phady\Http\RequestMatcher
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class RequestMatcher implements RequestMatcherInterface
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $host;

    /**
     * @var array
     */
    private $methods = [];

    /**
     * @var string
     */
    private $ips = [];

    /**
     * @var array
     */
    private $attributes = [];

    /**
     * @var string[]
     */
    private $schemes = [];

    /**
     * @param string|null path
     * @param string|null host
     * @param string|string[]|null methods
     * @param string|string[]|null ips
     * @param array                attributes
     * @param string|string[]|null schemes
     */
    public function __construct($path = null, $host = null, $methods = null, $ips = null, $attributes = [], $schemes = null)
    {
    }

    /**
     * Adds a check for the HTTP scheme.
     *
     * @param string|string[]|null scheme An HTTP scheme or an array of HTTP schemes
     */
    public function matchScheme($scheme) {
    }

    /**
     * Adds a check for the URL host name.
     *
     * @param string regexp A Regexp
     */
    public function matchHost($regexp) {}

    /**
     * Adds a check for the URL path info.
     *
     * @param string regexp A Regexp
     */
    public function matchPath($regexp) {}

    /**
     * Adds a check for the client IP.
     *
     * @param string ip A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIp($ip) {}

    /**
     * Adds a check for the client IP.
     *
     * @param string|string[] ips A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIps($ips) {}

    /**
     * Adds a check for the HTTP method.
     *
     * @param string|string[] method An HTTP method or an array of HTTP methods
     */
    public function matchMethod($method) {}

    /**
     * Adds a check for request attribute.
     *
     * @param string key    The request attribute name
     * @param string regexp A Regexp
     */
    public function matchAttribute($key, $regexp) {}

    /**
     * {@inheritdoc}
     *
     * @api
     */
    public function matches($request) {}
}
