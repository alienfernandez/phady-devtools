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

namespace Phady\Cache;

use Phalcon\Cache\Frontend\Data as CacheData;
use Phalcon\Cache\Backend\Redis;
use Phalcon\Cache\Backend\Memcache;
/**
  * @class Phady\Cache\CacheHandler -  Cache handlers for app
  *
  * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
  * @package Core
  * @copyright (c) 2015
  * @version 1.0.0
  */
final class CacheHandler implements \Phady\Cache\CacheInterface
{
	const REDIS_CACHE = "redis";
	const MEMCACHE_CACHE = "memcache";
	
    /**
     * @var array config - Config cache
     */
    protected $config;

    /**
     * @param array config - Config db
     */
    public function __construct($config) {}

    /**
     *
     * @return DBAdapter Data base adapter
     */
    public function getAdapter() {}
}
